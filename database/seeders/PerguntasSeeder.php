<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar perguntas de exemplo
        Pergunta::create([
            'texto' => 'Qual é a competição de seleções mais importante do mundo?',
            'opcao_a' => 'Copa do Mundo',
            'opcao_b' => 'Copa America',
            'opcao_c' => 'Eurocopa',
            'opcao_d' => 'Copa da Asia',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual clube venceu a Liga dos Campeões da UEFA em 22/23?',
            'opcao_a' => 'Liverpool',
            'opcao_b' => 'Bayern de Munique',
            'opcao_c' => 'Real Madrid',
            'opcao_d' => 'Machester City',
            'resposta_correta' => 'D',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual seleção venceu a Copa do Mundo de 2018?',
            'opcao_a' => 'Brasil',
            'opcao_b' => 'França',
            'opcao_c' => 'Alemanha',
            'opcao_d' => 'Argentina',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual clube tem mais títulos da Liga dos Campeões da UEFA?',
            'opcao_a' => 'Milan',
            'opcao_b' => 'Barcelona',
            'opcao_c' => 'Real Madrid',
            'opcao_d' => 'Chelsea',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em que ano foi realizada a primeira Copa do Mundo?',
            'opcao_a' => '1929',
            'opcao_b' => '1930',
            'opcao_c' => '1950',
            'opcao_d' => '1960',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);


    }
}
