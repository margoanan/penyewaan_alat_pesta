<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlatPesta extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'alat_id' => [
				'type' => 'INT',
				'constraint' => 20,
				'auto_increment' => true,
			],
			'alat_nama' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
			'alat_status' => [
				'type' => 'ENUM',
				'constraint' => "'masuk', 'keluar'",
				'default' => 'masuk'
			],
			'alat_kondisi' => [
				'type' => 'ENUM',
				'constraint' => "'baik', 'rusak', 'dalam perbaikan'",
				'default' => 'baik'
			],
		]);
		
		$this->forge->addKey('alat_id', true);
		$this->forge->createTable('alat');
	}

	public function down()
	{
		$this->forge->dropTable('alat');
	}
}
