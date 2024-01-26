<?php

namespace Database\Seeders;

use App\Models\Trader;
use Illuminate\Database\Seeder;

class TraderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Therapist'],
            ['name' => 'Skier'],
        ])->each(fn ($item) => Trader::create($item));
    }
}
