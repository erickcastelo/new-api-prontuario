<?php

use App\ExameLaboratorial;
use Illuminate\Database\Seeder;

class ExameLaboratorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExameLaboratorial::create([
            'numero' => '1',
            'descricao' => 'HEMOGRAMA COMPLETO'
        ]);

        ExameLaboratorial::create([
            'numero' => '2',
            'descricao' => 'GLICOSE'
        ]);

        ExameLaboratorial::insert($this->arrayHemograma());
        ExameLaboratorial::insert($this->arrayGlicose());
    }

    private function arrayHemograma()
    {
        return [
            0 => [
                'numero' => '1.1',
                'descricao' => 'HEMACIAS',
                'possui' => '1',
            ],
            1 => [
                'numero' => '1.2',
                'descricao' => 'HEMOGLOBINA',
                'possui' => '1',
            ],
            2 => [
                'numero' => '1.3',
                'descricao' => 'HEMOTOCRITO',
                'possui' => '1',
            ],
            3 => [
                'numero' => '1.4',
                'descricao' => 'VCM',
                'possui' => '1',
            ],
            4 => [
                'numero' => '1.5',
                'descricao' => 'HCM',
                'possui' => '1',
            ],
            5 => [
                'numero' => '1.6',
                'descricao' => 'CHCM',
                'possui' => '1',
            ],
            6 => [
                'numero' => '1.7',
                'descricao' => 'RDW',
                'possui' => '1',
            ]
        ];
    }

    private function arrayGlicose()
    {
        return  [
            0 => [
                'numero' => '2.1',
                'descricao' => 'NORMAL',
                'possui' => '2'
            ],
            1 => [
                'numero' => '2.2',
                'descricao' => 'INTOLERANCIA GLICOSE JEJUM',
                'possui' => '2'
            ],
            2 => [
                'numero' => '2.3',
                'descricao' => 'DIABETES MELLITUS',
                'possui' => '2'
            ],
        ];
    }
}
