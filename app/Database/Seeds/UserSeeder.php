<?php

namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data1 = [
            'username' => 'ncip48',
            'password' => 'akuimuet',
            'email' => 'mbahcip00@gmail.com',
            'first_name' => 'Herly',
            'last_name' => 'Chahya',
            'photo_picture' => '',
            'address' => 'Jl Trunojoyo utara no 6 Ngawi'
        ];
        $data2 = [
            'username' => 'herlycp',
            'password' => 'akuimuet',
            'email' => 'herly.cp2@gmail.com',
            'first_name' => 'Herly',
            'last_name' => 'Putra',
            'photo_picture' => '',
            'address' => 'Jl Kembang desa no 10 Ngawi'
        ];
        $this->db->table('users')->insert($data1);
        $this->db->table('users')->insert($data2);
    }
}
