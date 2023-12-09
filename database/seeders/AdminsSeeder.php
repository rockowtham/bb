<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $password = Hash::make('admin@123');
        $adminRecords = [
            ['id' => 5, 'name'=> 'Admin', 'type'=>'admin', 'mobile' => 9003808839,'email' => 'admin4@admin.com', 'password' => $password, 'image' => '', 'status' => 1],
            ['id' => 2, 'name'=> 'Admin', 'type'=>'admin', 'mobile' => 9003808839,'email' => 'admin1@admin.com', 'password' => $password, 'image' => '', 'status' => 1],
            ['id' => 3, 'name'=> 'Admin', 'type'=>'admin', 'mobile' => 9003808839,'email' => 'admin2@admin.com', 'password' => $password, 'image' => '', 'status' => 1],
            ['id' => 4, 'name'=> 'Admin', 'type'=>'admin', 'mobile' => 9003808839,'email' => 'admin3@admin.com', 'password' => $password, 'image' => '', 'status' => 1]
        ];
        Admin::insert($adminRecords);
    }
}
