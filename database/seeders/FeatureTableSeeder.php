<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            'name'=> 'Model',
            'description'=> 'Represents a database table and handles data logic in Laravel.'
        ]);

        DB::table('features')->insert([
            'name'=> 'View',
            'description'=> 'Displays the user interface using Blade templates or plain PHP.'
        ]);

        DB::table('features')->insert([
            'name'=> 'Controller',
            'description'=> 'Manages application logic and connects models with views.'
        ]);

        DB::table('features')->insert([
            'name'=> 'Routes',
            'description'=> 'Define URL patterns and their corresponding controller actions.'
        ]);

        DB::table('features')->insert([
            'name'=> 'Middleware',
            'description'=> 'Filters HTTP requests before they reach controllers.'
        ]);

        DB::table('features')->insert([
            'name'=> 'Blade Templates',
            'description'=> 'A templating engine that simplifies dynamic content rendering.'
        ]);

        DB::table('features')->insert([
            'name'=> 'Migrations',
            'description'=> 'Manage database schema changes through version control.'
        ]);

        DB::table('features')->insert([
            'name'=> 'Seeders',
            'description'=> 'Populate the database with test or default data.'
        ]);

        DB::table('features')->insert([
            'name'=> 'Database',
            'description'=> 'Stores and organizes application data efficiently.'
        ]);

        DB::table('features')->insert([
            'name'=> 'Eloquent ORM',
            'description'=> 'Provides an elegant Active Record implementation for database operations.'
        ]);
    }
}
