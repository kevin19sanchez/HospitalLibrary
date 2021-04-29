<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = new Rol;
        $roles->name = "Supervisor";
        $roles->save();
        $roles = new Rol;
        $roles->name = "Usuario";
        $roles->save();
    }
}
