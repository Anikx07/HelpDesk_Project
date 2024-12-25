<?php

namespace Database\Seeders;

use App\Models\ProblemCategory;
use Illuminate\Database\Seeder;

class ProblemCategoryMigration extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProblemCategory::insert([
            [
                'unit_id' => 1,
                'name' => 'Problem One at Hardware Department',
            ],
            [
                'unit_id' => 1,
                'name' => 'Problem Two at Hardware Department',
            ],
            [
                'unit_id' => 2,
                'name' => 'Problem One at Software Department',
            ],
            [
                'unit_id' => 2,
                'name' => 'Problem Two at Software Department',
            ],
            [
                'unit_id' => 3,
                'name' => 'Problem One at Billing Support',
            ],
            [
                'unit_id' => 3,
                'name' => 'Problem Two at Billing Support',
            ],
            [
                'unit_id' => 3,
                'name' => 'Problem three at Billing Support',
            ],
        ]);
    }
}
