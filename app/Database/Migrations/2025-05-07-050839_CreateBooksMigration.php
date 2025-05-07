<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksMigration extends Migration
{
    protected $tableName = 'books';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'slug' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'unique'         => true,
            ],
            'title' => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
                'unique'         => true,
            ],
            'isbn' => [
                'type'           => 'CHAR',
                'constraint'     => 17,
                'unique'         => true,
            ],
            'publisher' => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
            ],
            'authors' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'categories' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'year' => [
                'type'           => 'YEAR',
                'constraint'     => 4,
            ],
            'stock' => [
                'type'           => 'TINYINT',
                'constraint'     => 3,
                'unsigned'       => true,
            ],
            'book_cover' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
            ],
            'rack_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'deleted_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('rack_id', 'racks', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable($this->tableName);
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName);
    }
}
