/**
 * Created by zhualex on 16/3/7.
 */

$(function(){

    //大类改变
    $('#search_type_1').bind('change',function(){
        var type1=$('#search_type_1').val();
        var str='<option value="">选择</option>';
        if(type1!=''){
            $.ajax({
                type:'post',
                url:'/user_raise_basic/ajaxGetType',
                data:'pid='+type1+'&tm='+new Date().getTime(),
                success:function(msg){
                    console.log(msg);
                    msg=eval('('+msg+')');
                    $(msg).each(function(i,n){
                        //if(n.level>1)
                        //    str=str+'<option value="'+n.type_id+'">&nbsp;&nbsp;'+n.name+'</option>';
                        //else
                            str=str+'<option value="'+n.type_id+'">'+n.name+'</option>';
                    })
                    $('#search_type_2').html(str);
                },
                error:function(err){
                    console.log(err);
                }
            })
        }else{
            $('#search_type_2').html(str);
        }
    })



})
