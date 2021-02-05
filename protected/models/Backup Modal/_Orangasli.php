<?php

/**
 * This is the model class for table "orangasli".
 *
 * The followings are the available columns in table 'orangasli':
 * @property integer $orangasli_id
 * @property string $ic
 * @property string $nama
 * @property string $namakeluarga
 * @property string $dob
 * @property integer $keturunan
 * @property string $agama
 * @property string $jantina
 * @property string $alamat
 * @property string $negeri
 * @property integer $daerah
 * @property integer $poskod
 * @property string $status
 * @property string $catatan
 *
 * The followings are the available model relations:
 * @property Keluarga[] $keluargas
 * @property ListDaerah $daerah0
 * @property ListBangsa $keturunan0
 * @property Temujanji[] $temujanjis
 */
class Orangasli extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orangasli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ic, nama, dob, jantina, keturunan', 'required'),
			array('keturunan, daerah, poskod', 'numerical', 'integerOnly'=>true),
			array('ic', 'length', 'max'=>14),
			array('nama, namakeluarga', 'length', 'max'=>255),
			array('dob', 'length', 'max'=>17),
			array('agama', 'length', 'max'=>30),
			array('jantina', 'length', 'max'=>20),
			array('negeri', 'length', 'max'=>50),
			array('status', 'length', 'max'=>12),
			array('catatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('orangasli_id, ic, nama, namakeluarga, dob, keturunan, agama, jantina, alamat, negeri, daerah, poskod, status, catatan', 'safe', 'on'=>'search'),
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
			'keluargas' => array(self::HAS_MANY, 'Keluarga', 'orangasli_id'),
			'daerah0' => array(self::BELONGS_TO, 'ListDaerah', 'daerah'),
			'keturunan0' => array(self::BELONGS_TO, 'ListBangsa', 'keturunan'),
			'temujanjis' => array(self::HAS_MANY, 'Temujanji', 'orangasli_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orangasli_id' => 'Orang Asli',
			'ic' => 'No Kad Pengenalan',
			'nama' => 'Nama',
			'namakeluarga' => 'Nama Keluarga',
			'dob' => 'Tarikh Lahir',
			'keturunan' => 'Bangsa',
			'agama' => 'Agama',
			'jantina' => 'Jantina',
			'alamat' => 'Alamat',
			'negeri' => 'Negeri',
			'daerah' => 'Daerah',
			'poskod' => 'Poskod',
			'status' => 'Status',
			'catatan' => 'Catatan',
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

		$criteria->compare('orangasli_id',$this->orangasli_id);
		$criteria->compare('ic',$this->ic,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('namakeluarga',$this->namakeluarga,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('keturunan',$this->keturunan);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('jantina',$this->jantina,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('negeri',$this->negeri,true);
		$criteria->compare('daerah',$this->daerah);
		$criteria->compare('poskod',$this->poskod);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('catatan',$this->catatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orangasli the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeValidate()
	{
        $timestamp = CDateTimeParser::parse($this->dob, 'dd/MM/yyyy');
        if ($timestamp === false)
                $this->dob = '';
        else
                $this->dob = date('Y-m-d', $timestamp);
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

	protected function afterFind()
    {
            // convert to display format
        $this->dob = strtotime ($this->dob);
        $this->dob = date ('d-m-Y', $this->dob);
        
        $this->dob = strtotime ($this->dob);
        $this->dob = date ('d-m-Y', $this->dob);

        parent::afterFind ();
    }
}
