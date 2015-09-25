<?php

use App\Candidate;
use App\CandidateReview;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $tables = [
        'users',
        'candidates',
        'candidate_reviews'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanDatabase();
        
        Model::unguard();

        factory('App\User',10)->create();
        factory('App\Candidate', 10)->create();
        factory('App\CandidateReview', 20)->create();

        // factory('App\Candidate',10)->create()->each(function($candidate) use ($faker){

        //         factory('App\Review', 2)->create([                                            
        //                                     'user_id'      => 1,
        //                                     'candidate_id' => $candidate->id,
        //                                     'review'      => $faker->paragraph
        //                                 ]);

        // });


        Model::reguard();
    }

    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table)
        {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
