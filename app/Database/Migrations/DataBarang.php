<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_barang'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'gambar'       => [
                'type'       => 'VARCHAR',
                'constraint' => '300',
                'null'       => true,
            ],
            'tipe_barang'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'rating'       => [
                'type'       => 'INT',
                'constraint' => '11',
                'default'       => 0,
            ],
            'harga_barang'   => [
                'type'       => 'FLOAT',
                'constraint' => '11',
            ],
            'produksi_barang'       => [
                'type'       => 'TINYINT',
                'constraint' => '1',
                'default'       => 0,
            ],
            'jumlah_barang'       => [
                'type'       => 'INT',
                'constraint' => '11',
                'default'       => 0,
            ],
            'desc_barang'       => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
                'null'       => true,
            ],
            'id_pegawai'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('id_barang', true);
        $this->forge->createTable('data_barang');
        // $this->forge->addForeignKey('users_id','users','id');
    }

    public function down()
    {
        $this->forge->dropTable('data_barang');
    }
}