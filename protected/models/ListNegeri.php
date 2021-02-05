<?php

/**
 * This is the model class for table "list_negeri".
 *
 * The followings are the available columns in table 'list_negeri':
 * @property integer $list_state_id
 * @property string $list_state_name
 * @property string $list_state_nicename
 */
class ListNegeri extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'list_negeri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('list_state_name, list_state_nicename', 'required'),
			array('list_state_name, list_state_nicename', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('list_state_id, list_state_name, list_state_nicename', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'list_state_id' => 'List State',
			'list_state_name' => 'List State Name',
			'list_state_nicename' => 'List State Nicename',
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

		$criteria->compare('list_state_id',$this->list_state_id);
		$criteria->compare('list_state_name',$this->list_state_name,true);
		$criteria->compare('list_state_nicename',$this->list_state_nicename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListNegeri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
