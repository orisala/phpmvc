<?php
class AboutController
{
    private $model;
 
    public function __construct($model) {
        $this->model = $model;
    }

    public function about() {
        $this->model->string = "About Page";
    }
}
?>