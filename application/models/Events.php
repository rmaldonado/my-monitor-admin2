<?php

/**
 * This is the model class for table "{{events_base}}".
 *
 * The followings are the available columns in table '{{events_base}}':
 * @property string $faddtm
 * @property string $frepeatid
 * @property string $flcardid
 * @property string $ftimestamp
 * @property string $feventid
 * @property string $frlength
 * @property string $fwbrknum
 * @property string $fsbrknum
 * @property string $fobrknum
 * @property string $ftbrknum
 * @property string $fstatus
 */
class Events extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Events the static model class
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
		return '{{events}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('faddtm, frepeatid, flcardid, ftimestamp, feventid, frlength, fwbrknum, fsbrknum, fobrknum, ftbrknum, fstatus', 'required'),
			array('faddtm, frepeatid, flcardid, ftimestamp, feventid, frlength, fwbrknum, fsbrknum, fobrknum, ftbrknum, fstatus', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('faddtm, frepeatid, flcardid, ftimestamp, feventid, frlength, fwbrknum, fsbrknum, fobrknum, ftbrknum, fstatus', 'safe', 'on'=>'search'),
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
			'faddtm' => 'Faddtm',
			'frepeatid' => 'Frepeatid',
			'flcardid' => 'Flcardid',
			'ftimestamp' => 'Ftimestamp',
			'feventid' => 'Feventid',
			'frlength' => 'Frlength',
			'fwbrknum' => 'Fwbrknum',
			'fsbrknum' => 'Fsbrknum',
			'fobrknum' => 'Fobrknum',
			'ftbrknum' => 'Ftbrknum',
			'fstatus' => 'Fstatus',
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

		$criteria->compare('faddtm',$this->faddtm,true);

		$criteria->compare('frepeatid',$this->frepeatid,true);

		$criteria->compare('flcardid',$this->flcardid,true);

		$criteria->compare('ftimestamp',$this->ftimestamp,true);

		$criteria->compare('feventid',$this->feventid,true);

		$criteria->compare('frlength',$this->frlength,true);

		$criteria->compare('fwbrknum',$this->fwbrknum,true);

		$criteria->compare('fsbrknum',$this->fsbrknum,true);

		$criteria->compare('fobrknum',$this->fobrknum,true);

		$criteria->compare('ftbrknum',$this->ftbrknum,true);

		$criteria->compare('fstatus',$this->fstatus,true);

		return new CActiveDataProvider('Events', array(
			'criteria'=>$criteria,
		));
	}
}