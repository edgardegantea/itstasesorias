<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Estudiante extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'carrera'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => false, 'null' => true],
            'modalidad'     => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => false, 'null' => true],
            'numControl'    => ['type' => 'varchar', 'constraint' => 20, 'unique' => true, 'null' => true],
            'rol'           => ['type' => 'varchar', 'constraint' => 20, 'default' => 'estudiante'],
            'nombre'        => ['type' => 'varchar', 'constraint' => 150],
            'apaterno'      => ['type' => 'varchar', 'constraint' => 50],
            'amaterno'      => ['type' => 'varchar', 'constraint' => 50],
            'curp'          => ['type' => 'varchar', 'constraint' => 18, 'unique' => true, 'null' => true],
            'email'         => ['type' => 'varchar', 'constraint' => 100, 'unique' => true],
            'password'      => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'foto'          => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'sexo'          => ['type' => 'varchar', 'constraint' => 10],
            'bio'           => ['type' => 'varchar', 'constraint' => 500, 'null' => true, 'default' => 'Estudiante'],
            'status'        => ['type' => 'varchar', 'constraint' => 20, 'default' => 'activo'],
            'created_at'    => ['type' => 'timestamp', 'default' => new RawSql('CURRENT_TIMESTAMP')],
            'updated_at'    => ['type' => 'timestamp', 'null' => true],
            'deleted_at'    => ['type' => 'timestamp', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('carrera', 'carreras', 'id', 'SET_NULL', 'SET_NULL');
        $this->forge->addForeignKey('modalidad', 'modalidades', 'id', 'SET_NULL', 'SET_NULL');
        $this->forge->createTable('estudiantes', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('estudiantes', true);
    }
}
