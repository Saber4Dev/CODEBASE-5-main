<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Fake Company',
            'contact_person' => 'John Doe',
            'email' => 'contact@example.com',
            'phone' => '123-456-7890',
            'address' => '123 Main St',
            'city' => 'Cityville',
            'state_province' => 'State',
            'country' => 'Country',
            'postal_code' => '12345',
            'website' => 'https://www.example.com',
            'industry' => 'Technology',
            'status' => 'active',
            'creation_date' => Carbon::now(),
            'notes' => 'This is a fake client for testing purposes.',
            'logo' => 'logo.png',
            'created_by' => 2,
            // Replace with the ID of the user who created this client
            'company' => 'Fake Industries',
            // New column
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}