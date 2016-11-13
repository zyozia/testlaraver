<?php

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Shipper;

// php artisan db:seed
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
		// $this->call(UsersTableSeeder::class);
		$this->call(ShipperSeeder::class);
    }
}

class ShipperSeeder extends Seeder
{
	public function run()
	{
		DB::table('Shipper')->delete();
		Shipper::create([
			'article' => 'LLT',
			'city' => 'Львов',
			'phone' => '0638225500',
			'contactPerson' => 'Вася Пупкин',
			'site_url' => 'http://www.eway.in.ua/ua/cities/lviv/routes/230',
			'email' => 'vasya@mail.ru',
			'payment_method' => ',безнал',
			'access_into' => '3',
			'currency' => 'EUR',
			//'created' => date('Y-m-d H:i:s',time()),
			//'created' => DB::rav('NOW()'),
			//'created' => DB::rav('CURRENT_TIMESTAMP'),
			'name' => 'LLT ORM',
			'date_last_import' => NULL,
			'status' => 1
		]);
		Shipper::create([
			'article' => 'DDm',
			'city' => 'Львов',
			'phone' => '0678547565',
			'contactPerson' => 'Петросян Антон',
			'site_url' => 'http://laravel.io/',
			'email' => 'petz@i.ua',
			'payment_method' => ',нал',
			'access_into' => '3',
			'currency' => 'GRN',
			//'created' => date('Y-m-d H:i:s',time()),
//			'created' => DB::rav('NOW()'),
			//'created' => DB::rav('CURRENT_TIMESTAMP'),
			'name' => 'Daqmons QLF',
			'date_last_import' => NULL,
			'status' => 1
		]);
		Shipper::create([
			'article' => 'FGA',
			'city' => 'Львов',
			'phone' => '0665478965',
			'contactPerson' => 'Антон Воробєв',
			'site_url' => 'https://www.youtube.com/watch?v=K9CfAprHNQc&index=4&list=PLjvEG-kS6RG0JI-d9pHoE1vAS8xnfpxox',
			'email' => 'hor@gmail.com',
			'payment_method' => ',нал',
			'access_into' => '3',
			'currency' => 'USA',
			//'created_ad' => date('Y-m-d H:i:s',time()),
			//'created' => DB::rav('NOW()'),
			//'created' => DB::rav('CURRENT_TIMESTAMP'),
			'name' => 'Мобілочка',
			'date_last_import' => NULL,
			'status' => 1
		]);
	}
}