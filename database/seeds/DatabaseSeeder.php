<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Album;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		
        
		User::truncate();
		Album::truncate();
        
		$this->call('UserTableSeeder');
		$this->call('AlbumTableSeeder');
    }
}
