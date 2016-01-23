
<?php echo $this->getContent(); ?>

<div class="login-or-signup">
    <div class="row">

        <div class="span6">
            <div class="page-header">
                <h2>change password</h2>
            </div>
            <?php echo $this->tag->form(array('user/changePassword', 'class' => 'form-inline')); ?>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">Old Password</label>
                        <div class="controls">
                         <?php echo $this->tag->hiddenField(array('user_id', 'size' => '30', 'class' => 'input-xlarge', 'value' => 25)); ?>
                            <?php echo $this->tag->passwordField(array('old_password', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">New Password</label>
                        <div class="controls">
                            <?php echo $this->tag->passwordField(array('new_password', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <?php echo $this->tag->submitButton(array('Login', 'class' => 'btn btn-primary btn-large')); ?>
                    </div>
                </fieldset>
            </form>
        </div>


    </div>
</div>
