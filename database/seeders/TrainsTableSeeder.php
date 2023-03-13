<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use PhpParser\Node\Expr\New_;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train= new Train();
        $train->{
            $office->{
                'freccia rossa';
                'freccia blue';
                'freccia gialla';
                'freccia fucsia'
            },
            $stazione_di_partenza={
                'A';
                'B';
                'C';
                'D';
            };
            $stazione_di_arrivo={
                'E';
                'F';
                'G';
                'H';
            }
        }

       $train->save();
    }
}
