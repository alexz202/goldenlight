
{{ content() }}

<div class="login-or-signup">
    <div class="row">

        <div class="span6">
            <div class="page-header">
                <h2>change password</h2>
            </div>
            {{ form('user/changePassword', 'class': 'form-inline') }}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">Old Password</label>
                        <div class="controls">
                         {{ hidden_field('user_id', 'size': "30", 'class': "input-xlarge",'value':25) }}
                            {{ password_field('old_password', 'size': "30", 'class': "input-xlarge") }}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">New Password</label>
                        <div class="controls">
                            {{ password_field('new_password', 'size': "30", 'class': "input-xlarge") }}
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
