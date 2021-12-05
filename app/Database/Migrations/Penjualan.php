<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penjualan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_user'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'jumlah_barang'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'harga_barang'       => [
                'type'       => 'FLOAT',
                'constraint' => '11',
            ],
            'tanggal_terjual'       => [
                'type'       => 'TIMESTAMP',
                'constraint' => '11',
            ],
            'status'   => [
                'type'       => 'TINYINT',
                'constraint' => '1',
                'default' => 0,
            ],
            'tanggal_bayar'       => [
                'type'       => 'TIMESTAMP',
                'constraint' => '1',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_penjualan', true);
        $this->forge->createTable('data_penjualan');
        // $this->forge->addForeignKey('users_id','users','id');
    }

    public function down()
    {
        $this->forge->dropTable('data_penjualan');
    }
}