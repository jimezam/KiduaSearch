<?php

use Illuminate\Database\Seeder;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $table = "diseases";

      // DB::insert("");

      DB::insert("INSERT INTO diseases (id, name) VALUES(1, 'amigdalitis')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(2, 'acidez')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(3, 'anemia')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(4, 'apendicitis')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(5, 'asma')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(6, 'bronquitis')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(7, 'caida del cabello')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(8, 'cansancio muscular')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(9, 'colesterol alto')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(10, 'colicos estomacales')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(11, 'colicos menstruales')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(12, 'crisis nerviosa')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(13, 'diabetes')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(14, 'diarrea')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(15, 'dolor de cabeza')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(16, 'enfermedades de la próstata')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(17, 'enfermedades hepáticas')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(18, 'enfermedades pancreaticas')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(19, 'enfermedades renales')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(20, 'epilepsia')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(21, 'erupción cutanea')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(22, 'esguinces')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(23, 'fiebre')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(24, 'gastritis')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(25, 'hemorroides')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(26, 'heridas')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(27, 'inflamaciones musculares')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(28, 'inflamaciones en los pezones')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(29, 'insomnio')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(30, 'lumbagos')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(31, 'malestar general')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(32, 'migraña')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(33, 'neuralgia')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(34, 'neurastenia')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(35, 'obesidad')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(36, 'odontalgia')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(37, 'perdida de leche materna')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(38, 'paludismo')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(39, 'presión arterial alta')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(40, 'pterigios')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(41, 'reumatismo')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(42, 'sinusitis')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(43, 'triglicéridos altos')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(44, 'úlceras')");
      DB::insert("INSERT INTO diseases (id, name) VALUES(45, 'cancer')");
    }
}
