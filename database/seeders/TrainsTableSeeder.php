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
            [
                'office'=>'freccia rossa',
                'stazione_di_partenza'=>'A',
                'stazione_di_arrivo'=>'E',
                'orario_di_partenza'=>'21:00',
                'orario_di_arrivo'=>'00:00',
                'codice_treno'=>'1-2-3-4',
                'numero_carrozze'=>'5',
                'in_orario'=>true,
                'cancellato'=>false
            ],
            [
                'office'=>'freccia blue',
                'stazione_di_partenza'=>'B',
                'stazione_di_arrivo'=>'F',
                'orario_di_partenza'=>'22:00',
                'orario_di_arrivo'=>'01:00',
                'codice_treno'=>'5-6-7-8',
                'numero_carrozze'=>'4',
                'in_orario'=>false,
                'cancellato'=>true
            ],
            [
                'office'=>'freccia gialla',
                'stazione_di_partenza'=>'C',
                'stazione_di_arrivo'=>'G',
                'orario_di_partenza'=>'21:00',
                'orario_di_arrivo'=>'00:00',
                'codice_treno'=>'9-10-11-12',
                'numero_carrozze'=>'2',
                'in_orario'=>false,
                'cancellato'=>true
            ],
            [
                'office'=>'freccia fucsia',
                'stazione_di_partenza'=>'D',
                'stazione_di_arrivo'=>'H',
                'orario_di_partenza'=>'23:00',
                'orario_di_arrivo'=>'02:00',
                'codice_treno'=>'13-14-15-16',
                'numero_carrozze'=>'1',
                'in_orario'=>true,
                'cancellato'=>false
            ]
            
        ];
        foreach ($trains as $train) {
            $newTrain = new Train(); 
            $newTrain->office = $train['office'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            
            $newTrain->save();
         }
            
            
            

       
    }
}
