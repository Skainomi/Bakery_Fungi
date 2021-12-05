<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetPenjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_det_penjualan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_penjualan'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'id_barang'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'jumlah_barang'       => [
                'type'       => 'INT',
                'constraint' => '11',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id_det_penjualan', true);
        $this->forge->createTable('data_det_penjualan');
        // $this->forge->addForeignKey('users_id','users','id');
    }

    public function down()
    {
        $this->forge->dropTable('data_det_penjualan');
    }
}