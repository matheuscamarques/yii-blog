<?php

class m210419_202050_create_tbl_user extends CDbMigration
{
	public function up()
	{
		// $this->createTable('tbl_user', array(
        //     'id' => 'pk',
        //     'username' => 'string NOT NULL',
        //     'password' => 'text',
		// 	'email'    => 'text'
        // ));
	}

	public function down()
	{
		
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}