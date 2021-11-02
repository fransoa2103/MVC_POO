<?php
// the function control all form's input .
// if only one input is empty then boolean $result return false else stay true.
namespace fcb;
class FormInputControl {
    public static function form_input_control($result){
        foreach($_POST as $input){
            if (empty($input)){
                $result = false;
                break;
            }
        }
    }
}