<?php
/**
 * Created by PhpStorm.
 * User: troyanym
 * Date: 12.04.2017
 * Time: 21:26
 */
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $page_title; ?></h1>
            <?php echo form_open('');?>
            <div class="form-group">
                <?php echo form_label('Заголовок','block_title');?>
                <?php echo form_error('block_title');?>
                <?php echo form_input('block_title',set_value('block_title', $block->title),'class="form-control"');?>
            </div>
            <div class="form-group">
                <?php echo form_label('Подзаголовок','block_subtitle');?>
                <?php echo form_error('block_subtitle');?>
                <?php echo form_input('block_subtitle',set_value('block_subtitle',$block->subtitle),'class="form-control"');?>
            </div>
            <div class="form-group">
                <label for="InputFile">Фоновое изображение</label>
                <input type="file" id="InputFile" name="image" multiple="multiple" size="20">
                <div class="help-block"></div>
                <button type="button" name="send_img" id="send_img" value="Send_img" class="btn btn-labeled btn-success">
                    <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Завантажити</button>

                <a id="popover" class="btn" rel="popover" data-content="">Popover button</a>

            </div>
            <div class="form-group">
                <?php echo form_label('Тело блока','block_body');?>
                <?php echo form_error('block_body');?>
                <?php echo form_textarea('block_body',set_value('block_body',$block->body),'id="editor1" class="form-control"');?>
            </div>
            <?php echo form_hidden('block_id',set_value('block_id',$block->id));?>
            <?php echo form_submit('submit', 'Изменить', 'class="btn btn-primary btn-lg right"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>
