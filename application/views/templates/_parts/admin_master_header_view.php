<?php
/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 07.04.2017
 * Time: 10:49
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title;?></title>

    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/admin/css/style.css" rel="stylesheet">
    <link href="/assets/admin/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/admin/css/font-awesome/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/assets/admin/js/elFinder/css/elfinder.min.css" rel="stylesheet">
    <link href="/assets/admin/js/elFinder/css/theme.css" rel="stylesheet">



    <script type="text/javascript" src="/assets/admin/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/assets/admin/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/assets/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/admin/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/assets/admin/js/elFinder/js/elfinder.min.js"></script>
    <script type="text/javascript" src="/assets/admin/js/custom.js"></script>

    <?php echo $before_head;?>
</head>
<body>
<?php
if($this->ion_auth->logged_in()) {
    ?>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"
                   href="<?php echo base_url('admin');?>"><?php echo $this->config->item('cms_title');?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="navbar-brand"
                           href="<?php echo base_url('admin');?>">Панель</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Лендинг</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url('admin/user/logout');?>">Шапка</a></li>
                            <li><a href="<?php echo base_url('admin/blocks');?>">Блоки</a></li>
                            <li><a href="<?php echo base_url('admin/user/logout');?>">Подвал</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url('');?>">Сайт</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php print_r($this->ion_auth->user()->row()->username);?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php
                            if($this->ion_auth->is_admin())
                            {
                                ?>
                                <li><a href="<?php echo base_url('admin/groups'); ?>">Группы</a></li>
                                <li><a href="<?php echo base_url('admin/users'); ?>">Пользователи</a></li>
                                <?php
                            }
                            ?>
                            <li><a href="<?php echo base_url('admin/user/profile');?>">Профиль</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url('admin/user/logout');?>">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <?php
    if($this->session->flashdata('message'))
    {
        ?>
        <div class="container" style="padding-top:40px;">
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('message');?>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
}
?>
