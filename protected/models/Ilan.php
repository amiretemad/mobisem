<?php

/**
 * This is the model class for table "ilan".
 *
 * The followings are the available columns in table 'ilan':
 * @property integer $id
 * @property string $description
 * @property integer $product_id
 * @property integer $stock_count
 * @property integer $user_id
 * @property string $create_date
 * @property string $expire_date
 */
class Ilan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ilan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ilan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, product_id, stock_count, user_id, create_date, expire_date', 'required'),
			array('product_id, stock_count, user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, description, product_id, stock_count, user_id, create_date, expire_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		  'users' => array(self::BELONGS_TO,'users','user_id') ,
      'products' => array(self::BELONGS_TO,'products','product_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'description' => 'Description',
			'product_id' => 'Product',
			'stock_count' => 'Stock Count',
			'user_id' => 'User',
			'create_date' => 'Create Date',
			'expire_date' => 'Expire Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('stock_count',$this->stock_count);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('expire_date',$this->expire_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}