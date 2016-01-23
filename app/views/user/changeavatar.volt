
{{ content() }}

<div class="login-or-signup">
    <div class="row">

        <div class="span6">
            <div class="page-header">
                <h2>change avatar</h2>
            </div>
            {{ form('user/changeAvatar', 'class': 'form-inline') }}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">头像</label>
                        <div class="controls">
                         {{ hidden_field('user_id', 'size': "30", 'class': "input-xlarge",'value':25) }}
                            {{ file_field('avatar_url', 'size': "30", 'class': "") }}
                        </div>
                    </div>

                    <div class="form-actions">
                        {{ submit_button('Login', 'class': 'btn btn-primary btn-large') }}
                    </div>
                </fieldset>
            </form>
        </div>


    </div>
</div>


<script type="text/javascript">
        //上传图片
        /* 初始化上传插件 */
        $("#avatar_url").uploadify({
            "height"          : 30,
            "swf"             : "/js/uploadify/uploadify.swf",
            "fileObjName"     : "upload_avatar_url",
            "buttonText"      : "上传图片",
            "uploader"        : "/file/upload",
            "width"           : 120,
            'removeTimeout'	  : 1,
            'fileTypeExts'	  : '*.jpg; *.png; *.gif;',
            "onUploadSuccess" : uploadPicture,
            'onFallback' : function() {
                alert('未检测到兼容版本的Flash.');
            }
        });
        function uploadPicture(file, data){
          console.log(file);
          console.log(data);
        }

    </script>