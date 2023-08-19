<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisKas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis_kas' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('id_jenis_kas');
        $this->forge->createTable('jenis_kas');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_kas');
    }
}
