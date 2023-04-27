<?php

namespace Database\Seeders;

use App\Models\header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        header::create([
            'site_name' => 'PT. GRESIK MIGAS',
            'tag_line' => 'Your Lightning Fast Delivery Partner',
            'description' => 'Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit',
            'path_logo' => 'PATH'
        ]);
    }
}