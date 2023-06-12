<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penjualan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'barang_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'keterangan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'total' => [
                'type' => 'INT',
                'constraint' => 11,
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
        $this->forge->addPrimaryKey('id_penjualan');
        $this->forge->createTable('penjualan');
        $this->db->query('ALTER TABLE `penjualan` ADD CONSTRAINT `fk_barang_id` FOREIGN KEY (`barang_id`) REFERENCES `barang`(`id_barang`)');
    }

    public function down()
    {
        $this->forge->dropTable('penjualan');
    }
}
