<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembelian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembelian' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'keterangan_pembelian' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'jenis_kas_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'total' => [
                'type' => 'INT',
                'constraint' => 11,
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
        $this->forge->addPrimaryKey('id_pembelian');
        $this->forge->createTable('pembelian');
        $this->db->query('ALTER TABLE `pembelian` ADD CONSTRAINT `fk_jenis_kas_id` FOREIGN KEY (`jenis_kas_id`) REFERENCES `jenis_kas`(`id_jenis_kas`) ON DELETE CASCADE ON UPDATE CASCADE');
    }

    public function down()
    {
        $this->forge->dropTable('pembelian');
    }
}
