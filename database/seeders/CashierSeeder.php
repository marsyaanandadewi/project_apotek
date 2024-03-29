<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class CashierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void 
    {
        User::create([
            'name' => 'Cashier',
            'email' => 'apotek_cashier@gmail.com',
            'password' => Hash::make('cashierapotek'),
            'role' => 'cashier',
        ]);
    }
}
