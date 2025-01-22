<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition()
    {
        $name = $this->faker->randomElement([
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

        return [
            "name"          => $name,
            "slug"          => Str::slug($name),
            "description"   => $this->faker->paragraphs(3, true)
        ];
    }
}