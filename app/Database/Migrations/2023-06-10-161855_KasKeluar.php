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
            'pembelian_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'jenis_kas_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'keterangan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'total_keluar' => [
                'type' => 'INT',
                'constraint' => 20,
            ],
            'tanggal' => [
                'type' => 'date',
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

        $this->forge->addPrimaryKey('id_kas_keluar');
        $this->forge->createTable('kas_keluar');
        $this->db->query('ALTER TABLE `kas_keluar` ADD CONSTRAINT `fk_pembelian_id` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian`(`id_pembelian`) ON DELETE CASCADE' );
        $this->db->query('ALTER TABLE `kas_keluar` ADD CONSTRAINT `fk_jenis_kas_keluar_id` FOREIGN KEY (`jenis_kas_id`) REFERENCES `jenis_kas`(`id_jenis_kas`)');
    }

    public function down()
    {
        $this->forge->dropTable('kas_keluar');
    }
}
