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
$(function () {
    $('#card_data').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/Online-store/application/paymentHandler.php',
            data: $('#card_data').serialize(),
            success: function (response) {
                var cardNum=$("#card_number").val();
                var ccv=$("#sec_code").val();
                var result="";
                if(!$.isNumeric(cardNum) || (cardNum).length != 12){
                    result+="Card Num";
                }
                if(!$.isNumeric(ccv) || (ccv).length != 3){
                    result+="ccv";
                }
                if(result){
                    alert(result);
                    location.reload();
                }
            }
        });
    });
});