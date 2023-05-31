<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PermitLetter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $letter = new \App\Models\PermitLetter;

        $letter->user_id = "1";
        $letter->class_id = "1";
        $letter->permission_type = "health";
        $letter->desc = "blablabla hello test";
        $letter->proof = "IMAGE";
        $letter->start_date = date('2023-05-20');
        $letter->end_date = date('2023-05-25');
        $letter->pic_name = "Jaber";
        $letter->status = "submitted";

        $letter->save();
    }
}
