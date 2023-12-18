<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelPessoa;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelPessoa $pessoa): void
    {
        $pessoa->create([
            'nome'=>'Luciana Morais',
            'data_nasc'=>'2023-01-01',
            'cpf'=>'99988877766',
            'sexo'=>'feminino',
            'cidade'=>'Canoas'
        ]);

        $pessoa->create([
            'nome'=>'Carlos Antônio da Silva ',
            'data_nasc'=>'1960-01-01',
            'cpf'=>'99999999977',
            'sexo'=>'masculino',
            'cidade'=>'Porto Alegre'
        ]);

        $pessoa->create([
            'nome'=>'Leonardo Ribeiro',
            'data_nasc'=>'1996-01-01',
            'cpf'=>'00011229987',
            'sexo'=>'masculino',
            'cidade'=>'Novo Hamburgo'
        ]);

        $pessoa->create([
            'nome'=>'Cristina da Silveira',
            'data_nasc'=>'2002-01-01',
            'cpf'=>'01235678910',
            'sexo'=>'feminino',
            'cidade'=>'São Leopoldo'
        ]);

        $pessoa->create([
            'nome'=>'Victória Fagundes',
            'data_nasc'=>'2000-01-01',
            'cpf'=>'01235678955',
            'sexo'=>'feminino',
            'cidade'=>'Sapucaia do Sul'
        ]);

        $pessoa->create([
            'nome'=>'Maria Cesar da Silva',
            'data_nasc'=>'1994-01-01',
            'cpf'=>'01235674444',
            'sexo'=>'feminino',
            'cidade'=>'Sapucaia do Sul'
        ]);
    }
}
