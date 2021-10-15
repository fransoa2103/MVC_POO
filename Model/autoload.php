<?php
function autoload($class_name){
        require 'Class/'.$class_name.'.php';
    }
    spl_autoload_register('autoload');