<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Album;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$users = User::all();
		
		foreach ($users as $user)
		{
                
            $number = mt_rand(0,10);
                
            for ($i=0; $i < $number; $i++)
			{
				Album::create
                (
                            [
                                            'title' => "Title album $i",
					                        'description' => "Description album $i of $user->id",
					                        'user_id' => $user->id,
					                        
                            ]                
                );
            }
        }
		
    }
}
