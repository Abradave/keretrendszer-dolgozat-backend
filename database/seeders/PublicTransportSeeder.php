<?php

namespace Database\Seeders;

use App\Models\PublicTransport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicTransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PublicTransport::factory(10)->create();
    }
}
