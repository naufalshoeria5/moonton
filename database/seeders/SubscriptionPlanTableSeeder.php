<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Seeder;

class SubscriptionPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptionPlan = [
            [
                'name'                      => 'Basic',
                'price'                     => 200000,
                'active_period_in_months'   => 3,
                'features'                  => json_encode(['features1', 'features2'])
            ],
            [
                'name'                      => 'Premium',
                'price'                     => 500000,
                'active_period_in_months'   => 8,
                'features'                  => json_encode(['features1', 'features2', 'features3', 'features4'])
            ]
        ];

        SubscriptionPlan::insert($subscriptionPlan);
    }
}
