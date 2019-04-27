<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Company::class, 50)->create()->each(function ($company) {
            $company->posts()->save(factory(App\Post::class)->make());
        });
    }
}
