<?php
    
    use Illuminate\Database\Seeder;
    
    class AuthorsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            
            $faker = Faker\Factory::create();
            DB::table('authors')->insert([
                'name' => $faker->firstName.' '.$faker->lastName
            ]);
        }
    }
