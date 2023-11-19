<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin Dashboard - Branch Locator</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
	<!-- endinject -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
	<!-- Layout styles -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/demo1/style.css') }}">
	<!-- End layout styles -->
	
    <!-- Favicons -->
    <link href="{{ asset('backend/assets2/img/NMPCLogo.png') }}" rel="icon">
    <link href="{{ asset('backend/assets2/img/NMPCLogo.png') }}" rel="apple-touch-icon">
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	<!-- include leaflet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
	<link href="https://cdn.jsdelivr.net/npm/leaflet-search@4.0.0/dist/leaflet-search.src.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@3.0.0/Control.FullScreen.min.css" rel="stylesheet">
	<!-- Include SweetAlert CSS and JS from a CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.9.0/sweetalert2.all.min.js" integrity="sha512-LTmGiRLYz7G5Sxr4MMXGaOfia3kGZKGAlXzrSCGc4GBGxymu1RGwhFFGwiOQUm+bJOGlV0AmHd1S7zeFlwzkFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<style>
		#map {
			height: 470px;
		}
	</style>
</head>

<body>
	<div class="main-wrapper">
		<!-- @include('sweetalert::alert') -->
		<!-- partial:partials/_sidebar.html -->
		@include('admin.body.sidebar')
		<!-- partial -->

		<div class="page-wrapper">

			<!-- partial:partials/_navbar.html -->
			@include('admin.body.header')
			<!-- partial -->

			@yield('admin')

			<!-- partial:partials/_footer.html -->
			@include('admin.body.footer')
			<!-- partial -->

		</div>
	</div>
	<!-- core:js -->
	<script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
	<script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{ asset('backend/assets/js/template.js')}}"></script>
	<!-- endinject -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Custom js for this page -->
	<script src="{{ asset('backend/assets/js/dashboard-dark.js')}}"></script>
	<!-- End custom js for this page -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.12/dist/sweetalert2.min.js"></script>
	<script src="{{ asset('backend/assets/js/code/code.js')}}"></script>
	<!-- DataTable JS -->
	<script src="{{ asset('backend/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"> </script>
	<script src="{{ asset('backend/assets/js/data-table.js') }}"></script>
	<!-- Toastr -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<!-- Leaflet -->
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
	<!-- Chart JS -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	

	<script>
		@if(Session::has('message'))
		var type = "{{ Session::get('alert-type','info') }}"
		switch (type) {
			case 'info':
				toastr.info(" {{ Session::get('message') }} ");
				break;

			case 'success':
				toastr.success(" {{ Session::get('message') }} ");
				break;

			case 'warning':
				toastr.warning(" {{ Session::get('message') }} ");
				break;

			case 'error':
				toastr.error(" {{ Session::get('message') }} ");
				break;
		}
		@endif
	</script>

	<script>
		function updateStatus(newStatus, jobId) {
			$.ajax({
				url: "{{ route('update.job.status', '') }}" + "/" + jobId,
				type: 'POST',
				data: {
					_token: "{{ csrf_token() }}",
					status: newStatus,
				},
				success: function(response) {
					if (response.success) {
						// Update the status in the database
						console.log('Status updated successfully.');
					} else {
						console.error('Error updating status.');
					}
				},
				error: function(xhr, status, error) {
					console.error('Error updating status:', error);
				}
			});
		}
	</script>

	<script>
		$(document).ready(function() {
			// Initialize Select2 with custom templates
			$('.js-example-basic-single').select2({
				templateResult: function(state) {
					if (!state.id) {
						return state.text;
					}
					var color = state.text === 'Open' ? 'green' : 'red';
					return $('<span style="color: ' + color + ';">' + state.text + '</span>');
				},
				templateSelection: function(state) {
					var color = state.text === 'Open' ? 'green' : 'red';
					return $('<span style="color: ' + color + ';">' + state.text + '</span>');
				}
			});
		});
	</script>

	<script>
		function goBack() {
			window.history.back();
		}
	</script>

	<script>
		$(document).ready(function() {
			$('#JobTable').DataTable({
				order: [
                    [0, "desc"]
                ],
				"lengthMenu": [6, 10, 25, 50], // Display 5, 10, 25, or 50 rows per page
				"pageLength": 6, // Show 5 rows per page by default
			});
		});
	</script>

	

	<!-- <script>
		$(function() {
			$('#dataCenterPoint').DataTable({
				processing: true,
				serverSide: true,
				responsive: true,
				lengthChange: true,
				autoWidth: false,
				ajax: '{{route('centerpoint.data')}}',
				columns: [{
						data: 'DT_RowIndex',
						orderable: false,
						searchable: false
					}, {
						data: 'coordinates'
					},
					{
						data: 'action'
					}
				]
			})
		})
	</script> -->

	<script>
		$(document).ready(function() {
			$('#dataCenterPoint').DataTable({
				"lengthMenu": [5, 10, 25, 50], // Display 5, 10, 25, or 50 rows per page
				"pageLength": 5, // Show 5 rows per page by default
			});
		});
	</script>

	<script>
		$(function() {
			$('#dataSpot').DataTable({
				order: [
                    [0, "desc"]
                ],
				processing: true,
				"lengthMenu": [5, 10, 25, 50], // Display 5, 10, 25, or 50 rows per page
				"pageLength": 5, // Show 5 rows per page by default
				serverSide: true,
				responsive: true,
				lengthChange: true,
				autoWidth: false,
				ajax: '{{ route('spot.data') }}',
				columns: [{
						data: 'DT_RowIndex',
						orderable: false,
						searchable: false
					}, {
						data: 'name'
					}, {
						data: 'area'
					},	{
						data: 'coordinates'
					}, 
						{
						data: 'action'
					}
				]
			})
		})
	</script>

<script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500,0).slideUp(500,function(){
                $(this).remove()
            })
        }, 3000);
    </script>

<script>
    $('#jobdelete').on('click', function(e) {
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
                document.getElementById('deleteData').action = href
                document.getElementById('deleteData').submit()
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    })
</script>

<script>
    // Function to update time and date
    function updateTimeAndDate() {
        const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        const monthsOfYear = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        const currentDate = new Date();
        const dayOfWeek = daysOfWeek[currentDate.getDay()];
        const month = monthsOfYear[currentDate.getMonth()];
        const day = currentDate.getDate();
        const year = currentDate.getFullYear();
        const formattedDate = `${dayOfWeek}, ${month} ${day}, ${year}`;

        const hours = currentDate.getHours() % 12 || 12;
        const minutes = currentDate.getMinutes();
        const seconds = currentDate.getSeconds();
        const ampm = currentDate.getHours() >= 12 ? 'PM' : 'AM';
        const formattedTime = `${hours}:${minutes < 10 ? '0' + minutes : minutes}:${seconds < 10 ? '0' + seconds : seconds} ${ampm}`;

        // Display the time and date in the specified container
        document.getElementById('dateTimeContainer').innerText = `${formattedTime} / ${formattedDate}`;

        // Update every second
        setTimeout(updateTimeAndDate, 1000);
    }

    // Call the function to initiate
    updateTimeAndDate();
</script>

<!-- <script>
    $(document).ready(function () {
        // Initialize Select2
        $('#branchLocationSelect').select2({
            placeholder: 'Select a location',
            ajax: {
                url: '{{route('select-branch')}}',
                dataType: 'json',
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
            }
        });
    });
</script> -->

</body>
</html>