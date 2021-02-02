<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Usuario=[

            [
                'id_rol'=>2,
                'login'=>'ValentinaAdmin',
                'password'=>'Admin',
                'nombre'=>'Valentina',
                'apellido'=>'Padilla',
                'cedula'=>'1045513846',
                'domicilio'=>'Tumaco',
                'celular'=>'301468977',
                'email'=>'valentinaboya15@gmail.com',
                'genero'=>'F',
                'foto'=>'admin1.jpeg',
            ],

            [
                'id_rol'=>2,
                'login'=>'juanDavid2',
                'password'=>'Admin1',
                'nombre'=>'Juan David',
                'apellido'=>'Landazury',
                'cedula'=>'1234560712',
                'domicilio'=>'Tumaco',
                'celular'=>'00000001',             
                'email'=>'juandavid@gmail.com',
                'genero'=>'M',
                'foto'=>'admin2.jpg',
            ],

            [
                'id_rol'=>1,
                'login'=>'MiguelPerez2',
                'password'=>'MiPe2021',
                'nombre'=>'Miguel',
                'apellido'=>'Perez',
                'cedula'=>'1234560712',
                'domicilio'=>'Tumaco',
                'celular'=>'00000001',
                'email'=>'miguelperez@gmail.com',
                'genero'=>'M',
                'foto'=>'hombre1.jpg',
            ],
            [
                'id_rol'=>1,
                'login'=>'SaloBenitez1',
                'password'=>'SaBe2021',
                'nombre'=>'Salomon',
                'apellido'=>'Benitez',
                'cedula'=>'2314545098',
                'domicilio'=>'Pasto',
                'celular'=>'12341238',
                'email'=>'salomonbenitez@gmail.com',
                'genero'=>'M',
                'foto'=>'hombre2.jpg',
            ],
            [
                'id_rol'=>1,
                'login'=>'VeronicaCruz3',
                'password'=>'VeCr2021',
                'nombre'=>'Veronica',
                'apellido'=>'Cruz',
                'cedula'=>'1231234650',
                'domicilio'=>'Buenos aires',
                'celular'=>'32345654',
                'email'=>'veronicacruz@gmail.com',
                'genero'=>'F',
                'foto'=>'mujer1.jpg',
            ],
            [
                'id_rol'=>1,
                'login'=>'MariaEstupiñan4',
                'password'=>'MaEs2021',
                'nombre'=>'Maria',
                'apellido'=>'Estupiñan',
                'cedula'=>'1098786923',
                'domicilio'=>'bella vista',
                'celular'=>'31523154',
                'email'=>'mariaestupiñan@gmail.com',
                'genero'=>'F',
                'foto'=>'mujer2.jpg',
            ],
            [
                'id_rol'=>1,
                'login'=>'EmilyValverde5',
                'password'=>'EmVa2021',
                'nombre'=>'Emily',
                'apellido'=>'Valverde',
                'cedula'=>'1087908678',
                'domicilio'=>'Llorente',
                'celular'=>'31243509',
                'email'=>'emilyvalverde@gmail.com',
                'genero'=>'F',
                'foto'=>'mujer3.jpg',
            ],
          

        ];
        DB::table('usuarios')->insert($Usuario);
    }
}
