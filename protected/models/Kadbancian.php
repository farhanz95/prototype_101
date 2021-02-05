<?php

/**
 * This is the model class for table "kadbancian".
 *
 * The followings are the available columns in table 'kadbancian':
 * @property integer $kadbancian_id
 * @property integer $keluarga_id
 * @property integer $statuscetakan
 * @property string $catatan
 * @property string $negeri
 * @property string $daerah
 * @property string $kampung
 * @property string $no_rumah
 * @property string $tarikh
 * @property string $keluargakadbanci
 *
 * The followings are the available model relations:
 * @property ListStatusKadbancian $statuscetakan0
 * @property Keluarga $keluarga
 */
class Kadbancian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kadbancian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('keluarga_id, negeri, daerah, kampung, no_rumah, tarikh', 'required'),
			array('keluarga_id, statuscetakan', 'numerical', 'integerOnly'=>true),
			array('negeri, daerah, kampung, no_rumah, tarikh, keluargakadbanci', 'length', 'max'=>255),
			array('catatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kadbancian_id, keluarga_id, statuscetakan, catatan, negeri, daerah, kampung, no_rumah, tarikh, keluargakadbanci', 'safe', 'on'=>'search'),
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
			'statuscetakan0' => array(self::BELONGS_TO, 'ListStatusKadbancian', 'statuscetakan'),
			'keluarga' => array(self::BELONGS_TO, 'Keluarga', 'keluarga_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kadbancian_id' => 'Kad Bancian',
			'keluarga_id' => 'Keluarga',
			'statuscetakan' => 'Status Cetakan',
			'catatan' => 'Catatan',
			'negeri' => 'Negeri',
			'daerah' => 'Daerah',
			'kampung' => 'Kampung',
			'no_rumah' => 'No Rumah',
			'tarikh' => 'Tarikh Luput',
			'keluargakadbanci' => 'Keluarga',
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

		$criteria->compare('kadbancian_id',$this->kadbancian_id);
		$criteria->compare('keluarga_id',$this->keluarga_id);
		$criteria->compare('statuscetakan',$this->statuscetakan);
		$criteria->compare('catatan',$this->catatan,true);
		$criteria->compare('negeri',$this->negeri,true);
		$criteria->compare('daerah',$this->daerah,true);
		$criteria->compare('kampung',$this->kampung,true);
		$criteria->compare('no_rumah',$this->no_rumah,true);
		$criteria->compare('tarikh',$this->tarikh,true);
		$criteria->compare('keluargakadbanci',$this->keluargakadbanci,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kadbancian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeValidate()
	{
        $timestamp = CDateTimeParser::parse($this->tarikh, 'dd/MM/yyyy');
        if ($timestamp === false)
                $this->tarikh = '';
        else
                $this->tarikh = date('Y-m-d', $timestamp);
        return parent::beforeValidate();
	}

	public function validateDate($attribute,$params){
	//allow published_datetime empty
	if (!empty($this->$attribute ))
	{
	        if (strtotime($this->$attribute) <= time())
	                return false;
	}
	return true;
	}

	protected function afterFind ()
    {
            // convert to display format
        $this->tarikh = strtotime ($this->tarikh);
        $this->tarikh = date ('d-m-Y', $this->tarikh);
        
        $this->tarikh = strtotime ($this->tarikh);
        $this->tarikh = date ('d-m-Y', $this->tarikh);

        parent::afterFind ();
    }
}
