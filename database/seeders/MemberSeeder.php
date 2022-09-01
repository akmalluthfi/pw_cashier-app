<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            'Akmal Luthfi',
            'Admin',
            'root'
        ];

        foreach ($members as $member) {
            Member::create([
                'name' => $member,
                'username' => $this->generateUsername($member),
                'email' => $this->generateEmail($this->generateUsername($member)),
                'password' => Hash::make($this->generateUsername($member)),
            ]);
        }
    }

    public function generateUsername($name)
    {
        return strtolower(str_replace(' ', '', $name));
    }

    public function generateEmail($name)
    {
        return $name . '@gmail.com';
    }
}
