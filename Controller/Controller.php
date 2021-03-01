<?php
 include("Model/model.php");

 Class Controller{
  public $model;

  public function __construct()
  {
   
   $this->model=new Model();
  }

  public function show()
  {
   $result = $this->model->insert_data();
   include 'View/register.php';
  }
 }
?>