<?php

class m210424_000329_permissao extends CDbMigration
{
	public function up()
	{
		return $this->createTable('permissao', array(
            'id' => 'pk',
			'nome' => 'text',
			'removido' => 'int',
			'created_at' => 'date',
			'created_by' => 'int',
			'updated_at' => 'date',
			'updated_by' => 'date'

        ));
	}

	public function down()
	{
		$this->dropTable('permissao');
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