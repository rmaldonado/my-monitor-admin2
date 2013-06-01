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
class Rollinfo extends LoomComBaseModel
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
		return '{{rollinfo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('frollno, frollgrp, freednum, fhealdnum, ftension, fsnum, frpm, feffect, fsilktype, flasttime, flastoperator, frolltime, frolloperator, fpltime, frealtime, frealoperator', 'required', 'message' => '{attribute}:不能为空'),
			array('fproductid, fchaineid, fweftid', 'required', 'message' => '请选择 {attribute}'),
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
			'fproduct' => array(self::HAS_ONE, 'Productinfo', array('fid'=>'fproductid')),
			'fchaine' => array(self::HAS_ONE, 'Chaineinfo', array('fid'=>'fchaineid')),
			'fweft' => array(self::HAS_ONE, 'Weftinfo', array('fid'=>'fweftid')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fid' => 'Fid',
			'frollno' => '织轴号',
			'frollgrp' => '并轴组别',
			'freednum' => '刚筘次数',
			'fhealdnum' => '综丝次数',
			'ftension' => '设定张力',
			'fsnum' => '条（匹）数',
			'frpm' => '转/分钟',
			'feffect' => '织机效率(%)',
			'fsilktype' => 'Fsilktype',
			'flasttime' => '上次金机时间',
			'flastoperator' => '上次尽机人员',
			'frolltime' => '本次上轴时间',
			'frolloperator' => '本次上轴人员',
			'fpltime' => '计划尽机时间',
			'frealtime' => '实际尽机时间',
			'frealoperator' => '实际尽机人员',
			'fproductid' => '产品代码ID',
			'fchaineid' => '经纱参数代码ID',
			'fweftid' => '纬纱参数代码ID',
			'forderid' => '订单号',
			'fpcardno' => '制程卡号',
			'fmemo' => '备注信息',
			'frefloomid' => '关联织布机'
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

	public function init() {
		parent::init();
		//$this->fsilktype = 16;
	}


	public function getFrollgrp1() {
		return explode('-', $this->frollgrp);
	}
	public function setFrollgrp1($grp) {
		$this->frollgrp = implode('-', $grp);
	}

	public function getFsilktype1() {
		$t = array();
		$i = 0;
		$n = pow(2, $i);
		$m = intval($this->fsilktype);
		while ($n <= $m) {
			if (($n & $m) == $n) {
				$t[] = $n;
			}
			$i++;
			$n = pow(2, $i);
		}

		return $t;
	}
	public function setFsilktype1 ($grp) {
		$this->fsilktype  = 0;
		if (empty($grp)) {
			return;
		}
		$n = count($grp);
		for ($i=0; $i < $n; $i++) { 
			$this->fsilktype |= $grp[$i];
		}
	}


	public function getFrolltime1() {
		return date('Y-m-d H:i', $this->frolltime);
	}
	public function setFrolltime1() {
		$this->frolltime = strtotime($this->frolltime);
	}

	public function getFpltime1() {
		return date('Y-m-d H:i', $this->fpltime);
	}
	public function setFpltime1() {
		$this->fpltime = strtotime($this->fpltime);
	}

	public function getFrealtime1() {
		return date('Y-m-d H:i', $this->frealtime);
	}
	public function setFrealtime1() {
		$this->frealtime = strtotime($this->frealtime);
	}

	public function getFlasttime1() {
		return date('Y-m-d H:i', $this->flasttime);
	}
	public function setFlasttime1() {
		$this->flasttime = strtotime($this->flasttime);
	}	

	/*public function beforeValidate() {
		if ($this->frolltime) {
			$this->frolltime = strtotime($this->frolltime);
		}
		
		if ($this->fpltime) {
			$this->fpltime = strtotime($this->fpltime);
		}

		if ($this->frealtime) {
			$this->frealtime = strtotime($this->frealtime);
		}

		if ($this->flasttime) {
			$this->flasttime = strtotime($this->flasttime);
		}

	}*/

}