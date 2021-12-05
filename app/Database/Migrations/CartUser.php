<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cart'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_user'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'id_barang'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'bnyk_barang'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],

        ]);
        $this->forge->addKey('id_cart', true);
        $this->forge->createTable('data_cart_user');
        // $this->forge->addForeignKey('users_id','users','id');
    }

    public function down()
    {
        $this->forge->dropTable('data_cart_user');
    }
}