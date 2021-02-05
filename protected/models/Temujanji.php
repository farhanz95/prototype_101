<?php

/**
 * This is the model class for table "temujanji".
 *
 * The followings are the available columns in table 'temujanji':
 * @property integer $temujanji_id
 * @property integer $orangasli_id
 * @property string $nama
 * @property string $alamat
 * @property string $negeri
 * @property string $daerah
 * @property string $postcode
 * @property string $tarikh
 * @property string $masa
 * @property string $tempat
 * @property string $penemuduga
 *
 * The followings are the available model relations:
 * @property Orangasli $orangasli
 */
class Temujanji extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'temujanji';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, negeri, daerah, postcode, tarikh, masa, tempat, penemuduga', 'required'),
			array('orangasli_id', 'numerical', 'integerOnly'=>true),
			array('nama, alamat, negeri, daerah, postcode, tarikh, masa, tempat, penemuduga', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('temujanji_id, orangasli_id, nama, alamat, negeri, daerah, postcode, tarikh, masa, tempat, penemuduga', 'safe', 'on'=>'search'),
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
			'orangasli' => array(self::BELONGS_TO, 'Orangasli', 'orangasli_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'temujanji_id' => 'Temujanji',
			'orangasli_id' => 'Orangasli',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'negeri' => 'Negeri',
			'daerah' => 'Daerah',
			'postcode' => 'Poskod',
			'tarikh' => 'Tarikh',
			'masa' => 'Masa',
			'tempat' => 'Tempat',
			'penemuduga' => 'Penemuduga',
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

		$criteria->compare('temujanji_id',$this->temujanji_id);
		$criteria->compare('orangasli_id',$this->orangasli_id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('negeri',$this->negeri,true);
		$criteria->compare('daerah',$this->daerah,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('tarikh',$this->tarikh,true);
		$criteria->compare('masa',$this->masa,true);
		$criteria->compare('tempat',$this->tempat,true);
		$criteria->compare('penemuduga',$this->penemuduga,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Temujanji the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
