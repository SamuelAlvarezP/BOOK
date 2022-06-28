<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//spatie
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Estudiante']);
        $role3 = Role::create(['name' => 'Docente']);
        $permisos1 = [
            //tabla de roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //tabla de docentes
            'ver-docente',
            'crear-docente',
            'editar-docente',
            'borrar-docente',

            //tabla de estudiantes
            'ver-estudiante',
            'crear-estudiante',
            'editar-estudiante',
            'borrar-estudiante',
        ];
        $permisos2 = [
            'docente.cursos.escritura',
            'mostrar.publicacion',

        ];
        $permisos3 = [
            'dashboard',
            'show.test'
        ];
        foreach($permisos1 as $permiso){
            Permission::create(['name'=>$permiso])->syncRoles([$role1]);
        }
        foreach($permisos2 as $permiso){
            Permission::create(['name'=>$permiso])->syncRoles([$role3]);
        }
        foreach($permisos3 as $permiso){
            Permission::create(['name'=>$permiso])->syncRoles([$role2]);
        }

    }
}
