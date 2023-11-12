@extends('admin.admin_dashboard')
@section('admin')

<style>
    /* Custom CSS for styling radio button labels */
    .form-check-input[type="radio"] + label {
        display: inline-block;
        width: 60px;
        height: 20px;
        line-height: 5px;
        border-radius: 40px;
        padding: 8px;
        text-align: center;
        cursor: pointer;
    }

    /* Green background for "Open" */
    #statusOpen + label {
        background-color: #16FF00; /* Green color */
        color: white; /* Text color */
    }

    /* Red background for "Closed" */
    #statusClosed + label {
        background-color: #FF0000; /* Red color */
        color: white; /* Text color */
    }
</style>

<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Job</h6>
                    <form method="POST" action="{{ route('update.job') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $jobs->id }}">
                        <div class="row">
                            <div class="col-sm-1">
                            <div class="mb-3">
                                <label class="form-label">Slots</label>
                                <input name="slots" type="number" class="form-control" step="1" value="{{ $jobs->slots }}">
                                @error('slots')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Position</label>
                                    <input name="position" type="text" class="form-control" value="{{ $jobs->position }}">
                                    @error('position')
                                    <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Department</label>
                                    <input name="department" type="text" class="form-control" value="{{ $jobs->department }}">
                                    @error('department')
                                    <span class="text-danger">{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Status</label>
								<br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="statusOpen" value="Open" {{ $jobs->status === 'Open' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusOpen">Open</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="statusClosed" value="Closed" {{ $jobs->status === 'Closed' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusClosed">Closed</label>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Branch Location</label>
                                    <select name="branchloc" class="form-control" size="5" style="max-height: 120px; overflow-y: auto;" required>
                                        @foreach ($branch as $spot)
                                            <option value="{{ $spot->name }}" @if($jobs->branchloc == $spot->name) selected @endif>{{ $spot->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('branchloc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary submit">Update Job</button>
                        <button type="button" class="btn btn-secondary" onclick="goBack()">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
