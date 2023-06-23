<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laporan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_laporan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kas_masuk_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'null' => true,
            ],
            'kas_keluar_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'null' => true,
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

        $this->forge->addKey('id_laporan', true);
        $this->forge->createTable('laporan');
        $this->db->query('ALTER TABLE `laporan` ADD CONSTRAINT `fk_kas_masuk_id` FOREIGN KEY (`kas_masuk_id`) REFERENCES `kas_masuk`(`id_kas_masuk`)');
        $this->db->query('ALTER TABLE `laporan` ADD CONSTRAINT `fk_kas_keluar_id` FOREIGN KEY (`kas_keluar_id`) REFERENCES `kas_keluar`(`id_kas_keluar`)');
    }

    public function down()
    {
        //
    }
}
