<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition()
    {
        $names = $this->faker->shuffle([
            'Tecnologia',
            'Saúde e Bem-estar',
            'Educação',
            'Negócios',
            'Culinária',
            'Esportes',
            'Entretenimento',
            'Viagens',
            'Moda e Beleza',
            'Ciência e Inovação',
        ]);

        $name = array_pop($names);

        return [
            "name"          => $name,
            "slug"          => Str::slug($name),
            "description"   => $this->faker->jobTitle()
        ];
    }
}