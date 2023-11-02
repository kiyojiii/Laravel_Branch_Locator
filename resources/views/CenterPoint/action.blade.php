<a href="{{ route('centerpoint.edit', $model) }}" class="btn btn-warning btn-sm"> Edit </a>
<button href="{{ route('centerpoint.destroy', $model) }}" class="btn btn-danger btn-sm"> Delete </button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('#delete').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'The Data has been deleted.',
                    'success'
                )
            }
        })
    })
</script>