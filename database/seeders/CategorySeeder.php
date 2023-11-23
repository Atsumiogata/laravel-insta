<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name'         => 'Travel',
                'created_at'   => Now(),
                'Updated_at'   => now()
            ],
            [
                'name'         => 'Food',
                'created_at'   => Now(),
                'Updated_at'   => now()
            ],
            [
                'name'         => 'Lifrstyle',
                'created_at'   => Now(),
                'Updated_at'   => now()
            ],
            [
                'name'         => 'Music',
                'created_at'   => Now(),
                'Updated_at'   => now()
            ],
            [
                'name'         => 'Carrer',
                'created_at'   => Now(),
                'Updated_at'   => now()
            ],
            [
                'name'         => 'Movie',
                'created_at'   => Now(),
                'Updated_at'   => now()
            ],
        ];

        $this->category->insert($categories);
    }
}
