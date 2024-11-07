<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Writer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat kategori secara manual
        $categoryID1 = Category::create([
            'namaKategori' => 'Interactive Multimedia'
        ]);

        $categoryID2 = Category::create([
            'namaKategori' => 'Software Engineering'
        ]);

        // Panggil seeder untuk Writer
        $this->call([
            WriterSeeder::class,
        ]);

        // Tetapkan data manual dan panggil DetailSeeder
        DetailSeeder::$manualData = [
            'materi' => 'Human and Computer Interaction',
            'category_id' => $categoryID1->id,
            'writer_id' => Writer::inRandomOrder()->first()->id,
        ];
        $this->call(DetailSeeder::class);

        DetailSeeder::$manualData = [
            'materi' => 'User Experience',
            'category_id' => $categoryID1->id,
            'writer_id' => Writer::inRandomOrder()->first()->id,
        ];
        $this->call(DetailSeeder::class);

        DetailSeeder::$manualData = [
            'materi' => 'User Experience for Digital Immersive Technology',
            'category_id' => $categoryID1->id,
            'writer_id' => Writer::inRandomOrder()->first()->id,
        ];
        $this->call(DetailSeeder::class);

        DetailSeeder::$manualData = [
            'materi' => 'Pattern Software Design',
            'category_id' => $categoryID2->id,
            'writer_id' => Writer::inRandomOrder()->first()->id,
        ];
        $this->call(DetailSeeder::class);

        DetailSeeder::$manualData = [
            'materi' => 'Agile Software Development',
            'category_id' => $categoryID2->id,
            'writer_id' => Writer::inRandomOrder()->first()->id,
        ];
        $this->call(DetailSeeder::class);

        DetailSeeder::$manualData = [
            'materi' => 'Code Reengineering',
            'category_id' => $categoryID2->id,
            'writer_id' => Writer::inRandomOrder()->first()->id,
        ];
        $this->call(DetailSeeder::class);
    }
}