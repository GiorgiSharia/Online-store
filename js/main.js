$(function () {
    $('#regForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/Online-store/application/registerHandler.php',
            data: $('#regForm').serialize(),
            success: function (response) {
                alert(response);
                location.reload();
            }
        });
    });
});