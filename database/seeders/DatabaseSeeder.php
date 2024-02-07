<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


// Creating five users

        // \App\Models\User::factory(5)->create(); 

        // Listing::create([
       //     'title' => 'Laravel Senior Developer',
       //     'tags'  => 'Laravel, Javascript',
       //     'company' => 'Acme Corp',
      //      'location' => 'Boston, MA',
       //     'email' => 'email1@email.com',
       //     'website' => 'https://www.acme.com',
       //     'description' => 'The SDLC can be said to be a process used in the software industry to design, develop and test high-quality software. The SDLC aims to provide a high quality that satisfies its customers or even exceeds their expectations and completes the projects on time and with the exact cost estimations. The SDLC consists of brief planning on how to develop, maintain, replace and change or enhance specific software. '
      //   ]);
         
      //   Listing::create([
      //      'title' => 'FullStack Senior Developer',
      //      'tags'  => 'PHP, Python Javascript',
      //      'company' => 'Acme Corp',
       //     'location' => 'Carrington, CA',
      //      'email' => 'email2@email.com',
       //     'website' => 'https://www.acme.com',
      //      'description' => 'The SDLC can be said to be a process used in the software industry to design, develop and test high-quality software. The SDLC aims to provide a high quality that satisfies its customers or even exceeds their expectations and completes the projects on time and with the exact cost estimations. The SDLC consists of brief planning on how to develop, maintain, replace and change or enhance specific software. '
     //    ]);


         $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
         ]);

         Listing::factory(6)->create([           // creating 6 fake listings
            'user_id' => $user->id
         ]);    
        
    }
}
