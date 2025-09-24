<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Publisher::all()->each(function($publisher){
            Gallery::factory(1)->create([
                'publisher_id' => $publisher->id,
            ]);
        });
    }
}
