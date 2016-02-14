/**
 * Created by zhualex on 16/2/8.
 */
$(function(){
   $('#register_btn_submit').click(function(){
   //提交登陆：
       var type= $('#type').val();
       var password=$('#password').val();
       var img_verity=$('#img_verity').val();
       if(type==1){
           var mobile=$('#mobile').val();
           var mobile_code=$('#mobile_code').val();
           if ($.trim(mobile).length<1 ){
               alert('手机号码不能为空');
               return false;
           }else if($.trim(password).length<1){
               alert('密码不能为空');
               return false;
           }
           else if($.trim(img_verity).length<1){
               alert('验证码不能为空');
               return false;
           }
           else{
               $('#register_form').submit();
               return true;
           }

       }else{
           var email=$('#email').val();
           if ($.trim(email).length<1 ){
               alert('邮箱不能为空');
               return false;
           }else if($.trim(password).length<1){
               alert('密码不能为空');
               return false;
           }
           else if($.trim(img_verity).length<1){
               alert('验证码不能为空');
               return false;
           }
           else{
               $('#register_form').submit();
               return true;
           }


       }
   });

    $('#but_show_mobile').click(function(){
        $('#tb_mobile').show();
        $('#tb_email').hide();
    });

    $('#but_show_email').click(function(){
        $('#tb_mobile').hide();
        $('#tb_email').show();
    });


    //applyinvest page


    $('.but_apply_invest_left').mouseenter(function(){
        $(this).removeClass('but_test_2');
        $(this).addClass('but_test_1');
    }).mouseleave(function(){
        $(this).removeClass('but_test_1');
        $(this).addClass('but_test_2');
    }).click(function(){
        var url='';
        var user_id=$('#user_id').val();
        var radioInvest= $("input[name='radioInvest']:checked").val();
        if(radioInvest==undefined){
            alert('请选择身份');
            return false;
        }else if(radioInvest==1){
          url='/user/applyPerson?user_id='+user_id;
        }else{
            url='/user/applyCompany?user_id='+user_id;
        }
        window.location.href=url;

    });

    $('.but_apply_invest_right').mouseenter(function(){
        $(this).removeClass('but_test_2');
        $(this).addClass('but_test_1');
    }).mouseleave(function(){
        $(this).removeClass('but_test_1');
        $(this).addClass('but_test_2');
    }).click(function(){
        var url='';
        var user_id=$('#user_id').val();
        var radioInvest= $("input[name='radioInvest']:checked").val();
        if(radioInvest==undefined){
            alert('请选择身份');
            return false;
        }else if(radioInvest==1){
            url='/user/applyTest?type=1&user_id='+user_id;
        }else{
            url='/user/applyTest?type=2&user_id='+user_id;
        }
        window.location.href=url;


    });



    //add_new_project
    $('#add_new_project').click(function(){
        $('#show_project').append($('#project_model').clone(true).show());
    })


    //applyPerson applyCompany
    $('#apply_person_btn_submit').click(function(){
        //提交登陆：
        var real_name=$('#real_name').val();
        var identity_card=$('#identity_card').val();
        var address=$('#address').val();
        if ($.trim(real_name).length<1 ){
            alert('真实姓名不能为空');
            return false;
        }else if($.trim(identity_card).length<1){
            alert('身份证不能为空');
            return false;
        }
        else if($.trim(address).length<1){
            alert('地址不能为空');
            return false;
        }
        else{
            $('#apply_form').submit();
            return true;
        }
    });

    $('#apply_company_btn_submit').click(function(){
        //提交登陆：
        var legal_name=$('#legal_name').val();
        var legal_identity_card=$('#legal_identity_card').val();
        var business_licence=$('#business_licence').val();
        if ($.trim(legal_name).length<1 ){
            alert('法人姓名不能为空');
            return false;
        }else if($.trim(legal_identity_card).length<1){
            alert('法人身份证不能为空');
            return false;
        }
        else if($.trim(business_licence).length<1){
            alert('营业执照号不能为空');
            return false;
        }
        else{
            $('#apply_form').submit();
            return true;
        }
    })


    var lasttime=0;
    var InterValObj;
    var waits=60;
    var curCount=waits;
    var is_clicked=false;
    $('#resetm').bind('click',function(){
        if(is_clicked==false){
            var phone= $('#mobile').val();
            //$.ajax({
            //    type:'get',
            //    dataType:'jsonp',
            //    data:'',
            //    jsonp:'callback',
            //    url:'http://180.168.179.50:8081/IFC/SMS/SmsSend.ashx?hl_mobile='+phone,
            //    success:function(msg){
            //        // console.log(msg);
            //        lasttime=nowtimer;
            //    },
            //    timeout:3000
            //});
            $('#resetm').attr("disabled", "true");
            is_clicked=true;
            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
        }

    });
//timer处理函数
    function SetRemainTime() {
        if (curCount == 0) {
            window.clearInterval(InterValObj);//停止计时器
            //$("#resetm").removeAttr("disabled");//启用按钮
            is_clicked=false;
            $("#resetm").html("重新发送验证码");
            curCount=waits;
            lasttime=1;
//                    code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效
        }
        else {
            curCount--;
            $("#resetm").html( curCount + "秒后重新发送");
        }
    }

})

