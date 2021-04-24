<?php

class m210424_000320_permissoes extends CDbMigration
{
	public function up()
	{
		return $this->createTable('permissoes', array(
            'id' => 'pk',
			'user_id'=> 'INT',
			'permissao_id' => 'INT',
			'loja_id' 	=> 'INT',
			'removido' => 'int',
			'created_at' => 'date',
			'created_by' => 'int',
			'updated_at' => 'date',
			'updated_by' => 'date'
        ));
	}

	public function down()
	{
		$this->dropTable('permissoes');
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