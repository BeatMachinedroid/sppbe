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
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'barang' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'keterangan_penjualan' => [
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
        $this->forge->addPrimaryKey('id_penjualan');
        $this->forge->createTable('penjualan');
        $this->db->query('ALTER TABLE `penjualan` ADD CONSTRAINT `fk_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE' );
    }

    public function down()
    {
        $this->forge->dropTable('penjualan');
    }
}
