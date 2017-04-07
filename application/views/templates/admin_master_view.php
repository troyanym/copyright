<?php
/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 07.04.2017
 * Time: 10:48
 */

$this->load->view('templates/_parts/admin_master_header_view'); ?>
    <div class="container">
        <div class="main-content" style="padding-top:40px;">
            <?php echo $the_view_content; ?>
        </div>
    </div>
<?php $this->load->view('templates/_parts/admin_master_footer_view');?>