<?php
class Model
{
    public $string;
 
    public function __construct(){
        $this->string = "Example of mvc controller pattern";
    }

    public function about(){
        $this->string = "About";
    }

    public function portfolio(){
        $this->string = "portfolio";
    }

}
?>