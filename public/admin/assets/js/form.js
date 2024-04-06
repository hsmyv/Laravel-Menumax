    $(document).ready(function() {
        $('.check').click(function() {
            var categoryId = $(this).data('category-id');
            var newStatus = $(this).prop('checked') ? 1 : 0;

            $.ajax({
                url: '/admin/update-category-status',
                method: 'POST',
                data: {
                    categoryId: categoryId,
                    newStatus: newStatus,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
