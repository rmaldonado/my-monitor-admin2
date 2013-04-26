<?php

class TComMysqlSchema extends CDbConnection {
    
    
	public function getSchema()
	{
        $schema = parent::getSchema();
        var_dump($schema);exit;

	}    
}

?>
