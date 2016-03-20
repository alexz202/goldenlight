/**
 * Created by zhualex on 16/2/8.
 */
$(function(){
    //submit order
    $('#create_order').click(function(){
        var invest_money=$('#invest_money').val();


        if (isNaN(invest_money)){
            alert('投资额必须为数字');
            return false;
        }

        else{
            $('#add_form').submit();
            return true;
        }


    });

})