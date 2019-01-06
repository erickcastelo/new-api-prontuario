<?php

use App\Model\Paciente;
use Illuminate\Database\Seeder;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paciente::create([
            'cpf' => '63963048050',
            'rg' => '184744118',
            'nome' => 'Administrador',
            'datanascimento' => date('d/m/y'),
            'fone' => '92991151052',
            'email' => 'admin@admin.com',
            'password' => '123',
            'tipopessoa' => 'PA'
        ]);
    }
}
