<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\technology;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'Epic Games'
            ],
            [
                'name' => 'Activision'
            ],
        ];

        foreach ($technologies as $technology) {
            $newType = new technology();
            $newType->fill($technology);
            $newType->save();
        }
    }
}
