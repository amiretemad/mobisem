<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $email_address
 * @property string $password
 */
class Users extends CActiveRecord {
  /**
   * Returns the static model of the specified AR class.
   * @param string $className active record class name.
   * @return Users the static model class
   */
  public static function model($className = __CLASS__) {
    return parent::model($className);
  }

  /**
   * @return string the associated database table name
   */
  public function tableName() {
    return 'users';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules() {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
      array('email_address, password', 'required'),
      array('email_address', 'length', 'max' => 254),
      array('password', 'length', 'max' => 128),
      // The following rule is used by search().
      // Please remove those attributes that should not be searched.
      array('id, email_address, password', 'safe', 'on' => 'search'),
    );
  }

  /**
   * @return array relational rules.
   */
  public function relations() {
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array();
  }

  /**
   * @return array customized attribute labels (name=>label)
   */
  public function attributeLabels() {
    return array(
      'id' => 'ID',
      'email_address' => 'Email Address',
      'password' => 'Password',
    );
  }

  /**
   * Retrieves a list of models based on the current search/filter conditions.
   * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
   */
  public function search() {
    // Warning: Please modify the following code to remove attributes that
    // should not be searched.

    $criteria = new CDbCriteria;

    $criteria->compare('id', $this->id);
    $criteria->compare('email_address', $this->email_address, true);
    $criteria->compare('password', $this->password, true);

    return new CActiveDataProvider($this, array(
      'criteria' => $criteria,
    ));
  }
}