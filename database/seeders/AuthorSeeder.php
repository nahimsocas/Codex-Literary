<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'author' => "Deborah_Harkness"
            ],
            [
                'author' => "Gillian_Flynn"
            ],
            [
                'author' => "Catherine_Coulter"
            ],
            [
                'author' => "Jennifer_Weiner"
            ],
            [
                'author' => "Janet_Evanovich"
            ],
            [
                'author' => "Susan_Elizabeth_Phillips"
            ],
            [
                'author' => "George_R_R_Martin"
            ],
            [
                'author' => "Carlos_Ruiz_Zafon"
            ],
            [
                'author' => "Linda_Fairstein"
            ],
            [
                'author' => "Karin_Slaughter"
            ],
            [
                'author' => "Alan_Furst"
            ],
            [
                'author' => "John_Grisham"
            ],
            [
                'author' => "James_Rollins"
            ],
            [
                'author' => "Jess_Walter"
            ],
            [
                'author' => "Karen_Thompson_Walker"
            ],
            [
                'author' => "Andrew_Gross"
            ],
            [
                'author' => "Dorothea_Benton_Frank"
            ],
            [
                'author' => "Dan_Brown"
            ],
            [
                'author' => "Brad_Thor"
            ],
            [
                'author' => "Khaled_Hosseini"
            ],
            [
                'author' => "Neil_Gaiman"
            ],
            [
                'author' => "Carl_Hiaasen"
            ],
            [
                'author' => "Ian_Doescher"
            ],
            [
                'author' => "Chris_Bohjalian"
            ],
            [
                'author' => "Jeannette_Walls"
            ],
            [
                'author' => "Laurell_K_Hamilton"
            ],
            [
                'author' => "Troy_Denning"
            ],
            [
                'author' => "Curtis_Sittenfeld"
            ],
            [
                'author' => "Philipp_Meyer"
            ],
            [
                'author' => "Dinesh_D'Souza"
            ],
            [
                'author' => "Edward_Klein"
            ],
            [
                'author' => "Hillary_Rodham_Clinton"
            ],
            [
                'author' => "Thomas_Piketty"
            ],
            [
                'author' => "Malcolm_Gladwell"
            ],
            [
                'author' => "Joan_Rivers"
            ],
            [
                'author' => "Michael_Lewis"
            ],
            [
                'author' => "Arianna_Huffington"
            ],
            [
                'author' => "Marina_Keegan"
            ],
            [
                'author' => "Jordan_Ellenberg"
            ],
            [
                'author' => "Charles_Krauthammer"
            ],
            [
                'author' => "Helen_Rappaport"
            ],
            [
                'author' => "Wednesday_Martin"
            ],
            [
                'author' => "Gary_Chapman"
            ],
            [
                'author' => "Jon_Krakauer"
            ],
            [
                'author' => "Brené_Brown"
            ],
            [
                'author' => "Helen_Macdonald"
            ],
            [
                'author' => "Jamie_Tworkowski"
            ],
            [
                'author' => "Thich_Nhat_Hanh"
            ],
            [
                'author' => "Bob_Goff"
            ],
            [
                'author' => "Roxane_Gay"
            ],
            [
                'author' => "Matthieu_Ricard"
            ],
            [
                'author' => "Maggie_Nelson"
            ],
            [
                'author' => "Sherry_Argov"
            ],
            [
                'author' => "Sebastian_Junger"
            ],
            [
                'author' => "Chuck_Klosterman"
            ],
            [
                'author' => "Yuval_Noah_Harari"
            ],
            [
                'author' => "Cass_R_Sunstein"
            ],
            [
                'author' => "Lesley_M_M_Blume"
            ],
            [
                'author' => "Don_Lattin"
            ],
            [
                'author' => "Arthur_Lubow"
            ]
        ]);
    }
}
