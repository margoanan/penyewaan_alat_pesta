<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PestaPelanggan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'PestaPelanggan_id' => [
				'type' => 'INT',
				'constraint' => 20,
				'auto_increment' => true,
			],
			'PestaPelanggan_Nama' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
			'PestaPelanggan_Alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
			'PestaPelanggan_Tgl' => [
				'type' => 'DATE',
			],
		]);
		
		$this->forge->addKey('PestaPelanggan_id', true);
		$this->forge->createTable('Pesta_Pelanggan');
	
	}

	public function down()
	{
		$this->forge->dropTable('Pesta_Pelanggan');
	}
}
