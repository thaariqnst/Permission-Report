<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class Kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = new \App\Models\Kelas;

        $kelas->major_id = "1";
        $kelas->class_name = "XI RPL A";
        $kelas->user_id = "1";

        $kelas->save();

    }
}
