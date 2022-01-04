<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kitchenware extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ware_ID' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
                'constraint' => 5,
            ],
            'ware_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'ware_quantity' => [
                'type' => 'INT',
                'constraint' => 2,
                'default' => 1,
            ],
            'ID_recipe' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'edited_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('ware_ID');
        $this->forge->createTable('kitchenware');
    }

    public function down()
    {
        $this->forge->dropTable('kitchenware');
    }
}
