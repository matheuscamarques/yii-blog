<?php

class m210420_132709_create_tbl_user_true extends CDbMigration
{
	public function up()
	{
		// return $this->createTable('user', array(
        //     'id' => 'pk',
        //     'username' => 'string NOT NULL',
        //     'password' => 'text',
		// 	'email'    => 'text',
		// 	'removido' => 'int',
		// 	'created_at' => 'date',
		// 	'created_by' => 'int',
		// 	'updated_at' => 'date',
		// 	'updated_by' => 'date'
        // ));
	}

	public function down()
	{
		$this->dropTable('user');
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