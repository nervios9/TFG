<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
class RolesSeeder extends Seeder
{

  public function run(): void{// Crear roles$role1 = Role::create(['name' => 'employee']);$role2 = Role::create(['name' => 'user']);


    
        // Crear usuarios y asignarles roles
        $user1 = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('aaaaaaaa'),
        ]);
        $user1->assignRole($role1);

       
    }
}
