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
class Events extends LoomComBaseModel
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
		return '{{events}}';
	}


}