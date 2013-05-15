<?php

/**
 * This is the model class for table "{{Companyinfo}}".
 *
 * The followings are the available columns in table '{{Companyinfo}}':
 * @property string $fid
 * @property string $fname
 * @property string $faddress
 * @property string $floomnum
 * @property string $fdepartnum
 * @property string $finfo
 * @property string $fcreatetm
 * @property integer $fstatus
 */
class Companyinfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Companyinfo the static model class
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
		return '{{companyinfo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, faddress, fcreatetm', 'required'),
			array('fstatus', 'numerical', 'integerOnly'=>true),
			array('fname', 'length', 'max'=>256),
			array('faddress, finfo', 'length', 'max'=>400),
			array('floomnum, fdepartnum, fcreatetm', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fid, fname, faddress, floomnum, fdepartnum, finfo, fcreatetm, fstatus', 'safe', 'on'=>'search'),
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
			'flooms' => array(self::HAS_MANY, 'Loominfo', array('fid'=>'fcompanyid')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fid' => 'Fid',
			'fname' => '名称',
			'faddress' => '地址',
			'floomnum' => '纺织机数量',
			'fdepartnum' => '部门数量',
			'finfo' => '备注',
			'fcreatetm' => '创建时间',
			'fstatus' => '状态',
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

		$criteria->compare('fname',$this->fname,true);

		$criteria->compare('faddress',$this->faddress,true);

		$criteria->compare('floomnum',$this->floomnum,true);

		$criteria->compare('fdepartnum',$this->fdepartnum,true);

		$criteria->compare('finfo',$this->finfo,true);

		$criteria->compare('fcreatetm',$this->fcreatetm,true);

		$criteria->compare('fstatus',$this->fstatus);

		return new CActiveDataProvider('Companyinfo', array(
			'criteria'=>$criteria,
		));
	}


	public function getLooms()
	{
		$criteria=new CDbCriteria;
		$dataProvider = new CActiveDataProvider('Loominfo', array(
			'criteria'=>$criteria,
		));
		$criteria->compare('fcompanyid',$this->fid,true);
		return $dataProvider;
	}
}