<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::updateOrcreate([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('password'),
        //     'role_id' => 1,
        // ]);

        // User::updateOrcreate([
        //     'name' => 'DSP',
        //     'email' => 'dsp@example.com',
        //     'password' => Hash::make('password'),
        //     'role_id' => 2,
        // ]);

        // User::create([
        //     'name' => 'Ogagun',
        //     'email' => 'bluespectraltd@gmail.com',
        //     'password' => Hash::make('0123456789'),
        //     'role_id' => 1,
        // ]);

        // User::create([
        //     'name' => 'Fortunatus Adegoke',
        //     'email' => 'fortunatusadegoke@gmail.com',
        //     'password' => Hash::make('0123456789'),
        //     'role_id' => 1,
        // ]);
        // User::create([
        //     'name' => 'Emmanuel Odumusi',
        //     'email' => 'dabrandcity@gmail.com',
        //     'password' => Hash::make('0123456789'),
        //     'role_id' => 1,
        // ]);
        // User::create([
        //     'name' => 'ECO CONSULT',
        //     'email' => 'dma-admin-access@kaikai.dev',
        //     'password' => Hash::make('0123456789'),
        //     'role_id' => 1,
        // ]);
        // User::create([
        //     'name' => 'Jack McDonald',
        //     'email' => 'mjack@smedan.gov.ng',
        //     'password' => Hash::make('0123456789'),
        //     'role_id' => 1,
        // ]);
        // User::create([
        //     'name' => 'Ajakore Temitayo',
        //     'email' => 'temitayo.ajakore@giz.de',
        //     'password' => Hash::make('0123456789'),
        //     'role_id' => 1,
        // ]);


        $users = [
            [
                "name" => "Chioma Ifeanyi-Eze",
                "email" => "Chioma@accountinghub.ng",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Idafibia, Joyce Umeneowaji",
                "email" => "idafibiajoycee@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Abimbola Badejo",
                "email" => "abimbolabadejo9@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Emmanuel Alafiatayo",
                "email" => "emmanuelalafiatayo.ea@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Ahmad Saidu Umar",
                "email" => "Ahmadswifty@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Joy Chinyere Nwaiwu",
                "email" => "joygina53@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Ibrahim Abdulsalam Olasunkanmi",
                "email" => "ibrahimabdulsalam071@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Amir Mohammed",
                "email" => "amirmohammed009@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Cedric-Abraham Onuh",
                "email" => "cedricabrahamonline@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Adanma Chinyere Otuonye",
                "email" => "chinyere@chinyereotuonye.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Blessing, O. Edward",
                "email" => "ofahblessing@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Ladidi Abdulmumin",
                "email" => "abdulmuminladidi@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Faith Desmond-Omorogbe",
                "email" => "contact.faithdesmond@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Ahmad Muhammad Ahmad",
                "email" => "amahmad.it@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Fadhila Nuruddeen Muhammad",
                "email" => "fadhilamuhd@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Felix Ogbuji",
                "email" => "phelitzville@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Dr Funke Medun",
                "email" => "funke.medun@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Odinakachi Augustine Nwafor",
                "email" => "odinakachinwafor@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Adanna Emmanuela Ononiwu",
                "email" => "adanna.ononiwu@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Olusegun Ekundayo",
                "email" => "ekundayoolusegun1@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "John Olawole Martins",
                "email" => "olawole_martins@yahoo.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Caleb Olatujayan",
                "email" => "breshcaleb@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Kehinde Idris Atanda",
                "email" => "idris.kehinde@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "STANLEY MUONEKE",
                "email" => "stanley@tippinpt.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Aaron Adetide Adeola",
                "email" => "livingstoneaaron41@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Hafeez Adegboyega Ajibade",
                "email" => "ajibade.hafeez@netbaseng.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Hussaini",
                "email" => "hssofficially@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Kehinde Adewale Ademola",
                "email" => "kehindeadewale78@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Awashima Atu",
                "email" => "awashimaatu2019@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Tolulope Adegbemile",
                "email" => "adegbemiletolu@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Chika Nwanosike",
                "email" => "nwanosikechika@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Bolu Onifade",
                "email" => "bolu.onifade@protonmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Bonaventure Nwaefulu",
                "email" => "bonyeluvic@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Nana Yaa Serwaa Sarpong",
                "email" => "nanayaaserwaa@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Precious Nzubechi",
                "email" => "preciousnzubechi@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Peter Akagbosu",
                "email" => "peterakagbosu@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Adeyemi Olumide",
                "email" => "adeyemiolumide999@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Okonkwor Chinenye",
                "email" => "chinenyeokonkwor@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Amaka Ifeoma",
                "email" => "amakaifeoma@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Adedayo Ogunlade",
                "email" => "adedayoo@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Samuel Adebayo",
                "email" => "samueladebayo@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Gloria Uche",
                "email" => "gloriauche@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Victor Eze",
                "email" => "victoreze@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Ngozi Chukwu",
                "email" => "ngozichukwu@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Michael Adekunle",
                "email" => "michaeladekunle@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Esther Abiola",
                "email" => "estherabiola@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Collins Obi",
                "email" => "collinsobi@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ],
            [
                "name" => "Kemi Adeyeye",
                "email" => "kemiadeyeye@gmail.com",
                "password" => "@DMAP@ss25",
                "role_id" => 3
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
