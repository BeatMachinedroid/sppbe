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
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'kas_keluar_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'tanggal' => [
                'type' => 'date',
            ],
            'keterangan' => [
                'type' => 'varchar',
                'constraint' => 255,
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
        $this->forge->addPrimaryKey('id_laporan');
        $this->forge->createTable('laporan');
        $this->db->query('ALTER TABLE `laporan` ADD CONSTRAINT `fk_kas_masuk_id` FOREIGN KEY (`kas_masuk_id`) REFERENCES `kas_masuk`(`id_kas_masuk`) ON DELETE CASCADE ON UPDATE CASCADE') ;
        $this->db->query('ALTER TABLE `laporan` ADD CONSTRAINT `fk_kas_keluar_id` FOREIGN KEY (`kas_keluar_id`) REFERENCES `kas_keluar`(`id_kas_keluar`) ON DELETE CASCADE ON UPDATE CASCADE') ;

    }

    public function down()
    {
        $this->forge->dropTable('laporan');
    }
}
