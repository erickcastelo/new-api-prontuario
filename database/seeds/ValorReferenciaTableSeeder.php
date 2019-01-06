<?php

use App\ValorReferencia;
use Illuminate\Database\Seeder;

class ValorReferenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ValorReferencia::insert($this->generateValoresReferenciaHemograma());
        ValorReferencia::insert($this->generateValoresReferenciaGlicose());
    }

    private function generateValoresReferenciaHemograma()
    {
        return [
            0 => [
                'faixaetaria' => 'HOMENS',
                'intervalo1' => '4.50a6.10',
                'unidade' => 'milhoes/mm3',
                'numexamelaboratorial' => '1.1'
            ],
            1 => [
                'faixaetaria' => 'MULHERES',
                'intervalo1' => '4.00a5.40',
                'unidade' => 'milhoes/mm3',
                'numexamelaboratorial' => '1.1'
            ],
            2 => [
                'faixaetaria' => 'CRIANÇAS',
                'intervalo1' => '4.07a5.37',
                'unidade' => 'milhoes/mm3',
                'numexamelaboratorial' => '1.1'
            ],
            3 => [
                'faixaetaria' => 'ACIMA DE 70 ANOS',
                'intervalo1' => '3.90a5.36',
                'unidade' => 'milhoes/mm3',
                'numexamelaboratorial' => '1.1'
            ],
            4 => [
                'faixaetaria' => 'HOMENS',
                'intervalo1' => '13.00a16.50',
                'unidade' => 'g/dL',
                'numexamelaboratorial' => '1.2'
            ],
            5 => [
                'faixaetaria' => 'MULHERES',
                'intervalo1' => '12.00a15.80',
                'unidade' => 'g/dL',
                'numexamelaboratorial' => '1.2'
            ],
            6 => [
                'faixaetaria' => 'CRIANÇAS',
                'intervalo1' => '10.50a14.00',
                'unidade' => 'g/dL',
                'numexamelaboratorial' => '1.2'
            ],
            7 => [
                'faixaetaria' => 'ACIMA DE 70 ANOS',
                'intervalo1' => '11.50a15.10',
                'unidade' => 'g/dL',
                'numexamelaboratorial' => '1.2'
            ],
            8 => [
                'faixaetaria' => 'HOMENS',
                'intervalo1' => '36.00a54.00',
                'unidade' => '%',
                'numexamelaboratorial' => '1.3'
            ],
            9 => [
                'faixaetaria' => 'MULHERES',
                'intervalo1' => '33.00a47.80',
                'unidade' => '%',
                'numexamelaboratorial' => '1.3'
            ],
            10 => [
                'faixaetaria' => 'CRIANÇAS',
                'intervalo1' => '30.00a44.50',
                'unidade' => '%',
                'numexamelaboratorial' => '1.3'
            ],
            11 => [
                'faixaetaria' => 'ACIMA DE 70 ANOS',
                'intervalo1' => '33.00a46.00',
                'unidade' => '%',
                'numexamelaboratorial' => '1.3'
            ],
            12 => [
                'faixaetaria' => 'HOMENS',
                'intervalo1' => '80.00a98.00',
                'unidade' => 'fl',
                'numexamelaboratorial' => '1.4'
            ],
            13 => [
                'faixaetaria' => 'MULHERES',
                'intervalo1' => '80.00a98.00',
                'unidade' => 'fl',
                'numexamelaboratorial' => '1.4'
            ],
            14 => [
                'faixaetaria' => 'CRIANÇAS',
                'intervalo1' => '70.00a86.00',
                'unidade' => 'fl',
                'numexamelaboratorial' => '1.4'
            ],
            15 => [
                'faixaetaria' => 'ACIMA DE 70 ANOS',
                'intervalo1' => '80.00a98.00',
                'unidade' => 'fl',
                'numexamelaboratorial' => '1.4'
            ],
            16 => [
                'faixaetaria' => 'HOMENS',
                'intervalo1' => '26.00a32.90',
                'unidade' => 'pg',
                'numexamelaboratorial' => '1.5'
            ],
            17 => [
                'faixaetaria' => 'MULHERES',
                'intervalo1' => '26.00a32.60',
                'unidade' => 'pg',
                'numexamelaboratorial' => '1.5'
            ],
            18 => [
                'faixaetaria' => 'CRIANÇAS',
                'intervalo1' => '23.20a31.70',
                'unidade' => 'pg',
                'numexamelaboratorial' => '1.5'
            ],
            19 => [
                'faixaetaria' => 'ACIMA DE 70 ANOS',
                'intervalo1' => '27.00a31.00',
                'unidade' => 'pg',
                'numexamelaboratorial' => '1.5'
            ],
            20 => [
                'faixaetaria' => 'HOMENS',
                'intervalo1' => '30.00a36.50',
                'unidade' => 'g/dl',
                'numexamelaboratorial' => '1.6'
            ],
            21 => [
                'faixaetaria' => 'MULHERES',
                'intervalo1' => '30.00a36.50',
                'unidade' => 'g/dl',
                'numexamelaboratorial' => '1.6'
            ],
            22 => [
                'faixaetaria' => 'CRIANÇAS',
                'intervalo1' => '30.00a36.50',
                'unidade' => 'g/dl',
                'numexamelaboratorial' => '1.6'
            ],
            23 => [
                'faixaetaria' => 'ACIMA DE 70 ANOS',
                'intervalo1' => '30.00a36.50',
                'unidade' => 'g/dl',
                'numexamelaboratorial' => '1.6'
            ],
            24 => [
                'faixaetaria' => 'HOMENS',
                'intervalo1' => '11.00a16.00',
                'unidade' => '%',
                'numexamelaboratorial' => '1.7'
            ],
            25 => [
                'faixaetaria' => 'MULHERES',
                'intervalo1' => '11.00a16.00',
                'unidade' => '%',
                'numexamelaboratorial' => '1.7'
            ],
            26 => [
                'faixaetaria' => 'CRIANÇAS',
                'intervalo1' => '11.00a16.00',
                'unidade' => '%',
                'numexamelaboratorial' => '1.7'
            ],
            27 => [
                'faixaetaria' => 'ACIMA DE 70 ANOS',
                'intervalo1' => '11.00a16.00',
                'unidade' => '%',
                'numexamelaboratorial' => '1.7'
            ],
        ];
    }

    private function generateValoresReferenciaGlicose()
    {
        return [
            0 => [
                'faixaetaria' => 'NORMAL',
                'intervalo1' => '70.00a99.00',
                'unidade' => 'mg/dL',
                'numexamelaboratorial' => '2'
            ],
            1 => [
                'faixaetaria' => 'INTOLERANCIA GLICOSE JEJUM',
                'intervalo1' => '100.00a125.00',
                'unidade' => 'mg/dL',
                'numexamelaboratorial' => '2'
            ],
            2 => [
                'faixaetaria' => 'DIABETES MELLITUS',
                'intervalo1' => '>126',
                'unidade' => 'mg/dL',
                'numexamelaboratorial' => '2'
            ]
        ];
    }
}
