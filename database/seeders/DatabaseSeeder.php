<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ville;
use App\Models\Article;
use App\Models\Client;
use App\Models\PieceIdentite;
use App\Models\StatutLocation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TypeArticleSeeder::class);
        $this->call(StatutLocationSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(DureLocationSeeder::class);
        PieceIdentite::factory(200)->create();
        Client::factory(200)->create();
        Ville::factory(50)->create();
        Article::factory(500)->create();
    }
}
