<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = new User();
        $user->name = "JUAN FIGUEROA";
        $user->email = "juanfigueroa@prueba.com";
        $user->password = bcrypt('admin');
        $user->save();
    }
}
