<?php
trait Validator
{
    public function validate($data){
        if(empty($data)){
            echo "Validation failed! Data is required \n";
        }else{
            echo "Validation passed \n";
        }
    }
}