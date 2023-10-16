<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


$(document).ready(function () {
    $('.change-status').click(function () {
        var button = $(this);
        var jobId = button.data('job-id');
        var currentStatus = button.data('current-status');

        var newStatus = currentStatus === 'Open' ? 'Closed' : 'Open';

        // Send an AJAX request to update the status
        $.ajax({
            url: '{{ route("update.job.status") }}',
            method: 'POST',
            data: {
                id: jobId,
                status: newStatus,
                _token: '{{ csrf_token() }}',
            },
            success: function (data) {
                // Update the button's data attributes and text
                button.data('current-status', newStatus);
                button.text('Change Status to ' + newStatus);

                // Update the displayed status in the table
                button.closest('tr').find('td.status').text(newStatus);

                console.log('Status updated successfully');
            },
            error: function (xhr, status, error) {
                console.error('Error updating status:', error);
            },
        });
    });
});
