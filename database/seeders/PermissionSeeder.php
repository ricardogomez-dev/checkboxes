<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Ver servicios']);
        Permission::create(['name' => 'Agregar servicios']);
        Permission::create(['name' => 'Editar servicios']);
        Permission::create(['name' => 'Eliminar servicios']);
        Permission::create(['name' => 'Ver paquetes']);
        Permission::create(['name' => 'Agregar paquetes']);
        Permission::create(['name' => 'Editar paquetes']);
        Permission::create(['name' => 'Eliminar paquetes']);
        Permission::create(['name' => 'Ver clientes']);
        Permission::create(['name' => 'Agregar clientes']);
        Permission::create(['name' => 'Editar clientes']);
        Permission::create(['name' => 'Eliminar clientes']);
        Permission::create(['name' => 'Ver cotizaciones']);
        Permission::create(['name' => 'Agregar cotizaciones']);
        Permission::create(['name' => 'Editar cotizaciones']);
        Permission::create(['name' => 'Eliminar cotizaciones']);
        Permission::create(['name' => 'Ver tasks']);
        Permission::create(['name' => 'Agregar tasks']);
        Permission::create(['name' => 'Editar tasks']);
        Permission::create(['name' => 'Eliminar tasks']);
    }
}
