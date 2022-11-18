<?php
    class PaginaController{

        function inicio(){
            require_once('info/inicio.php');
        }

        function tipos(){
            require_once('info/memoria.php');
        }

        function alteraciones(){
            require_once('info/alteraciones.php');
        }

        function estimulaciones(){
            require_once('info/estimulacion.php');
        }

        function about(){
            require_once('info/about.php');
        }

        function error(){
            require_once('info/error.php');
        }

    }