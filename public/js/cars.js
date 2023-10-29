function filterData() {
    var filterValue = $('#filter').val();

    $.ajax({
        type: 'POST',
        url: '/filter',
        data: {
            filter_value: filterValue,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            var grid = $('#grid');
            grid.empty();

            if (data.length > 0) {
                data.forEach(function (item) {
                    grid.append('<div class="grid-item">' +
                        '<p>Car Model: ' + item.carModel + '</p>' +
                        '<p>User: ' + item.user + '</p>' +
                        '</div>');
                });
            } else {
                grid.append('<p>No results found</p>');
            }
        },
        error: function (xhr, status, error) {
            console.error('An error occurred during the AJAX request:', error);
            var grid = $('#grid');
            grid.empty();
            grid.append('<p>An error occurred. Please try again later.</p>');
        }
    });
}
