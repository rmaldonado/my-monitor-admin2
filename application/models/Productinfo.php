<?php

/**
 * This is the model class for table "{{productinfo_base}}".
 *
 * The followings are the available columns in table '{{productinfo_base}}':
 * @property string $fid
 * @property string $fprodcutsn
 * @property string $fproductnm
 * @property string $fsilksp
 * @property string $freedwd
 * @property string $freedsn
 * @property integer $freedlen
 * @property string $ftotallen
 * @property string $fweave
 * @property string $ftype
 * @property string $flevel
 * @property integer $fplspeed
 * @property double $fpleffect
 * @property string $fchaineid
 * @property string $fweftid
 * @property string $finfo
 * @property integer $fstatus
 */
class Productinfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Productinfo the static model class
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
		return '{{productinfo_base}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fchaineid, fweftid', 'required'),
			array('freedlen, fplspeed, fstatus', 'numerical', 'integerOnly'=>true),
			array('fpleffect', 'numerical'),
			array('fprodcutsn, fproductnm, fsilksp, fweave, ftype, flevel', 'length', 'max'=>200),
			array('freedwd, ftotallen, fchaineid, fweftid', 'length', 'max'=>11),
			array('freedsn', 'length', 'max'=>32),
			array('finfo', 'length', 'max'=>400),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fid, fprodcutsn, fproductnm, fsilksp, freedwd, freedsn, freedlen, ftotallen, fweave, ftype, flevel, fplspeed, fpleffect, fchaineid, fweftid, finfo, fstatus', 'safe', 'on'=>'search'),
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
			'fid' => 'Fid',
			'fprodcutsn' => 'Fprodcutsn',
			'fproductnm' => 'Fproductnm',
			'fsilksp' => 'Fsilksp',
			'freedwd' => 'Freedwd',
			'freedsn' => 'Freedsn',
			'freedlen' => 'Freedlen',
			'ftotallen' => 'Ftotallen',
			'fweave' => 'Fweave',
			'ftype' => 'Ftype',
			'flevel' => 'Flevel',
			'fplspeed' => 'Fplspeed',
			'fpleffect' => 'Fpleffect',
			'fchaineid' => 'Fchaineid',
			'fweftid' => 'Fweftid',
			'finfo' => 'Finfo',
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

		$criteria->compare('fid',$this->fid,true);

		$criteria->compare('fprodcutsn',$this->fprodcutsn,true);

		$criteria->compare('fproductnm',$this->fproductnm,true);

		$criteria->compare('fsilksp',$this->fsilksp,true);

		$criteria->compare('freedwd',$this->freedwd,true);

		$criteria->compare('freedsn',$this->freedsn,true);

		$criteria->compare('freedlen',$this->freedlen);

		$criteria->compare('ftotallen',$this->ftotallen,true);

		$criteria->compare('fweave',$this->fweave,true);

		$criteria->compare('ftype',$this->ftype,true);

		$criteria->compare('flevel',$this->flevel,true);

		$criteria->compare('fplspeed',$this->fplspeed);

		$criteria->compare('fpleffect',$this->fpleffect);

		$criteria->compare('fchaineid',$this->fchaineid,true);

		$criteria->compare('fweftid',$this->fweftid,true);

		$criteria->compare('finfo',$this->finfo,true);

		$criteria->compare('fstatus',$this->fstatus);

		return new CActiveDataProvider('Productinfo', array(
			'criteria'=>$criteria,
		));
	}
}