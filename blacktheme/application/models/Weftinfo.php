<?php

/**
 * This is the model class for table "{{weftinfo_base}}".
 *
 * The followings are the available columns in table '{{weftinfo_base}}':
 * @property string $fid
 * @property double $fdensity
 * @property integer $fcycle
 * @property string $fnumber
 * @property string $flnumber
 * @property string $fquota
 * @property string $fspinfo
 * @property string $frate
 * @property string $flotnum
 * @property string $fsn
 * @property string $ffactory
 */
class Weftinfo extends LoomComBaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Weftinfo the static model class
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
		return '{{weftinfo_base}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fcycle', 'numerical', 'integerOnly'=>true),
			array('fdensity', 'numerical'),
			array('fnumber, fquota', 'length', 'max'=>11),
			array('flnumber, frate, flotnum, fsn', 'length', 'max'=>100),
			array('fspinfo, ffactory', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fid, fdensity, fcycle, fnumber, flnumber, fquota, fspinfo, frate, flotnum, fsn, ffactory', 'safe', 'on'=>'search'),
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
			'fid' => '纬纱代码ID',
			'fdensity' => '维密',
			'fcycle' => '周期转数',
			'fnumber' => '周期纬纱',
			'flnumber' => '纬纱编号',
			'fquota' => '纬纱定额',
			'fspinfo' => '纬纱规格',
			'frate' => '纬纱比例',
			'flotnum' => '纬纱号数',
			'fsn' => '纬纱批号',
			'ffactory' => '纬纱厂家',
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

		$criteria->compare('fdensity',$this->fdensity);

		$criteria->compare('fcycle',$this->fcycle);

		$criteria->compare('fnumber',$this->fnumber,true);

		$criteria->compare('flnumber',$this->flnumber,true);

		$criteria->compare('fquota',$this->fquota,true);

		$criteria->compare('fspinfo',$this->fspinfo,true);

		$criteria->compare('frate',$this->frate,true);

		$criteria->compare('flotnum',$this->flotnum,true);

		$criteria->compare('fsn',$this->fsn,true);

		$criteria->compare('ffactory',$this->ffactory,true);

		return new CActiveDataProvider('Weftinfo', array(
			'criteria'=>$criteria,
		));
	}
}