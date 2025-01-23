<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
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
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
                'description' => "description",
            ]);
        }
    }
}
