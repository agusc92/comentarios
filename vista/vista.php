<?php
require_once 'smarty/libs/Smarty.class.php';
class vista{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function head(){
        $this->smarty->display('vista/templates/head.tpl');
    }
    public function header(){
        $this->smarty->display('vista/templates/header.tpl');
    }
    public function footer(){
        $this->smarty->display('vista/templates/footer.tpl');
    }
    public function lista($comentarios){
        $this->smarty->assign('comentarios',$comentarios);
        $this->smarty->display('vista/templates/listaComentarios.tpl');
    }

}

?>