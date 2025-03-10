<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            ['name' => 'ABC Corporation'],
            ['name' => 'Tech Solutions Ltd'],
            ['name' => 'Digital Innovations'],
            ['name' => 'Global Systems Inc'],
            ['name' => 'Smart Solutions'],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
