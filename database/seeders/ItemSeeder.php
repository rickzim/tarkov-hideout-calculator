<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'xxxx', 'type' => 'xxxx'],
        ])->each(fn ($item) => Item::create($item));
    }
}
