<?php

use Illuminate\Database\Seeder;

class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $table = "plants";

      // DB::insert("");

      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (1, 'albahaca blanca', '', 'https://kiduaportal.wordpress.com/2016/12/12/albahaca-blanca/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (2, 'altamisa', 'artemisa vulgaris', 'https://kiduaportal.wordpress.com/2016/12/10/altamisa-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (3, 'ambar', '', 'https://kiduaportal.wordpress.com/2016/12/12/ambar/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (4, 'amor seco', '', 'https://kiduaportal.wordpress.com/2016/12/12/amor-seco/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (5, 'aroma', 'Vachellia farnesiana', 'https://kiduaportal.wordpress.com/2016/12/12/aroma/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (6, 'auyama', ' Cucúrbita máxima', 'https://kiduaportal.wordpress.com/2016/12/21/auyama/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (7, 'azafran de fruta', '', '')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (8, 'bencenuco', 'Asclepia curassavica L. ', 'https://kiduaportal.wordpress.com/2017/04/10/bencenuco-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (9, 'borraja', 'borago officinalis', 'https://kiduaportal.wordpress.com/2016/12/14/borraja/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (10, 'calauala ', '', 'https://kiduaportal.wordpress.com/2016/12/14/calauala-y-disciplina/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (11, 'caléndula', 'Calendula officinalis', 'https://kiduaportal.wordpress.com/2016/12/14/calendula/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (12, 'cofrey', 'Symphytum officinale L. ', 'https://kiduaportal.wordpress.com/2016/12/14/cofrey-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (13, 'cola de caballo', '', 'https://kiduaportal.wordpress.com/2016/12/14/cola-de-caballo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (14, 'coleo', '', 'https://kiduaportal.wordpress.com/2016/12/14/coleo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (15, 'col comun', 'Brassica oleracea L', 'https://kiduaportal.wordpress.com/2017/04/10/col-comun-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (16, 'cordoncillo', 'Piper aduncum', 'https://kiduaportal.wordpress.com/2017/04/10/cordoncillo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (17, 'curuba', '', 'https://kiduaportal.wordpress.com/2017/04/10/curuba/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (18, 'desinflamadora', '', '//kiduaportal.wordpress.com/2016/12/14/desinflamadora/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (19, 'disciplina', '', 'https://kiduaportal.wordpress.com/2016/12/14/calauala-y-disciplina/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (20, 'esponja', '', 'https://kiduaportal.wordpress.com/2017/04/10/esponja-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (21, 'espuma de mar', '', 'https://kiduaportal.wordpress.com/2017/04/10/espuma-de-mar/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (22, 'frijol garbanzo', 'Phaseolus vulgari', 'https://kiduaportal.wordpress.com/2017/04/10/frijol-garbanzo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (23, 'guadua', 'Guadua angustifolia', 'https://kiduaportal.wordpress.com/2017/04/10/guadua-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (24, 'guayaga', 'Galinsoga parviflora,', 'https://kiduaportal.wordpress.com/2016/12/14/guayaga/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (25, 'hierbabuena', 'Mentha spicata Leer más en: http://www.plantasparacurar.com/la-planta-de-hierbabuena/', 'https://kiduaportal.wordpress.com/2016/12/21/hierbabuena/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (26, 'limoncillo', 'Cymbogogon citratus', 'https://kiduaportal.wordpress.com/2016/12/21/limoncillo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (27, 'llantén', 'Plantago major', 'https://kiduaportal.wordpress.com/2016/12/23/llanten/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (28, 'malvisco', 'Althaea officinalis', 'https://kiduaportal.wordpress.com/2017/04/10/aitea-o-malvisco/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (29, 'manrubio', 'Ageratum conyzoide', 'https://kiduaportal.wordpress.com/2016/12/21/manrubio-o-chiva/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (30, 'marucha', '', 'https://kiduaportal.wordpress.com/2016/12/21/marucha-y-san-juanito/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (31, 'mirto silvestre', ' Myrtaceae', 'https://kiduaportal.wordpress.com/2017/04/10/mirto-silvestre-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (32, 'nacedero', 'Trichanthera gigantea', 'https://kiduaportal.wordpress.com/2017/04/10/nacedero-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (33, 'nabo', 'Brassica napu', 'https://kiduaportal.wordpress.com/2016/12/21/nabo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (34, 'oregano dulce', '', 'https://kiduaportal.wordpress.com/2017/04/10/oregano-dulce/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (35, 'oregano silvestre', 'Origanum vulgare', 'https://kiduaportal.wordpress.com/2016/12/22/oregano-silvestre/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (36, 'Pasto micay', 'Axonopus micay', 'https://kiduaportal.wordpress.com/2016/12/22/pasto-micay/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (37, 'penicilina', '', 'https://kiduaportal.wordpress.com/2016/12/22/penicilina/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (38, 'pronto alivio', ' Lippia Alba', 'https://kiduaportal.wordpress.com/2016/12/22/pronto-alivio/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (39, 'riobarbo', 'Rheum rhabarbarum', 'https://kiduaportal.wordpress.com/2016/12/22/riobarbo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (40, 'salvia china', 'Salvia officinalis', 'https://kiduaportal.wordpress.com/2017/04/10/salvia-china-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (41, 'sanguinaria menor', 'Paronychia argentea', 'https://kiduaportal.wordpress.com/2017/04/11/sanguinaria-menor-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (42, 'san juanito', 'Hypericum Perforatum', 'https://kiduaportal.wordpress.com/2016/12/21/marucha-y-san-juanito/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (43, 'siempreviva', 'Sempervivum tectorum', 'https://kiduaportal.wordpress.com/2016/12/22/siempreviva/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (44, 'te', 'Camellia sinensis', 'https://kiduaportal.wordpress.com/2016/12/22/te/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (45, 'trebol rojo', '', 'https://kiduaportal.wordpress.com/2016/12/22/trebol-rojo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (46, 'venadillo', 'Conyza canadensis', 'https://kiduaportal.wordpress.com/2016/12/22/venadillo/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (47, 'venturosa', '', 'https://kiduaportal.wordpress.com/2016/12/23/venturosa-2/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (48, 'verdolaga', 'Portulaca oleracea', 'https://kiduaportal.wordpress.com/2016/12/23/verdolaga/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (49, 'veronica', ': Cuphea hyssopifolia', 'https://kiduaportal.wordpress.com/2016/12/23/veronica/')");
      DB::insert("INSERT INTO plants (id, name, scientific_name, url) VALUES (50, 'violeta', 'Viola odorata', 'https://kiduaportal.wordpress.com/2016/12/23/violeta/')");
    }
}
