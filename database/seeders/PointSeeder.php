<?php

namespace Database\Seeders;

use App\Models\ReferralPoint;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 10; $i >= 1; $i--) {
            ReferralPoint::create([
                'points' => $i
            ]);
        }
    }
}
