<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'silvi', 
            'useremail' => 'silvi@email.com', 
            'userpassword' => password_hash('silvi123', PASSWORD_DEFAULT),
        ]);
    }
}
