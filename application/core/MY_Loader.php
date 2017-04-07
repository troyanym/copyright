<?php
/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 03.04.2017
 * Time: 11:13
 */
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content  = $this->view('common/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('common/footer', $vars, $return);

            return $content;
        else:
            $this->view('common/header', $vars);
            $this->view($template_name, $vars);
            $this->view('common/footer', $vars);
        endif;
    }
}