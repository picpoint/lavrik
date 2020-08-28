<?php

require_once "../model/editArticleModel.php";



class GetCoockieID {  
  public $mass;
  public $res;
  public $coockie;
  public $massToEdit = [];
  
  public function getCookie() {
    return $_COOKIE['GET'];
  }


  public function insertArticlesToFields() {
    $arr = new EditArticle();
    $this->mass = $arr -> getArticleFromDB();
    return $this->mass;
  }


  public function getHeaderArticle() {
    $this->res = $this->insertArticlesToFields();
    return $this->res[0]['title'];
  }

  
  public function getContentArticle() {
    $this->res = $this->insertArticlesToFields();
    return $this->res[0]['content'];
  }


  public function editArticle() {
    $this->coockie = $this->getCookie();    

    if(isset($_POST['btnedit'])) {
      if(!empty($_POST['titleedit']) && !empty($_POST['contentedit'])) {
        $massToEdit[] = $this->coockie;
        $massToEdit[] = $_POST['titleedit'];
        $massToEdit[] = $_POST['contentedit'];
        //return $massToEdit;
        $result = new EditArticle($this->massToEdit);
        $result -> writeEditArticle();
      }
    }

  } 






}