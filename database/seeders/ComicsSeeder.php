<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $tab = new Comic();
            $tab->title = $comic['title'];
            $tab->description = $comic['description'];
            $tab->thumb = $comic['thumb'];
            $tab->price = $comic['price'];
            $tab->series = $comic['series'];
            $tab->sale_date = $comic['sale_date'];
            $tab->type = $comic['type'];
            $tab->save();
        }
    }
}
