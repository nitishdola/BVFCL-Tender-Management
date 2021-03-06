<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(['username' => 'admin', 'password' => bcrypt('bvfclAdmin#')]);

        $this->command->info('Admin Added !');
    }
}
