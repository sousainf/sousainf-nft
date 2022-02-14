<?php

    class Pagina extends Controller{
        public function __construct(){

        }

        public function index(){
            $dados = [
                
            ];
            //define a view para exibir os dados
            $this->view('paginas/home');
        }
    }