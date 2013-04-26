<?php

/**
 * This is the model class for table "{{rollinfo_base}}".
 *
 * The followings are the available columns in table '{{rollinfo_base}}':
 * @property string $fid
 * @property string $frollno
 * @property string $frollgrp
 * @property integer $freednum
 * @property integer $fhealdnum
 * @property string $ftension
 * @property integer $fsnum
 * @property integer $frpm
 * @property double $feffect
 * @property string $fsilktype
 * @property string $flasttime
 * @property string $flastoperator
 * @property string $frolltime
 * @property string $frolloperator
 * @property string $fpltime
 * @property string $frealtime
 * @property string $frealoperator
 * @property string $fproductid
 * @property string $fchaineid
 * @property string $fweftid
 * @property string $forderid
 * @property string $fpcardno
 * @property string $fmemo
 */
class Rollinfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Rollinfo the static model class
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
		return '{{rollinfo_base}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('frollno, frollgrp, freednum, fhealdnum, ftension, fsnum, frpm, feffect, fsilktype, flasttime, flastoperator, frolltime, frolloperator, fpltime, frealtime, frealoperator, fproductid, fchaineid, fweftid', 'required'),
			array('freednum, fhealdnum, fsnum, frpm', 'numerical', 'integerOnly'=>true),
			array('feffect', 'numerical'),
			array('frollno, frollgrp, ftension, forderid, fpcardno', 'length', 'max'=>200),
			array('fsilktype, flasttime, flastoperator, frolltime, frolloperator, fpltime, frealtime, frealoperator, fproductid, fchaineid, fweftid', 'length', 'max'=>11),
			array('fmemo', 'length', 'max'=>400),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fid, frollno, frollgrp, freednum, fhealdnum, ftension, fsnum, frpm, feffect, fsilktype, flasttime, flastoperator, frolltime, frolloperator, fpltime, frealtime, frealoperator, fproductid, fchaineid, fweftid, forderid, fpcardno, fmemo', 'safe', 'on'=>'search'),
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
			'fproduct' => array(self::HAS_ONE, 'Productinfo', array('fproductid' => 'fproductid')),
			'fchaine' => array(self::HAS_ONE, 'Chaineinfo', array('fchaineid' => 'fchaineid')),
			'fweft' => array(self::HAS_ONE, 'Weftinfo', array('fweftid' => 'fweftid')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fid' => 'Fid',
			'frollno' => 'Frollno',
			'frollgrp' => 'Frollgrp',
			'freednum' => 'Freednum',
			'fhealdnum' => 'Fhealdnum',
			'ftension' => 'Ftension',
			'fsnum' => 'Fsnum',
			'frpm' => 'Frpm',
			'feffect' => 'Feffect',
			'fsilktype' => 'Fsilktype',
			'flasttime' => 'Flasttime',
			'flastoperator' => 'Flastoperator',
			'frolltime' => 'Frolltime',
			'frolloperator' => 'Frolloperator',
			'fpltime' => 'Fpltime',
			'frealtime' => 'Frealtime',
			'frealoperator' => 'Frealoperator',
			'fproductid' => 'Fproductid',
			'fchaineid' => 'Fchaineid',
			'fweftid' => 'Fweftid',
			'forderid' => 'Forderid',
			'fpcardno' => 'Fpcardno',
			'fmemo' => 'Fmemo',
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

		$criteria->compare('frollno',$this->frollno,true);

		$criteria->compare('frollgrp',$this->frollgrp,true);

		$criteria->compare('freednum',$this->freednum);

		$criteria->compare('fhealdnum',$this->fhealdnum);

		$criteria->compare('ftension',$this->ftension,true);

		$criteria->compare('fsnum',$this->fsnum);

		$criteria->compare('frpm',$this->frpm);

		$criteria->compare('feffect',$this->feffect);

		$criteria->compare('fsilktype',$this->fsilktype,true);

		$criteria->compare('flasttime',$this->flasttime,true);

		$criteria->compare('flastoperator',$this->flastoperator,true);

		$criteria->compare('frolltime',$this->frolltime,true);

		$criteria->compare('frolloperator',$this->frolloperator,true);

		$criteria->compare('fpltime',$this->fpltime,true);

		$criteria->compare('frealtime',$this->frealtime,true);

		$criteria->compare('frealoperator',$this->frealoperator,true);

		$criteria->compare('fproductid',$this->fproductid,true);

		$criteria->compare('fchaineid',$this->fchaineid,true);

		$criteria->compare('fweftid',$this->fweftid,true);

		$criteria->compare('forderid',$this->forderid,true);

		$criteria->compare('fpcardno',$this->fpcardno,true);

		$criteria->compare('fmemo',$this->fmemo,true);

		return new CActiveDataProvider('Rollinfo', array(
			'criteria'=>$criteria,
		));
	}
}