<?php
/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 07.04.2017
 * Time: 11:34
 */
?>

<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <h1>Вход в систему</h1>
        <?php echo $this->session->flashdata('message');?>
        <?php echo form_open('',array('class'=>'form-horizontal'));?>
        <div class="form-group">
            <?php echo form_label('Логин','identity');?>
            <?php echo form_error('identity');?>
            <?php echo form_input('identity','','class="form-control"');?>
        </div>
        <div class="form-group">
            <?php echo form_label('Пароль','password');?>
            <?php echo form_error('password');?>
            <?php echo form_password('password','','class="form-control"');?>
        </div>
        <div class="form-group">
            <label>
                <?php echo form_checkbox('remember','1',FALSE);?> Запомнить меня
            </label>
        </div>
        <?php echo form_submit('submit', 'Войти', 'class="btn btn-primary btn-lg btn-block"');?>
        <?php echo form_close();?>
    </div>
</div>
