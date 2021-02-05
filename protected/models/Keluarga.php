<?php

/**
 * This is the model class for table "keluarga".
 *
 * The followings are the available columns in table 'keluarga':
 * @property integer $keluarga_id
 * @property string $nama
 * @property string $nama_kir
 * @property string $kp_baru
 * @property string $kp_lama
 * @property string $warna_kp
 * @property string $alamat_kir
 * @property string $poskod
 * @property integer $negeri
 * @property integer $daerah
 * @property string $mukim
 * @property string $kampung
 * @property integer $status_perjawatan
 * @property string $kampung_jkkk
 * @property integer $status_ahli
 * @property string $parlimen
 * @property string $dun
 * @property string $catatan
 *
 * The followings are the available model relations:
 * @property ListPekerjaan $statusPerjawatan
 * @property ListDaerah $daerah0
 * @property ListNegeri $negeri0
 * @property ListStatusOrangasli $statusAhli
 * @property Orangasli[] $orangaslis
 */
class Keluarga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'keluarga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('negeri, daerah, status_perjawatan, status_ahli', 'numerical', 'integerOnly'=>true),
			array('nama, nama_kir, kp_baru, kp_lama, warna_kp, poskod, mukim, kampung, kampung_jkkk, parlimen, dun, catatan', 'length', 'max'=>255),
			array('alamat_kir', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('keluarga_id, nama, nama_kir, kp_baru, kp_lama, warna_kp, alamat_kir, poskod, negeri, daerah, mukim, kampung, status_perjawatan, kampung_jkkk, status_ahli, parlimen, dun, catatan', 'safe', 'on'=>'search'),
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
			'statusPerjawatan' => array(self::BELONGS_TO, 'ListPekerjaan', 'status_perjawatan'),
			'daerah0' => array(self::BELONGS_TO, 'ListDaerah', 'daerah'),
			'negeri0' => array(self::BELONGS_TO, 'ListNegeri', 'negeri'),
			'statusAhli' => array(self::BELONGS_TO, 'ListStatusOrangasli', 'status_ahli'),
			'orangaslis' => array(self::HAS_MANY, 'Orangasli', 'keluarga_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'keluarga_id' => 'Keluarga',
			'nama' => 'Nama Keluarga',
			'nama_kir' => 'Nama Ketua Isi Rumah',
			'kp_baru' => 'Kad Pengenalan Baru KIR',
			'kp_lama' => 'Kad Pengenalan Lama KIR',
			'warna_kp' => 'Warna Kp',
			'alamat_kir' => 'Alamat Ketua Isi Rumah',
			'poskod' => 'Poskod',
			'negeri' => 'Negeri',
			'daerah' => 'Daerah',
			'mukim' => 'Mukim',
			'kampung' => 'Kampung',
			'status_perjawatan' => 'Status Perjawatan',
			'kampung_jkkk' => 'Kampung JKKK', // Jawatankuasa Kemajuan dan Keselamatan Kampung
			'status_ahli' => 'Status Ahli',
			'parlimen' => 'Parlimen',
			'dun' => 'Dun',
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

		$criteria->compare('keluarga_id',$this->keluarga_id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('nama_kir',$this->nama_kir,true);
		$criteria->compare('kp_baru',$this->kp_baru,true);
		$criteria->compare('kp_lama',$this->kp_lama,true);
		$criteria->compare('warna_kp',$this->warna_kp,true);
		$criteria->compare('alamat_kir',$this->alamat_kir,true);
		$criteria->compare('poskod',$this->poskod,true);
		$criteria->compare('negeri',$this->negeri);
		$criteria->compare('daerah',$this->daerah);
		$criteria->compare('mukim',$this->mukim,true);
		$criteria->compare('kampung',$this->kampung,true);
		$criteria->compare('status_perjawatan',$this->status_perjawatan);
		$criteria->compare('kampung_jkkk',$this->kampung_jkkk,true);
		$criteria->compare('status_ahli',$this->status_ahli);
		$criteria->compare('parlimen',$this->parlimen,true);
		$criteria->compare('dun',$this->dun,true);
		$criteria->compare('catatan',$this->catatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Keluarga the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
