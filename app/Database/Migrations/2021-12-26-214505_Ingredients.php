<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ingredients extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ingredient_ID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ingredient_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'ingredient_quantity' => [
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

        $this->forge->addPrimaryKey('ingredient_ID');
        $this->forge->createTable('ingredient');
    }

    public function down()
    {
        $this->forge->dropTable('ingredient');
    }
}
