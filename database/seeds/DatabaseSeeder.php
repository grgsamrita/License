<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Detail;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	
    

	public function run()
	{
		

		//$this->call('UserTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('VoucherTableSeeder');

        $this->command->info('User table seeded!');
		
	}

}

