<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ProfileUsers;
use App\Models\Timeline;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create admin
        User::create([
            'name' => 'Iam Admin',
            'password' => Hash::make('12345678'),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Administrator',
            'created_at' => now()
        ]);
        ProfileUsers::create([
            'user_id' => 1,
            'nama' => 'Iam Admin',
            'email' => 'admin@gmail.com',
            'created_at' => now()
        ]);
        Timeline::create([
            'user_id' => 1,
            'status' => "Bergabung",
            'pesan' => 'Membuat Akun baru',
            'tgl_update' => now(),
            'created_at' => now()
        ]);
        //create admin 2
        User::create([
            'name' => 'Iam Admin 2',
            'password' => Hash::make('12345678'),
            'email' => 'admin2@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Administrator',
            'created_at' => now()
        ]);
        ProfileUsers::create([
            'user_id' => 2,
            'nama' => 'Iam Admin',
            'email' => 'admin@gmail.com',
            'created_at' => now()
        ]);
        Timeline::create([
            'user_id' => 2,
            'status' => "Bergabung",
            'pesan' => 'Membuat Akun baru',
            'tgl_update' => now(),
            'created_at' => now()
        ]);

        User::create([
            'name' => 'Iam User',
            'password' => Hash::make('12345678'),
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Calon Peserta',
            'created_at' => now()
        ]);

        ProfileUsers::create([
            'user_id' => 3,
            'nama' => 'Iam User',
            'email' => 'user@gmail.com',
            'created_at' => now()
        ]);
        Timeline::create([
            'user_id' => 3,
            'status' => "Bergabung",
            'pesan' => 'Membuat Akun baru',
            'tgl_update' => now(),
            'created_at' => now()
        ]);

        User::create([
            'name' => 'Abii Hutabarat',
            'password' => Hash::make('12345678'),
            'email' => 'abiihutabarat29@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Calon Peserta',
            'created_at' => now()
        ]);

        ProfileUsers::create([
            'user_id' => 4,
            'nama' => 'Abii Hutabarat',
            'email' => 'abiihutabarat29@gmail.com',
            'created_at' => now()
        ]);
        Timeline::create([
            'user_id' => 4,
            'status' => "Bergabung",
            'pesan' => 'Membuat Akun baru',
            'tgl_update' => now(),
            'created_at' => now()
        ]);

        User::create([
            'name' => 'Jasmine Mutiara Bintang',
            'password' => Hash::make('12345678'),
            'email' => 'jasminemutiara@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Calon Peserta',
            'created_at' => now()
        ]);

        ProfileUsers::create([
            'user_id' => 5,
            'nama' => 'Jasmine Mutiara Bintang',
            'email' => 'jasminemutiara@gmail.com',
            'created_at' => now()
        ]);
        Timeline::create([
            'user_id' => 5,
            'status' => "Bergabung",
            'pesan' => 'Membuat Akun baru',
            'tgl_update' => now(),
            'created_at' => now()
        ]);
    }
}
