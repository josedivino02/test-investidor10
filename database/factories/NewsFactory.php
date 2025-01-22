<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{

    public function definition()
    {
        $title = $this->faker->jobTitle();

        return [
            "title"             => $title,
            "subtitle"          => "subtitle",
            "slug"              => Str::slug($title),
            "content"           => implode("\n\n", $this->faker->paragraphs(3)),
            "category_id"       => rand(1, 10),
            "date_published"    => date("Y-m-d H:i:s"),
            "status"            => "published",
        ];
    }
}