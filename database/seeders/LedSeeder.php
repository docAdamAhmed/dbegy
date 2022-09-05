<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Led;

class LedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Led::create([

            "name" => "Point 90",
            "description" => "In celebration of Christmas and the new
            year, we worked on Point 90’s decoration
            using aesthetic lighting in different colors
            that complemented the occasion. Giving
            a festive feel throughout the mall’s
            entrances, interior and exterior.",
            "cover" => "L1-7.jpg"
            
        ]);

        Led::create([

            "name" => "Cairo Tower",
            "description" => "Lighting up the way leading to Cairo’s most
            prominent landmark. Using aesthetic lighting
            in complimenting colors, we created a colorful
            walkway that led to the tower. Allowing
            visitors to experience an amazing spectacle of
            lights at every step all the way to the tower.",
            "cover" => "L2-2.jpg"
            
        ]);

        Led::create([

            "name" => "ALLIANZ",
            "description" => "Using projection we created a truly festive feel to the
            Allianz building in celebration of Christmas and the
            New Year.",
            "cover" => "L3-2.jpg"
            
        ]);

        Led::create([

            "name" => "Capital Business Park", 
            "description" => "Lighting up open spaces with festive aesthetic
            lighting transform it’s vibes and this is how we did it,
            we lit Capital Business Park’s walkway for the
            holiday season.",
            "cover" => "L4-3.jpg"
            
        ]);

        Led::create([

            "name" => "Downtown Cairo",
            "description" => "Because even heritage sometimes requires some
            light for the special occasions, we lit up downtown
            Cairo for New Year’s celebrations attempting to
            compliment its historic beauty.",
            "cover" => "L5-3.jpg"
            
        ]);

        Led::create([

            "name" => "American University in Cairo",
            "description" => "In celebration of their centennial we created
            installations around the American University in Cairo’s
            campus.",
            "cover" => "L6-1.jpg"
            
        ]);

    }
}
