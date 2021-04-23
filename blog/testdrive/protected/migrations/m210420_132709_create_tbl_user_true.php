<?php

class m210420_132709_create_tbl_user_true extends CDbMigration
{
	public function up()
	{
		return $this->createTable('tbl_user', array(
            'id' => 'pk',
            'username' => 'string NOT NULL',
            'password' => 'text',
			'email'    => 'text'
        ));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
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