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
                'short_name' => "Combined Print and E-Book Fiction",
                'genre' => "Combined Print & E-Book Fiction"
            ],
            [
                'short_name' => "Combined Print and E-Book Nonfiction",
                'genre' => "Combined Print & E-Book Nonfiction"
            ],
            [
                'short_name' => "Hardcover Fiction",
                'genre' => "Hardcover Fiction"
            ],
            [
                'short_name' => "Hardcover Nonfiction",
                'genre' => "Hardcover Nonfiction"
            ],
            [
                'short_name' => "Trade Fiction Paperback",
                'genre' => "Paperback Trade Fiction"
            ],
            [
                'short_name' => "Mass Market Paperback",
                'genre' => "Paperback Mass-Market Fiction"
            ],
            [
                'short_name' => "Paperback Nonfiction",
                'genre' => "Paperback Nonfiction"
            ],
            [
                'short_name' => "E-Book Fiction",
                'genre' => "E-Book Fiction"
            ],
            [
                'short_name' => "E-Book Nonfiction",
                'genre' => "E-Book Nonfiction"
            ],
            [
                'short_name' => "Hardcover Advice",
                'genre' => "Hardcover Advice & Misc."
            ],
            [
                'short_name' => "Paperback Advice",
                'genre' => "Paperback Advice & Misc."
            ],
            [
                'short_name' => "Advice How-To and Miscellaneous",
                'genre' => "Advice, How-To & Miscellaneous"
            ],
            [
                'short_name' => "Hardcover Graphic Books",
                'genre' => "Hardcover Graphic Books"
            ],
            [
                'short_name' => "Paperback Graphic Books",
                'genre' => "Paperback Graphic Books"
            ],
            [
                'short_name' => "Manga",
                'genre' => "Manga"
            ],
            [
                'short_name' => "Combined Print Fiction",
                'genre' => "Combined Hardcover & Paperback Fiction"
            ],
            [
                'short_name' => "Combined Print Nonfiction",
                'genre' => "Combined Hardcover & Paperback Nonfiction"
            ],
            [
                'short_name' => "Chapter Books",
                'genre' => "Children’s Chapter Books"
            ],
            [
                'short_name' => "Childrens Middle Grade",
                'genre' => "Children’s Middle Grade"
            ],
            [
                'short_name' => "Childrens Middle Grade E-Book",
                'genre' => "Children’s Middle Grade E-Book"
            ],
            [
                'short_name' => "Childrens Middle Grade Hardcover",
                'genre' => "Children’s Middle Grade Hardcover"
            ],
            [
                'short_name' => "Childrens Middle Grade Paperback",
                'genre' => "Children’s Middle Grade Paperback"
            ],
            [
                'short_name' => "Paperback Books",
                'genre' => "Children’s Paperback Books"
            ],
            [
                'short_name' => "Picture Books",
                'genre' => "Children’s Picture Books"
            ],
            [
                'short_name' => "Series Books",
                'genre' => "Children’s Series"
            ],
            [
                'short_name' => "Young Adult",
                'genre' => "Young Adult"
            ],
            [
                'short_name' => "Young Adult E-Book",
                'genre' => "Young Adult E-Book"
            ],
            [
                'short_name' => "Young Adult Hardcover",
                'genre' => "Young Adult Hardcover"
            ],
            [
                'short_name' => "Young Adult Paperback",
                'genre' => "Young Adult Paperback"
            ],
            [
                'short_name' => "Animals",
                'genre' => "Animals"
            ],
            [
                'short_name' => "Audio Fiction",
                'genre' => "Audio Fiction"
            ],
            [
                'short_name' => "Audio Nonfiction",
                'genre' => "Audio Nonfiction"
            ],
            [
                'short_name' => "Business Books",
                'genre' => "Business"
            ],
            [
                'short_name' => "Celebrities",
                'genre' => "Celebrities"
            ],
            [
                'short_name' => "Crime and Punishment",
                'genre' => "Crime and Punishment"
            ],
            [
                'short_name' => "Culture",
                'genre' => "Culture"
            ],
            [
                'short_name' => "Education",
                'genre' => "Education"
            ],
            [
                'short_name' => "Espionage",
                'genre' => "Espionage"
            ],
            [
                'short_name' => "Expeditions Disasters and Adventures",
                'genre' => "Expeditions"
            ],
            [
                'short_name' => "Fashion Manners and Customs",
                'genre' => "Fashion, Manners and Customs"
            ],
            [
                'short_name' => "Food and Fitness",
                'genre' => "Food and Diet"
            ],
            [
                'short_name' => "Games and Activities",
                'genre' => "Games and Activities"
            ],
            [
                'short_name' => "Graphic Books and Manga",
                'genre' => "Graphic Books and Manga"
            ],
            [
                'short_name' => "Hardcover Business Books",
                'genre' => "Hardcover Business Books"
            ],
            [
                'short_name' => "Health",
                'genre' => "Health"
            ],
            [
                'short_name' => "Humor",
                'genre' => "Humor"
            ],
            [
                'short_name' => "Indigenous Americans",
                'genre' => "Indigenous Americans"
            ],
            [
                'short_name' => "Relationships",
                'genre' => "Love and Relationships"
            ],
            [
                'short_name' => "Mass Market",
                'genre' => "Mass Market"
            ],
            [
                'short_name' => "Middle Grade Paperback",
                'genre' => "Middle Grade Paperback"
            ],
            [
                'short_name' => "Paperback Business Books",
                'genre' => "Paperback Business Books"
            ],
            [
                'short_name' => "Family",
                'genre' => "Parenthood and Family"
            ],
            [
                'short_name' => "Hardcover Political Books",
                'genre' => "Politics and American History"
            ],
            [
                'short_name' => "Race and Civil Rights",
                'genre' => "Race and Civil Rights"
            ],
            [
                'short_name' => "Religion Spirituality and Faith",
                'genre' => "Religion, Spirituality and Faith"
            ],
            [
                'short_name' => "Science",
                'genre' => "Science"
            ],
            [
                'short_name' => "Sports",
                'genre' => "Sports and Fitness"
            ],
            [
                'short_name' => "Travel",
                'genre' => "Travel"
            ]
        ]);
    }
}
