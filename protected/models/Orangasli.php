<?php

/**
 * This is the model class for table "Orangasli".
 *
 * The followings are the available columns in table 'Orangasli':
 * @property integer $orangasli_id
 * @property string $ic
 * @property string $nama
 
 * @property string $dob
 * @property integer $keturunan
 * @property integer $agama
 * @property string $jantina
 * @property string $alamat
 * @property integer $negeri
 * @property integer $daerah
 * @property integer $poskod
 * @property string $statuskahwin
 * @property string $catatan
 * @property integer $status_orangasli_id
 *
 * The followings are the available model relations:
 * @property Keluarga[] $keluargas
 * @property ListStatusOrangasli $statusOrangasli
 * @property ListAgama $agama0
 * @property ListBangsa $keturunan0
 * @property ListDaerah $daerah0
 * @property ListNegeri $negeri0
  * @property ListNegeri $negeri1
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
			// array('negeri', 'required'),
			array('keturunan, agama, negeri, daerah, poskod, status_orangasli_id', 'numerical', 'integerOnly'=>true),
			array('ic', 'length', 'max'=>14),
			array('nama', 'length', 'max'=>60),
			array('jantina, statuskahwin', 'length', 'max'=>20),
			array('dob, catatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('orangasli_id, ic, nama, dob, keturunan, agama, jantina, alamat, negeri, daerah, poskod, statuskahwin, catatan, status_orangasli_id, telefon, email, pekerjaan, negeri_kelahiran, pendapatan, saiz_gambar, nama_gambar, kampung', 'safe', 'on'=>'search'),
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
			'statusOrangasli' => array(self::BELONGS_TO, 'ListStatusOrangasli', 'status_orangasli_id'),
			'agama0' => array(self::BELONGS_TO, 'ListAgama', 'agama'),
			'keturunan0' => array(self::BELONGS_TO, 'ListBangsa', 'keturunan'),
			'daerah0' => array(self::BELONGS_TO, 'ListDaerah', 'daerah'),
			'negeri0' => array(self::BELONGS_TO, 'ListNegeri', 'negeri'),
			'temujanjis' => array(self::HAS_MANY, 'Temujanji', 'orangasli_id'),
			'negeri1' => array(self::BELONGS_TO, 'ListNegeri', 'negeri'),
			'pekerjaan1' => array(self::BELONGS_TO, 'ListPekerjaan', 'pekerjaan'),
			'keluarga0' => array(self::BELONGS_TO, 'Keluarga', 'keluarga'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orangasli_id' => 'Orangasli',
			'ic' => 'No Kad Pengenalan',
			'nama' => 'Nama',
			'dob' => 'Tarikh Lahir',
			'keturunan' => 'Bangsa',
			'agama' => 'Agama',
			'jantina' => 'Jantina',
			'alamat' => 'Alamat',
			'negeri' => 'Negeri',
			'daerah' => 'Daerah',
			'poskod' => 'Poskod',
			'statuskahwin' => 'Status Perkahwinan',
			'catatan' => 'Catatan',
			'telefon' => 'Telefon',
			'email' => 'Emel',
			'pekerjaan' => 'Pekerjaan',
			'pendapatan' => 'Pendapatan (RM)',
			'negeri_kelahiran' => 'Negeri Kelahiran',
			'status_orangasli_id' => 'Status',
			'kampung' => 'Kampung',
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
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('keturunan',$this->keturunan);
		$criteria->compare('agama',$this->agama);
		$criteria->compare('jantina',$this->jantina,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('negeri',$this->negeri);
		$criteria->compare('daerah',$this->daerah);
		$criteria->compare('poskod',$this->poskod);
		$criteria->compare('statuskahwin',$this->statuskahwin,true);
		$criteria->compare('catatan',$this->catatan,true);
		$criteria->compare('status_orangasli_id',$this->status_orangasli_id);
		$criteria->compare('telefon',$this->telefon,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('pendapatan',$this->pendapatan,true);
		$criteria->compare('saiz_gambar',$this->saiz_gambar,true);
		$criteria->compare('nama_gambar',$this->nama_gambar,true);
		$criteria->compare('kampung',$this->kampung,true);

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

	protected function afterFind ()
    {
            // convert to display format
        $this->dob = strtotime ($this->dob);
        $this->dob = date ('d-m-Y', $this->dob);
        
        $this->dob = strtotime ($this->dob);
        $this->dob = date ('d-m-Y', $this->dob);

        parent::afterFind ();
    }
	
}
