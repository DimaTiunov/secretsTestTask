$(function () {
    $('#orders-search').on('input', function () {
        $.get('list/?q=' + $(this).val(), function (response) {
            var $list = $('#orders-list').empty();

            $.each(response.data, function (i, order) {
                $list.append(
                    '<div class="order">' +
                        '<h3><a href="' + order.id + '/">' + order.title + '</a></h3>' +
                        '<span class="status">' + order.status + '</span>' +
                        '<span class="total">' + order.total + ' руб.</span>' +
                    '</div>'
                );
            });
        }, 'json');
    });
});
