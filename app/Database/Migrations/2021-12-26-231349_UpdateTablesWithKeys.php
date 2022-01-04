<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateTablesWithKeys extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->db->query('ALTER TABLE ingredient ADD FOREIGN KEY (ID_recipe) REFERENCES recipe(recipe_ID)');
        $this->db->query('ALTER TABLE kitchenware ADD FOREIGN KEY (ID_recipe) REFERENCES recipe(recipe_ID)');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        //
    }
}
