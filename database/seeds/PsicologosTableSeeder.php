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
                'nome'              => 'Sérgio Sena',
                'cpf'               => '9876543211',
                'telefone'          => '99888-0001',
                'email'             => 'ssena@gmail.com',
                'epsi'              => '07/336166',
                'especialidades'    => 'ansiedade',
            ],
            [
                'nome'              => 'Adriana Richards',
                'cpf'               => '3339994566',
                'telefone'          => '99844-0002',
                'email'             => 'arich@gmail.com',
                'epsi'              => '02/227099',
                'especialidades'    => 'ansiedade',
            ],
            [
                'nome'              => 'João Figueira',
                'cpf'               => '1112223366',
                'telefone'          => '99811-0031',
                'email'             => 'jofi@gmail.com',
                'epsi'              => '01/331123',
                'especialidades'    => 'humanista',
            ],
            [
                'nome'             => 'Fernanda Botelho',
                'cpf'               => '2234566177',
                'telefone'          => '99287-2223',
                'email'             => 'febotelho@gmail.com',
                'epsi'              => '06/148676',
                'especialidades'    => 'comportamental',
            ],
            [
                'nome'             => 'Juliana Beltrão',
                'cpf'               => '2221116588',
                'telefone'          => '99777-4433',
                'email'             => 'julib@gmail.com',
                'epsi'              => '09/912270',
                'especialidades'    => 'comportamental',
            ],
            [
                'nome'             => 'Fernanda Takkai',
                'cpf'               => '34511166001',
                'telefone'          => '99999-2121',
                'email'             => 'ftakkai@gmail.com',
                'epsi'              => '12/442270',
                'especialidades'    => 'comportamental',
            ]

        );

    }
}
