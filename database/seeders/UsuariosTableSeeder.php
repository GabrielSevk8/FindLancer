<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
# model que manipula o DB
use App\Models\User;
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder
{
    /**
        Criar usuários usando o Faker
     */
    public function run(): void
    {

        $arrayValues = [ 's','n' ];

        # cria uma instância da classe Faker
        $faker = Faker::create();

        for( $i = 0; $i < 15; $i++ )
        {
            $user = User::create([
                'nome'=> $faker->name,
                'email'=> $faker->unique()->email,
                'password'=> bcrypt('1234'),
                'choose' => $faker->randomElement(['s' ,'n']),
            ]);
        }
    }
}
