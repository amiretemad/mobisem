<?php

class ListController extends ModuleController {

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

  // Index
  public function actionIndex() {
    $this->render('index');
  }

}