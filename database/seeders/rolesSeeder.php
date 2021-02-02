<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Roles =[
            [
                'Descripcion'=>'Usuario',
                
            ], 
            [
                'Descripcion'=>'Administrador',
                
            ],


        ];

        DB::table('roles')->insert($Roles);
    }
}
