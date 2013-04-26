<?php

/**
 * This is the model class for table "{{chaineinfo_base}}".
 *
 * The followings are the available columns in table '{{chaineinfo_base}}':
 * @property string $fid
 * @property string $fnumber
 * @property string $fdensity
 * @property double $fminirate
 * @property string $fquota
 * @property string $fspinfo
 * @property string $frate
 * @property string $flotnum
 * @property string $fsn
 * @property string $ffactory
 */
class Chaineinfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Chaineinfo the static model class
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
		return '{{chaineinfo_base}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fminirate', 'numerical'),
			array('fnumber, fdensity, fquota', 'length', 'max'=>11),
			array('fspinfo, ffactory', 'length', 'max'=>200),
			array('frate, flotnum, fsn', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fid, fnumber, fdensity, fminirate, fquota, fspinfo, frate, flotnum, fsn, ffactory', 'safe', 'on'=>'search'),
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
			'fid' => '经纱ID',
			'fnumber' => '总经根数',
			'fdensity' => '经纱密度',
			'fminirate' => '经缩率（%）',
			'fquota' => '经纱定额',
			'fspinfo' => '经纱规格',
			'frate' => '经纱比例',
			'flotnum' => '经纱号数',
			'fsn' => '经纱批号',
			'ffactory' => '经纱厂家',
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

		$criteria->compare('fnumber',$this->fnumber,true);

		$criteria->compare('fdensity',$this->fdensity,true);

		$criteria->compare('fminirate',$this->fminirate);

		$criteria->compare('fquota',$this->fquota,true);

		$criteria->compare('fspinfo',$this->fspinfo,true);

		$criteria->compare('frate',$this->frate,true);

		$criteria->compare('flotnum',$this->flotnum,true);

		$criteria->compare('fsn',$this->fsn,true);

		$criteria->compare('ffactory',$this->ffactory,true);

		return new CActiveDataProvider('Chaineinfo', array(
			'criteria'=>$criteria,
		));
	}
}