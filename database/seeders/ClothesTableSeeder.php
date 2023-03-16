<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\New_;

// MODELS
use App\Models\Admin\Clothe;

class ClothesTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clothes=[
            [
                "marca" => "Gucci",
                "img" => "https://th.bing.com/th/id/R.1786d9c340c5c8e0716f4f9068280154?rik=OfhXE0t5mFDQXA&pid=ImgRaw&r=0",
                "prezzo" => "129.99",
                "genere" => "maschio",
                "descrizione" => "Composizione: 100% ,cotone Materiale: Jersey,Avvertenze: Non asciugare in asciugatrice, Lavaggio a macchina a 30 gradi",
                "consegna_rapida" => 1,
                "colezzione_nuova" => 0,
                "tipo" => "Maglia",
                "taglia" => "M",
            ],
            [
                "marca" => "Jaded London",
                "img" => "https://img01.ztat.net/article/spp-media-p1/c3b3650687bc49d2ad72255f04fe8eac/e982a577145a4940809ee503d46c7435.jpg?imwidth=762",
                "prezzo" => "42.99",
                "genere" => "maschio",
                "descrizione" => "Composizione: 100% ,cotone",
                "consegna_rapida" => 1,
                "colezzione_nuova" => 1,
                "tipo" => "Maglia",
                "taglia" => "L",
            ],
            [
                "marca" => "Timberland",
                "img" => "https://img01.ztat.net/article/spp-media-p1/cdc81bae5f3c49f7b9d48a717b6dbe23/1928cd996888449fb314fdac22cd7f09.jpg?imwidth=762",
                "prezzo" => "15.99",
                "genere" => "maschio",
                "descrizione" => "Composizione: 100% ,cotone Materiale: Jersey,Avvertenze: Non asciugare in asciugatrice",
                "consegna_rapida" => 0,
                "colezzione_nuova" => 1,
                "tipo" => "Maglia",
                "taglia" => "XXL",
            ],
            [
                "marca" => "adidas Performance",
                "img" => "https://img01.ztat.net/article/spp-media-p1/d7c2177af3224ea0a77da77854efe097/15cdfb4b15c54819a5c90991a001d1af.jpg?imwidth=762&filter=packshot",
                "prezzo" => "143.99",
                "genere" => "donna",
                "descrizione" => "Materiale parte superiore: Tessuto / Sintetico Rivestimento: Tessuto Soletta: Tessuto Suola: Materiale sintetico Fodera: Senza imbottitura",
                "consegna_rapida" => 1,
                "colezzione_nuova" => 0,
                "tipo" => "scarpe",
                "taglia" => "37",
            ],
            [
                "marca" => "Stradivarius",
                "img" => "https://img01.ztat.net/article/spp-media-p1/5ab2c992423143f0b9437c3eb5a5ad51/cc78045cc68045ecb4154b3501a02db1.jpg?imwidth=1800",
                "prezzo" => "29.99",
                "genere" => "donna",
                "descrizione" => "Composizione: 97% poliestere, 3% elastan ,Materiale: Satin",
                "consegna_rapida" => 0,
                "colezzione_nuova" => 0,
                "tipo" => "vestito",
                "taglia" => "M",
            ],

            ];
            foreach($clothes as $singleClothe){
                $newClothe = new Clothe;
                $newClothe->marca = $singleClothe["marca"];
                $newClothe->img = $singleClothe["img"];
                $newClothe->prezzo = $singleClothe["prezzo"];
                $newClothe->genere = $singleClothe["genere"];
                $newClothe->descrizione = $singleClothe["descrizione"];
                $newClothe->consegna_rapida = $singleClothe["consegna_rapida"];
                $newClothe->colezzione_nuova = $singleClothe["colezzione_nuova"];
                $newClothe->tipo = $singleClothe["tipo"];
                $newClothe->taglia = $singleClothe["taglia"];
                $newClothe->save();
            }
    }
}
