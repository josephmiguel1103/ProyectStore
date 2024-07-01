<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        $role=Role::create(['name'=>'Administrador']);
        $role->permissions()->attach([1,2,3,4,5,6,7,8,9]);

        $role=Role::create(['name'=>'Usuario']);
        $role->syncPermissions(['Ver dashboard','Listar Categoria','Crear Categoria','Editar Categoria','Eliminar Categoria']);
    }

}
