<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permit = new \App\Models\User;
        $permit->name = "admin";
        $permit->username = "admin";
        $permit->email = "admin@email.com";
        $permit->password = bcrypt("asdasdasd");
        $permit->level = "admin";

        $permit->save();
    }
}
