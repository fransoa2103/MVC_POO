<?php 
    class Autoloader {
        static function register(){
            spl_autoload_register(['Autoloader', 'autoload']); // ['Class','function']
        }
        static function autoload($class){
            $class = str_replace('fcb\\', '', $class) ; // delete namespace-string "fcb\"
            require 'Model\\'.$class.'.php';

        }
    }