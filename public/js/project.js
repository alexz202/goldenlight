/**
 * Created by zhualex on 16/2/8.
 */
$(function(){
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


})

