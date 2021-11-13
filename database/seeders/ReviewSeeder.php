<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = [
            'isi' => 'barang ini bagus banget',
            'user_id' => rand(1, 10),
            'product_id' => rand(1, 10)
        ];
        Review::insert($review);
    }
}
