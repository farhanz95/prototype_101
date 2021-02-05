<?php

/**
 * This is the model class for table "list_status_orangasli".
 *
 * The followings are the available columns in table 'list_status_orangasli':
 * @property integer $status_orangasli_id
 * @property string $status_orangasli_name
 * @property string $status_orangasli_label
 *
 * The followings are the available model relations:
 * @property Orangasli[] $orangaslis
 */
class ListStatusOrangasli extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'list_status_orangasli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status_orangasli_name, status_orangasli_label', 'required'),
			array('status_orangasli_name, status_orangasli_label', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('status_orangasli_id, status_orangasli_name, status_orangasli_label', 'safe', 'on'=>'search'),
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
			'orangaslis' => array(self::HAS_MANY, 'Orangasli', 'status_orangasli_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'status_orangasli_id' => 'Status Orangasli',
			'status_orangasli_name' => 'Status Orangasli Name',
			'status_orangasli_label' => 'Status Orangasli Label',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('status_orangasli_id',$this->status_orangasli_id);
		$criteria->compare('status_orangasli_name',$this->status_orangasli_name,true);
		$criteria->compare('status_orangasli_label',$this->status_orangasli_label,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListStatusOrangasli the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
