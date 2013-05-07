<?php

/**
 * This is the model class for table "{{loominfo_base}}".
 *
 * The followings are the available columns in table '{{loominfo_base}}':
 * @property string $fid
 * @property string $floomsn
 * @property string $floomid
 * @property double $floomx
 * @property double $floomy
 * @property string $fcompanyid
 * @property string $frepeaterid
 * @property string $fgatherid
 * @property integer $fstatus
 * @property string $frollid
 * @property string $floominfo
 */
class Loominfo extends LoomComBaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Loominfo the static model class
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
		return '{{loominfo_base}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('floomsn, floomid, fcompanyid, frepeaterid, fgatherid', 'required'),
			array('fstatus', 'numerical', 'integerOnly'=>true),
			array('floomx, floomy', 'numerical'),
			array('floomsn, fcompanyid, frepeaterid, fgatherid, frollid', 'length', 'max'=>11),
			array('floomid', 'length', 'max'=>64),
			array('floominfo', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fid, floomsn, floomid, floomx, floomy, fcompanyid, frepeaterid, fgatherid, fstatus, frollid, floominfo', 'safe', 'on'=>'search'),
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
			'floomsn' => 'Floomsn',
			'floomid' => 'Floomid',
			'floomx' => 'Floomx',
			'floomy' => 'Floomy',
			'fcompanyid' => 'Fcompanyid',
			'frepeaterid' => 'Frepeaterid',
			'fgatherid' => 'Fgatherid',
			'fstatus' => 'Fstatus',
			'frollid' => 'Frollid',
			'floominfo' => 'Floominfo',
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

		$criteria->compare('floomsn',$this->floomsn,true);

		$criteria->compare('floomid',$this->floomid,true);

		$criteria->compare('floomx',$this->floomx);

		$criteria->compare('floomy',$this->floomy);

		$criteria->compare('fcompanyid',$this->fcompanyid,true);

		$criteria->compare('frepeaterid',$this->frepeaterid,true);

		$criteria->compare('fgatherid',$this->fgatherid,true);

		$criteria->compare('fstatus',$this->fstatus);

		$criteria->compare('frollid',$this->frollid,true);

		$criteria->compare('floominfo',$this->floominfo,true);

		return new CActiveDataProvider('Loominfo', array(
			'criteria'=>$criteria,
		));
	}
}