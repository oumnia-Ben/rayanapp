$(function(){
    $("#validate_payment .btn").click(function(){

        let action  = $(this).data('action');
        let message  = $(this).data('message');
        $(this).closest('form').find('.validate').val(action);

        $.confirm({
            title: message,
            content: "Etes vous sûr ?",
            type: 'green',
            buttons: {
                ok: {
                    text: 'OK',
                    btnClass: 'btn-primary',
                    keys: ['enter'],
                    action: function(){
                        $("#validate_payment").submit();
                    }
                },
                cancel: function(){

                }
            }
        });
    })
});
