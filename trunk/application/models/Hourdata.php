<?php

/**
 * This is the model class for table "{{Hourdata}}".
 *
 * The followings are the available columns in table '{{Hourdata}}':
 * @property string $fhourid
 * @property string $frepeatid
 * @property integer $flcardid
 * @property string $frstatus
 * @property string $ftimestamp
 * @property string $frlength
 * @property string $fpowersec
 * @property string $frunsec
 * @property string $fwbrknum
 * @property string $fsbrknum
 * @property string $fobrknum
 * @property string $frpmnum
 * @property string $ftbrknum
 * @property string $fextnum
 * @property string $faddtm
 * @property string $fupdatetm
 */
class Hourdata extends LoomComBaseModel
{


	public $swb;
	public $ssb;
	public $sob;
	public $srp;
	public $stb;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Hourdata the static model class
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
		return '{{Hourdata}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fhourid, frepeatid, flcardid, frstatus, ftimestamp, frlength, fpowersec, frunsec, fwbrknum, fsbrknum, fobrknum, frpmnum, ftbrknum, fextnum, faddtm, fupdatetm', 'required'),
			array('flcardid', 'numerical', 'integerOnly'=>true),
			array('fhourid, frepeatid, frstatus, ftimestamp, frlength, fpowersec, frunsec, fwbrknum, fsbrknum, fobrknum, frpmnum, ftbrknum, fextnum, faddtm, fupdatetm', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fhourid, frepeatid, flcardid, frstatus, ftimestamp, frlength, fpowersec, frunsec, fwbrknum, fsbrknum, fobrknum, frpmnum, ftbrknum, fextnum, faddtm, fupdatetm', 'safe', 'on'=>'search'),
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
			'fhourid' => 'Fhourid',
			'frepeatid' => 'Frepeatid',
			'flcardid' => 'Flcardid',
			'frstatus' => 'Frstatus',
			'ftimestamp' => 'Ftimestamp',
			'frlength' => 'Frlength',
			'fpowersec' => 'Fpowersec',
			'frunsec' => 'Frunsec',
			'fwbrknum' => 'Fwbrknum',
			'fsbrknum' => 'Fsbrknum',
			'fobrknum' => 'Fobrknum',
			'frpmnum' => 'Frpmnum',
			'ftbrknum' => 'Ftbrknum',
			'fextnum' => 'Fextnum',
			'faddtm' => 'Faddtm',
			'fupdatetm' => 'Fupdatetm',
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

		$criteria->compare('fhourid',$this->fhourid,true);

		$criteria->compare('frepeatid',$this->frepeatid,true);

		$criteria->compare('flcardid',$this->flcardid);

		$criteria->compare('frstatus',$this->frstatus,true);

		$criteria->compare('ftimestamp',$this->ftimestamp,true);

		$criteria->compare('frlength',$this->frlength,true);

		$criteria->compare('fpowersec',$this->fpowersec,true);

		$criteria->compare('frunsec',$this->frunsec,true);

		$criteria->compare('fwbrknum',$this->fwbrknum,true);

		$criteria->compare('fsbrknum',$this->fsbrknum,true);

		$criteria->compare('fobrknum',$this->fobrknum,true);

		$criteria->compare('frpmnum',$this->frpmnum,true);

		$criteria->compare('ftbrknum',$this->ftbrknum,true);

		$criteria->compare('fextnum',$this->fextnum,true);

		$criteria->compare('faddtm',$this->faddtm,true);

		$criteria->compare('fupdatetm',$this->fupdatetm,true);

		return new CActiveDataProvider('Hourdata', array(
			'criteria'=>$criteria,
		));
	}
}