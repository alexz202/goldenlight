/**
 * Created by zhualex on 16/2/8.
 */
$(function(){
    //basic
    $('#save_basic').click(function(){


        var project_name=$('#project_name').val();
        var project_desc=$('#project_desc').val();
        var aim_money=$('#aim_money').val();
        var invested_num=$('#search_type_2').val();
        if ($.trim(project_name).length<3 ){
            alert('项目名称不能为空');
            return false;
        }else if($.trim(project_desc).length<3){
            alert('项目描述最少30字');
            return false;
        }
        else if($.trim(aim_money).length<1 || isNaN(aim_money)){
            alert('最低预计筹资额不能为空');
            return false;
        }
        else if( invested_num<1){
            alert('请选择一个行业分类');
            return false;
        }
        else{
            $('#add_form').submit();
            return true;
        }


    });

    //company

    $('#save_company').click(function(){


        var address1=$('#address1').val();
        var address2=$('#address2').val();
        var post_card=$('#post_card').val();
        var city=$('#city').val();
        var next_two_y_total_wage=$('#next_two_y_total_wage').val();

        if ($.trim(address1).length<3||$.trim(address2).length<3 ){
            alert('地址不能为空');
            return false;
        }else if($.trim(post_card).length<6|| isNaN(post_card)){
            alert('请正确输入邮编');
            return false;
        }

        else if( $.trim(city).length<1){
            alert('请城市不能为空');
            return false;
        }
        else if( isNaN(next_two_y_total_wage)){
            alert('工资不能为空');
            return false;
        }
        else{
            $('#add_form').submit();
            return true;
        }


    });

    //idea
    $('#save_idea').click(function(){


        var idea_info=$('#idea_info').val();
        var purpose=$('#purpose').val();
        var livestock=$('#livestock').val();
        var useform=$('#useform').val();
        var technical=$('#technical').val();

        if ($.trim(idea_info).length<30){
            alert('介绍至少30字');
            return false;
        }else if($.trim(purpose).length<30){
            alert('影响至少30字');
            return false;
        }

        else if( $.trim(useform).length<1){
            alert('筹资模式至少30字');
            return false;
        }
        else if( $.trim(technical).length<1){
            alert('筹资用途至少30字');
            return false;
        }

        else{
            $('#add_form').submit();
            return true;
        }


    });
    //market
    $('#save_market').click(function(){


        var aim_market=$('#aim_market').val();
        var aim_market_feaure=$('#aim_market_feaure').val();
        var competitive_strategy=$('#competitive_strategy').val();

        if ($.trim(aim_market).length<30){
            alert('目标市场至少30字');
            return false;
        }else if($.trim(aim_market_feaure).length<30){
            alert('目标市场描述至少30字');
            return false;
        }

        else if( $.trim(competitive_strategy).length<1){
            alert('竞争策略至少30字');
            return false;
        }

        else{
            $('#add_form').submit();
            return true;
        }


    });
    //around
    $('#save_around').click(function(){


        var bj_person=$('#bj_person').val();
        var invest_leader=$('#invest_leader').val();
        var monitor_system=$('#monitor_system').val();
        var friend_link=$('#friend_link').val();

        if ($.trim(bj_person).length<30){
            alert('保荐人和简介');
            return false;
        }else if($.trim(invest_leader).length<30){
            alert('领头人和简介');
            return false;
        }

        else{
            $('#add_form').submit();
            return true;
        }


    });

//team
    $('#save_team').click(function(){


        var user_name=$('#user_name').val();
        var nationality=$('#nationality').val();
        var country=$('#country').val();
        var city=$('#city').val();

        if ($.trim(user_name).length<3){
            alert('用户名不能为空');
            return false;
        }else if($.trim(nationality).length<3){
            alert('国籍不能为空');
            return false;
        }else if($.trim(country).length<3){
            alert('国家不能为空');
            return false;
        }
        else if($.trim(city).length<3){
            alert('城市不能为空');
            return false;
        }

        else{
            $('#add_form').submit();
            return true;
        }



    });

    //updates
    $('#save_update').click(function(){


        var content=$('#content').val();


        if ($.trim(content).length<10){
            alert('更新内容不能为空');
            return false;
        }

        else{
            $('#add_form').submit();
            return true;
        }



    });

})


function remsg(rais_id,msg_id){
   // alert(msg_id);

    $('#myModal').modal('show');
    $('.resmg_submit').click(function(){

        var remsg=$('#remsg').val();
        if(remsg.trim().length<3){
            alert('回复内容不能为空');
            return false;
        }
        $.ajax({
                type:'post',
                url:'/user_raise_qa/ajaxRemsg/'+rais_id+'/'+msg_id,
                data:'remsg='+remsg+'&tm='+new Date().getTime(),
                success:function(msg){
                       if (msg==true){
                            window.location.reload();
                       }else{
                           alert('提交失败');
                       }
                },
                error:function(err){
                    console.log(err);
                }
            }

        );
        $('#myModal').modal('hide');
    });
}

