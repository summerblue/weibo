<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        Status::factory()->count(100)->create();
    }
}
