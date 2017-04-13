<?php
/**
 * Created by PhpStorm.
 * User: troyanym
 * Date: 12.04.2017
 * Time: 20:55
 */
?>

<div class="container" style="margin-top: 60px;">
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo site_url('admin/blocks/create');?>" class="btn btn-primary">Создать блок</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($blocks))
            {
                echo '<table class="table table-hover table-bordered table-condensed">';
                echo '<tr><td><b>ID</b></td><td><b>Заголовок</b></td><td><b>Сортировка</b></td><td><b>Операции</b></td></tr>';
                foreach($blocks as $block)
                {
                    echo '<tr>';
                    echo '<td>'.$block->id.'</td><td>'.$block->title.'</td><td>'.$block->order.'</td><td>'.anchor('admin/blocks/edit/'.$block->id,'<span class="glyphicon glyphicon-pencil"></span>');
                    echo ' '.anchor('admin/blocks/delete/'.$block->id,'<span class="glyphicon glyphicon-remove"></span>');
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </div>
</div>