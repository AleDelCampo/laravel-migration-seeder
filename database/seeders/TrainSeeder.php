<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        foreach (range(1, 10) as $index) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->time('H:i'),
                'orario_arrivo' => $faker->time('H:i'),
                'codice_treno' => $faker->ean13,
                'numero_carrozze' => $faker->numberBetween(5, 12),
                'in_orario' => $faker->boolean(80),
                'cancellato' => $faker->boolean(10),
                'immagine' => 'https://www.acgroupitalia.com/media/k2/items/cache/f710044bf79a4b1f5d8b085e5e5d9711_XL.jpg',
            ]);
        }
    }
}