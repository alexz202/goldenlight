
<?php echo $this->getContent(); ?>

<div class="login-or-signup">
    <div class="row">

        <div class="span6">
            <div class="page-header">
                <h2>Log In</h2>
            </div>
            <?php echo $this->tag->form(array('user/login', 'class' => 'form-inline')); ?>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">mobile</label>
                        <div class="controls">
                         <?php echo $this->tag->hiddenField(array('type', 'size' => '30', 'class' => 'input-xlarge', 'value' => 1)); ?>
                            <?php echo $this->tag->textField(array('mobile', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <?php echo $this->tag->passwordField(array('password', 'size' => '30', 'class' => 'input-xlarge')); ?>
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
