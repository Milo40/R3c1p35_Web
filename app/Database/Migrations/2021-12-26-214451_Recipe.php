<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Recipe extends Migration
{
    public function up()
    {
                $this->forge->addField([
            'recipe_ID'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'recipe_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
            ],
            'recipe_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'recipe_cook_time' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'recipe_img' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'edited_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('recipe_ID');
        $this->forge->createTable('recipe');
    }

    public function down()
    {
        $this->forge->dropTable('recipe');
    }
}
