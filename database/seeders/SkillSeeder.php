<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Stamina'],
            ['name' => 'Strength'],
        ])->each(fn ($item) => Skill::create($item));
    }
}
