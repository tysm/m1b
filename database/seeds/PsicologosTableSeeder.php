<?php

use Illuminate\Database\Seeder;

class PsicologosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Psicologo::create(
            [
                'nome'             => 'Sérgio Sena',
                'cpf'               => '9876543211',
                'email'             => 'ssena@gmail.com',
                'epsi'              => '07/336166',
                'especialidades'    => 'ansiedade'
            ],
            [
                'nome'             => 'Adriana Richards',
                'cpf'               => '3339994566',
                'email'             => 'arich@gmail.com',
                'epsi'              => '02/227099',
                'especialidades'    => 'ansiedade'
            ],
            [
                'nome'             => 'João Figueira',
                'cpf'               => '1112223366',
                'email'             => 'jofi@gmail.com',
                'epsi'              => '01/331123',
                'especialidades'    => 'humanista'
            ],
            [
                'nome'             => 'Fernanda Botelho',
                'cpf'               => '2234566177',
                'email'             => 'febotelho@gmail.com',
                'epsi'              => '06/148676',
                'especialidades'    => 'comportamental'
            ],
            [
                'nome'             => 'Juliana Beltrão',
                'cpf'               => '2221116588',
                'email'             => 'julib@gmail.com',
                'epsi'              => '09/912270',
                'especialidades'    => 'comportamental'
            ],
            [
                'nome'             => 'Fernanda Takkai',
                'cpf'               => '34511166001',
                'email'             => 'ftakkai@gmail.com',
                'epsi'              => '12/442270',
                'especialidades'    => 'comportamental'
            ],

        );

    }
}
