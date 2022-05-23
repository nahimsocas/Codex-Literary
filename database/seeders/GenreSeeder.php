<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'genre' => "Combined Print and E-Book Fiction",
                'list_name' => "Combined Print & E-Book Fiction"
            ],
            [
                'genre' => "Combined Print and E-Book Nonfiction",
                'list_name' => "Combined Print & E-Book Nonfiction"
            ],
            [
                'genre' => "Hardcover Fiction",
                'list_name' => "Hardcover Fiction"
            ],
            [
                'genre' => "Hardcover Nonfiction",
                'list_name' => "Hardcover Nonfiction"
            ],
            [
                'genre' => "Trade Fiction Paperback",
                'list_name' => "Paperback Trade Fiction"
            ],
            [
                'genre' => "Mass Market Paperback",
                'list_name' => "Paperback Mass-Market Fiction"
            ],
            [
                'genre' => "Paperback Nonfiction",
                'list_name' => "Paperback Nonfiction"
            ],
            [
                'genre' => "E-Book Fiction",
                'list_name' => "E-Book Fiction"
            ],
            [
                'genre' => "E-Book Nonfiction",
                'list_name' => "E-Book Nonfiction"
            ],
            [
                'genre' => "Hardcover Advice",
                'list_name' => "Hardcover Advice & Misc."
            ],
            [
                'genre' => "Paperback Advice",
                'list_name' => "Paperback Advice & Misc."
            ],
            [
                'genre' => "Advice How-To and Miscellaneous",
                'list_name' => "Advice, How-To & Miscellaneous"
            ],
            [
                'genre' => "Hardcover Graphic Books",
                'list_name' => "Hardcover Graphic Books"
            ],
            [
                'genre' => "Paperback Graphic Books",
                'list_name' => "Paperback Graphic Books"
            ],
            [
                'genre' => "Manga",
                'list_name' => "Manga"
            ],
            [
                'genre' => "Combined Print Fiction",
                'list_name' => "Combined Hardcover & Paperback Fiction"
            ],
            [
                'genre' => "Combined Print Nonfiction",
                'list_name' => "Combined Hardcover & Paperback Nonfiction"
            ],
            [
                'genre' => "Chapter Books",
                'list_name' => "Children’s Chapter Books"
            ],
            [
                'genre' => "Childrens Middle Grade",
                'list_name' => "Children’s Middle Grade"
            ],
            [
                'genre' => "Childrens Middle Grade E-Book",
                'list_name' => "Children’s Middle Grade E-Book"
            ],
            [
                'genre' => "Childrens Middle Grade Hardcover",
                'list_name' => "Children’s Middle Grade Hardcover"
            ],
            [
                'genre' => "Childrens Middle Grade Paperback",
                'list_name' => "Children’s Middle Grade Paperback"
            ],
            [
                'genre' => "Paperback Books",
                'list_name' => "Children’s Paperback Books"
            ],
            [
                'genre' => "Picture Books",
                'list_name' => "Children’s Picture Books"
            ],
            [
                'genre' => "Series Books",
                'list_name' => "Children’s Series"
            ],
            [
                'genre' => "Young Adult",
                'list_name' => "Young Adult"
            ],
            [
                'genre' => "Young Adult E-Book",
                'list_name' => "Young Adult E-Book"
            ],
            [
                'genre' => "Young Adult Hardcover",
                'list_name' => "Young Adult Hardcover"
            ],
            [
                'genre' => "Young Adult Paperback",
                'list_name' => "Young Adult Paperback"
            ],
            [
                'genre' => "Animals",
                'list_name' => "Animals"
            ],
            [
                'genre' => "Audio Fiction",
                'list_name' => "Audio Fiction"
            ],
            [
                'genre' => "Audio Nonfiction",
                'list_name' => "Audio Nonfiction"
            ],
            [
                'genre' => "Business Books",
                'list_name' => "Business"
            ],
            [
                'genre' => "Celebrities",
                'list_name' => "Celebrities"
            ],
            [
                'genre' => "Crime and Punishment",
                'list_name' => "Crime and Punishment"
            ],
            [
                'genre' => "Culture",
                'list_name' => "Culture"
            ],
            [
                'genre' => "Education",
                'list_name' => "Education"
            ],
            [
                'genre' => "Espionage",
                'list_name' => "Espionage"
            ],
            [
                'genre' => "Expeditions Disasters and Adventures",
                'list_name' => "Expeditions"
            ],
            [
                'genre' => "Fashion Manners and Customs",
                'list_name' => "Fashion, Manners and Customs"
            ],
            [
                'genre' => "Food and Fitness",
                'list_name' => "Food and Diet"
            ],
            [
                'genre' => "Games and Activities",
                'list_name' => "Games and Activities"
            ],
            [
                'genre' => "Graphic Books and Manga",
                'list_name' => "Graphic Books and Manga"
            ],
            [
                'genre' => "Hardcover Business Books",
                'list_name' => "Hardcover Business Books"
            ],
            [
                'genre' => "Health",
                'list_name' => "Health"
            ],
            [
                'genre' => "Humor",
                'list_name' => "Humor"
            ],
            [
                'genre' => "Indigenous Americans",
                'list_name' => "Indigenous Americans"
            ],
            [
                'genre' => "Relationships",
                'list_name' => "Love and Relationships"
            ],
            [
                'genre' => "Mass Market",
                'list_name' => "Mass Market"
            ],
            [
                'genre' => "Middle Grade Paperback",
                'list_name' => "Middle Grade Paperback"
            ],
            [
                'genre' => "Paperback Business Books",
                'list_name' => "Paperback Business Books"
            ],
            [
                'genre' => "Family",
                'list_name' => "Parenthood and Family"
            ],
            [
                'genre' => "Hardcover Political Books",
                'list_name' => "Politics and American History"
            ],
            [
                'genre' => "Race and Civil Rights",
                'list_name' => "Race and Civil Rights"
            ],
            [
                'genre' => "Religion Spirituality and Faith",
                'list_name' => "Religion, Spirituality and Faith"
            ],
            [
                'genre' => "Science",
                'list_name' => "Science"
            ],
            [
                'genre' => "Sports",
                'list_name' => "Sports and Fitness"
            ],
            [
                'genre' => "Travel",
                'list_name' => "Travel"
            ]
        ]);
    }
}
