<?php
/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 07.04.2017
 * Time: 12:38
 */
?>

<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <h1>Создание группы</h1>
            <?php echo $this->session->flashdata('message');?>
            <?php echo form_open('',array('class'=>'form-horizontal'));?>
            <div class="form-group">
                <?php echo form_label('Название','group_name');?>
                <?php echo form_error('group_name');?>
                <?php echo form_input('group_name','','class="form-control"');?>
            </div>
            <div class="form-group">
                <?php echo form_label('Описание','group_description');?>
                <?php echo form_error('group_description');?>
                <?php echo form_input('group_description','','class="form-control"');?>
            </div>
            <?php echo form_submit('submit', 'Создать группу', 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>
