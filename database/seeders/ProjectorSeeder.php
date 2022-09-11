<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projector;

class ProjectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projector::create([

            "name" => "Allianz",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo odio a condimentum finibus. Quisque diam diam, tempus et massa at, egestas auctor velit. Integer et mauris ipsum. Donec lobortis sem nisl, eu imperdiet risus finibus quis. Quisque est justo, tempus id lectus non, lobortis hendrerit magna. In ut tempus lorem. Cras dolor dui, fringilla a lacus non, elementum luctus lorem. Ut laoreet sed metus eget convallis. Integer orci dolor, feugiat ac dolor ac, porttitor mollis ante. Nam sodales pretium enim, ut commodo urna viverra vitae.",
            "cover" => "p1-2.jpg"
            
        ]);

        Projector::create([

            "name" => "Oscar Plaza",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo odio a condimentum finibus. Quisque diam diam, tempus et massa at, egestas auctor velit. Integer et mauris ipsum. Donec lobortis sem nisl, eu imperdiet risus finibus quis. Quisque est justo, tempus id lectus non, lobortis hendrerit magna. In ut tempus lorem. Cras dolor dui, fringilla a lacus non, elementum luctus lorem. Ut laoreet sed metus eget convallis. Integer orci dolor, feugiat ac dolor ac, porttitor mollis ante. Nam sodales pretium enim, ut commodo urna viverra vitae.",
            "cover" => "P2-2.jpg"
            
        ]);

        Projector::create([

            "name" => "Cairo Tower Islamic",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo odio a condimentum finibus. Quisque diam diam, tempus et massa at, egestas auctor velit. Integer et mauris ipsum. Donec lobortis sem nisl, eu imperdiet risus finibus quis. Quisque est justo, tempus id lectus non, lobortis hendrerit magna. In ut tempus lorem. Cras dolor dui, fringilla a lacus non, elementum luctus lorem. Ut laoreet sed metus eget convallis. Integer orci dolor, feugiat ac dolor ac, porttitor mollis ante. Nam sodales pretium enim, ut commodo urna viverra vitae.",
            "cover" => "P3-1.jpg"
            
        ]);

        // Projector::create([

        //     "name" => "Cairo Christmas nights",
        //     "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo odio a condimentum finibus. Quisque diam diam, tempus et massa at, egestas auctor velit. Integer et mauris ipsum. Donec lobortis sem nisl, eu imperdiet risus finibus quis. Quisque est justo, tempus id lectus non, lobortis hendrerit magna. In ut tempus lorem. Cras dolor dui, fringilla a lacus non, elementum luctus lorem. Ut laoreet sed metus eget convallis. Integer orci dolor, feugiat ac dolor ac, porttitor mollis ante. Nam sodales pretium enim, ut commodo urna viverra vitae.",
        //     "cover" => "P4.jpg"
            
        // ]);

        Projector::create([

            "name" => "Cairo Tower CAF",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo odio a condimentum finibus. Quisque diam diam, tempus et massa at, egestas auctor velit. Integer et mauris ipsum. Donec lobortis sem nisl, eu imperdiet risus finibus quis. Quisque est justo, tempus id lectus non, lobortis hendrerit magna. In ut tempus lorem. Cras dolor dui, fringilla a lacus non, elementum luctus lorem. Ut laoreet sed metus eget convallis. Integer orci dolor, feugiat ac dolor ac, porttitor mollis ante. Nam sodales pretium enim, ut commodo urna viverra vitae.",
            "cover" => "P5-8.jpg"
            
        ]);
    }
}
