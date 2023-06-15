<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'username'=>'admin',
               'email'=>'admin@cambotutorial.com',
               'role'=> 0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Mike Pitao',
               'username'=>'darab',
               'email'=>'darab@cambotutorial.com',
               'role'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'John Doe',
               'username'=>'legal',
               'email'=>'legal@cambotutorial.com',
               'role'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Dawn Gatal',
                'username'=>'records',
                'email'=>'records@cambotutorial.com',
                'role'=> 3,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Anne Hathaway',
                'username'=>'personnel',
                'email'=>'personnel@cambotutorial.com',
                'role'=> 4,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Kenneth San',
                'username'=>'planning',
                'email'=>'planning@cambotutorial.com',
                'role'=> 5,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Wilhelm Pitao',
                'username'=>'gsu',
                'email'=>'gsu@cambotutorial.com',
                'role'=> 6,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Peter Pan',
                'username'=>'cashering',
                'email'=>'cashering@cambotutorial.com',
                'role'=> 7,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Mary Lean ',
                'username'=>'budget',
                'email'=>'budget@cambotutorial.com',
                'role'=> 8,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Van Goh',
                'username'=>'accounting',
                'email'=>'accounting@cambotutorial.com',
                'role'=> 9,
                'password'=> bcrypt('123456'),
             ],
            
        ];
    
        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }
}
