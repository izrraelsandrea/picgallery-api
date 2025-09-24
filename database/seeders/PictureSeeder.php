<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Gallery::all()->each(function ($gallery){
            Picture::factory(4)->create([
                'gallery_id' => $gallery->id,
            ]);
        });
    }
}
