<?php

class m210423_235552_api extends CDbMigration
{
	public function up()
	{
		return $this->createTable('api', array(
            'id' => 'pk',
			'user_id'=> 'INT',
			'key' => 'INT',
			'removido' => 'int',
			'created_at' => 'date',
			'created_by' => 'int',
			'updated_at' => 'date',
			'updated_by' => 'date'
        ));
	}

	public function down()
	{
		$this->dropTable('api');
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