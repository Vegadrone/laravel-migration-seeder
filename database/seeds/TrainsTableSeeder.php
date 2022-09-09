<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $trains = [
            [
                "company"=>'Trenord',
                "departure_station"=>'Milano-Centrale',
                "arrival_station"=>'Roma-Termini',
                "departure_time"=> '2022-09-09 15:29:29',
                "arrival_time"=> '2022-09-09 18:29:29',
                "train_code"=>'26315',
                "carriage_number"=>'15',
                "in_time"=>'1',
                "canceled"=>'0',
            ],
            [
                "company" => 'Trenitalia',
                "departure_station" => 'Brescia-Centrale',
                "arrival_station" => 'Verona P.N.',
                "departure_time" => '2022-09-09 09:30:00',
                "arrival_time" => '2022-09-09 11:30:00',
                "train_code" => '33152',
                "carriage_number" => '18',
                "in_time" => '1',
                "canceled" => '0',
            ],
            [
                "company" => 'TreniSicilia',
                "departure_station" => 'Palermo-Centrale',
                "arrival_station" => 'Catania-Centrale',
                "departure_time" => '2022-09-09 19:00:00',
                "arrival_time" => '2022-09-09 22:25:00',
                "train_code" => '56982',
                "carriage_number" => '4',
                "in_time" => '0',
                "canceled" => '1',
            ],
            [
                "company" => 'TreniniCarini',
                "departure_station" => 'Narnia-Centrale',
                "arrival_station" => 'Fosso di Elm',
                "departure_time" => '2022-09-09 17:50:00',
                "arrival_time" => '2022-09-09 19:45:00',
                "train_code" => '93841',
                "carriage_number" => '28',
                "in_time" => '1',
                "canceled" => '0',
            ],
            [
                "company" => 'Trenoni',
                "departure_station" => 'Grande-Stazione-Centrale',
                "arrival_station" => 'Stazionona',
                "departure_time" => '2022-09-09 15:15:00',
                "arrival_time" => '2022-09-09 21:45:00',
                "train_code" => '60960',
                "carriage_number" => '100',
                "in_time" => '1',
                "canceled" => '0',
            ],
        ];

        foreach ($trains as $train){
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriage_number = $train['carriage_number'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->canceled = $train['canceled'];
            $newTrain->save();
        }
    }
}
