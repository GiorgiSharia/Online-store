$(function () {
    $('#search').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/Online-store/application/searchResults.php',
            data: $('#search').serialize(),
            success: function (response) {
                alert(response);
                location.reload();
            }
        });
    });
});