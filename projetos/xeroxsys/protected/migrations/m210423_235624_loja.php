<?php

class m210423_235624_loja extends CDbMigration
{
	public function up()
	{
		return $this->createTable('loja', array(
            'id' => 'pk',
			'user_id'=> 'INT',
			'pedido_id' => 'INT',
			'removido' => 'int',
			'created_at' => 'date',
			'created_by' => 'int',
			'updated_at' => 'date',
			'updated_by' => 'date'
        ));
	}

	public function down()
	{
		$this->dropTable('loja');
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