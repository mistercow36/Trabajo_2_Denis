<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles =['administrador','gestor','comercial'];
        $permisos=[
            'facturas'=>['read','create','delete','update'],
			'clientes'=>['read','create','delete','update'],
			'empleados'=>['read','create','delete','update'],
		];
		foreach ($roles as $rol){
            Role::create(['name'=>$rol]);
		}
    }
}
