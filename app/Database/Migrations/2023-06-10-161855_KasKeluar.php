<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KasKeluar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kas_keluar' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_kas' => [
                'type' => 'Varchar',
                'constraint' => 100,
            ],
            'keterangan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'total' => [
                'type' => 'INT',
                'constraint' => 20,
            ],
            'created_at' => [
                'type' => 'timestamp',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'timestamp',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_kas_keluar', true);
        $this->forge->createTable('kas_keluar');
    }

    public function down()
    {
        $this->forge->dropTable('kas_keluar');
    }
}
