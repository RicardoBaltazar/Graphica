<?php

class HomeController {
    public function index(){
        //echo 'home';

        Postagem::selecionaTodos();
    }
}

?>