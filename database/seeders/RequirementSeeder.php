<?php

namespace Database\Seeders;

use App\Models\Requirement;
use Illuminate\Database\Seeder;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'upgrade_id' => 1,
                'requirementable_type' => 'App\\Models\\Item',
                'requirementable_id' => 1,
                'required_amount' => 5,
            ],
            [
                'upgrade_id' => 1,
                'requirementable_type' => 'App\\Models\\Trader',
                'requirementable_id' => 1,
                'required_amount' => 2,
            ],
            [
                'upgrade_id' => 1,
                'requirementable_type' => 'App\\Models\\Item',
                'requirementable_id' => 2,
                'required_amount' => 10,
            ],

            [
                'upgrade_id' => 2,
                'requirementable_type' => 'App\\Models\\Trader',
                'requirementable_id' => 2,
                'required_amount' => 3,
            ],
            [
                'upgrade_id' => 2,
                'requirementable_type' => 'App\\Models\\Item',
                'requirementable_id' => 1,
                'required_amount' => 6,
            ],
            [
                'upgrade_id' => 2,
                'requirementable_type' => 'App\\Models\\Trader',
                'requirementable_id' => 1,
                'required_amount' => 5,
            ],
            [
                'upgrade_id' => 2,
                'requirementable_type' => 'App\\Models\\Item',
                'requirementable_id' => 2,
                'required_amount' => 4,
            ],
            [
                'upgrade_id' => 2,
                'requirementable_type' => 'App\\Models\\Skill',
                'requirementable_id' => 2,
                'required_amount' => 2,
            ],

            [
                'upgrade_id' => 3,
                'requirementable_type' => 'App\\Models\\Skill',
                'requirementable_id' => 2,
                'required_amount' => 2,
            ],
            [
                'upgrade_id' => 3,
                'requirementable_type' => 'App\\Models\\Module',
                'requirementable_id' => 2,
                'required_amount' => 2,
            ],
        ])->each(fn ($item) => Requirement::create($item));
    }
}
