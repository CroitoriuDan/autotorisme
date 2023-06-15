<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(15)->create([
            'user_id' => $user->id
        ]);

        /*\App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
            /*'email_verified_at'=>'random',
            'password'=>bcrypt('alabalarandom'),
            'remember_token'=>'random',
            'updated_at'=>date('Y-m-d H:i:s'),
            'created_at'=>date('Y-m-d H:i:s')
        ]);*/
    }
}
