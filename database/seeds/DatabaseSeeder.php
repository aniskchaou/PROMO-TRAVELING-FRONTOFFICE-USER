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
        $this->call(BlogSeeder::class);
         $this->call(DestinationSeeder::class);
          $this->call(HotelSeeder::class);
           $this->call(OfferSeeder::class);
            $this->call(PackageSeeder::class);
             $this->call(ServiceSeeder::class);
             // $this->call(SliderSeeder::class);
               $this->call(SubscriberSeeder::class);
                $this->call(TestimonialsSeeder::class);
                 $this->call(TravelBookingSeeder::class);
                  $this->call(TravellerSeeder::class);
                  $this->call(UserSeeder::class);

    }
}
