<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Paciente;
class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        
        Paciente::create([
            'nome'      => 'Joana Darck',
            'cpf'       => '1234567900',
            'email'     => 'jodarck@gmail.com',
            'telefone'  => '98888-4444',
        ]);
        

    }
}
