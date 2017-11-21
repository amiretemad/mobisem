<?php

class DefaultController extends ModuleController {

  public function filters() {
    return array(
      'accessControl', // perform access control for CRUD operations
    );
  }

  public function accessRules() {
    return array(
      array('deny',  // deny anonymous users
        'users' => array('?'),
      ),
    );
  }

  public function actionIndex() {
    $this->render('index', array("test" => "aasdasdasd"));
  }

}