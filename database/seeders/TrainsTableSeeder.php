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
        
        $trains=[
            $office = ['freccia rossa', 'freccia blu', 'freccia gialla', 'freccia fucsia'],
            $stazione_di_partenza=['A','B','C','D'],
            $stazione_di_arrivo=['E','F','G','H'],
            $orario_di_partenza=['21.00','22:00','21:00','23:00'],
            $orario_di_arrivo=['00:00','01:00','00:00','02:00'],
            $codice_treno=['1-2-3-4','5-6-7-8','9-10-11-12','13-14-15-16-'],
            $numero_carrozze=['5','4','3','2'],
            $in_orario=[true,false,false,true],
            $cancellato=[false,true,true,false]
        ];
        foreach ($trains as $train) {
            $newTrain = new Train(); 
            $newTrain->office = $train['office'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno '];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            
            $newTrain->save();
         }
            
            
            

       
    }
}
