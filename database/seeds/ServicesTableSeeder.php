<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Service::create([
         'title'  => 'Grab',
         'description'  => 'Grab Description',
         'remarks'   =>    'Operating'
      ]);
      Service::create([
         'title'  => 'Catering',
         'description'  => 'Catering Description',
         'remarks'   =>    'Operating'
      ]);
      Service::create([
         'title'  => 'Transportation',
         'description'  => 'Tranpo Description',
         'remarks'   =>    'Hold'
      ]);
    }
}
