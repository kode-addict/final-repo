<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory('App\User',10)->create();

        factory('App\Candidate',10)->create()->each(function($candidate){

                factory('App\Review', 2)->create([                                            
                                            'user_id'      => 1,
                                            'candidate_id' => $candidate->id,
                                            'content'      => 'lorem text text'
                                        ]);

        });

        Model::reguard();
    }
}
