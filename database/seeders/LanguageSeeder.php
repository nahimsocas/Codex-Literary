<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'code' => "aa",
                'language' => "Afar",
                'native' => "Afar"
            ],
            [
                'code' => "ab",
                'language' => "Abkhazian",
                'native' => "Аҧсуа"
            ],
            [
                'code' => "af",
                'language' => "Afrikaans",
                'native' => "Afrikaans"
            ],
            [
                'code' => "ak",
                'language' => "Akan",
                'native' => "Akana"
            ],
            [
                'code' => "am",
                'language' => "Amharic",
                'native' => "አማርኛ"
            ],
            [
                'code' => "an",
                'language' => "Aragonese",
                'native' => "Aragonés"
            ],
            [
                'code' => "ar",
                'language' => "Arabic",
                'native' => "العربية"
            ],
            [
                'code' => "as",
                'language' => "Assamese",
                'native' => "অসমীয়া"
            ],
            [
                'code' => "av",
                'language' => "Avar",
                'native' => "Авар"
            ],
            [
                'code' => "ay",
                'language' => "Aymara",
                'native' => "Aymar"
            ],
            [
                'code' => "az",
                'language' => "Azerbaijani",
                'native' => "Azərbaycanca / آذربايجان"
            ],
            [
                'code' => "ba",
                'language' => "Bashkir",
                'native' => "Башҡорт"
            ],
            [
                'code' => "be",
                'language' => "Belarusian",
                'native' => "Беларуская"
            ],
            [
                'code' => "bg",
                'language' => "Bulgarian",
                'native' => "Български"
            ],
            [
                'code' => "bh",
                'language' => "Bihari",
                'native' => "भोजपुरी"
            ],
            [
                'code' => "bi",
                'language' => "Bislama",
                'native' => "Bislama"
            ],
            [
                'code' => "bm",
                'language' => "Bambara",
                'native' => "Bamanankan"
            ],
            [
                'code' => "bn",
                'language' => "Bengali",
                'native' => "বাংলা"
            ],
            [
                'code' => "bo",
                'language' => "Tibetan",
                'native' => "བོད་ཡིག / Bod skad"
            ],
            [
                'code' => "br",
                'language' => "Breton",
                'native' => "Brezhoneg"
            ],
            [
                'code' => "bs",
                'language' => "Bosnian",
                'native' => "Bosanski"
            ],
            [
                'code' => "ca",
                'language' => "Catalan",
                'native' => "Català"
            ],
            [
                'code' => "ce",
                'language' => "Chechen",
                'native' => "Нохчийн"
            ],
            [
                'code' => "ch",
                'language' => "Chamorro",
                'native' => "Chamoru"
            ],
            [
                'code' => "co",
                'language' => "Corsican",
                'native' => "Corsu"
            ],
            [
                'code' => "cr",
                'language' => "Cree",
                'native' => "Nehiyaw"
            ],
            [
                'code' => "cs",
                'language' => "Czech",
                'native' => "Čeština"
            ],
            [
                'code' => "cu",
                'language' => "Old Church Slavonic / Old Bulgarian",
                'native' => "словѣньскъ / slověnĭskŭ"
            ],
            [
                'code' => "cv",
                'language' => "Chuvash",
                'native' => "Чăваш"
            ],
            [
                'code' => "cy",
                'language' => "Welsh",
                'native' => "Cymraeg"
            ],
            [
                'code' => "da",
                'language' => "Danish",
                'native' => "Dansk"
            ],
            [
                'code' => "de",
                'language' => "German",
                'native' => "Deutsch"
            ],
            [
                'code' => "dv",
                'language' => "Divehi",
                'native' => "ދިވެހިބަސް"
            ],
            [
                'code' => "dz",
                'language' => "Dzongkha",
                'native' => "ཇོང་ཁ"
            ],
            [
                'code' => "ee",
                'language' => "Ewe",
                'native' => "Ɛʋɛ"
            ],
            [
                'code' => "el",
                'language' => "Greek",
                'native' => "Ελληνικά"
            ],
            [
                'code' => "en",
                'language' => "English",
                'native' => "English"
            ],
            [
                'code' => "eo",
                'language' => "Esperanto",
                'native' => "Esperanto"
            ],
            [
                'code' => "es",
                'language' => "Spanish",
                'native' => "Español"
            ],
            [
                'code' => "et",
                'language' => "Estonian",
                'native' => "Eesti"
            ],
            [
                'code' => "eu",
                'language' => "Basque",
                'native' => "Euskara"
            ],
            [
                'code' => "fa",
                'language' => "Persian",
                'native' => "فارسی"
            ],
            [
                'code' => "ff",
                'language' => "Peul",
                'native' => "Fulfulde"
            ],
            [
                'code' => "fi",
                'language' => "Finnish",
                'native' => "Suomi"
            ],
            [
                'code' => "fj",
                'language' => "Fijian",
                'native' => "Na Vosa Vakaviti"
            ],
            [
                'code' => "fo",
                'language' => "Faroese",
                'native' => "Føroyskt"
            ],
            [
                'code' => "fr",
                'language' => "French",
                'native' => "Français"
            ],
            [
                'code' => "fy",
                'language' => "West Frisian",
                'native' => "Frysk"
            ],
            [
                'code' => "ga",
                'language' => "Irish",
                'native' => "Gaeilge"
            ],
            [
                'code' => "gd",
                'language' => "Scottish Gaelic",
                'native' => "Gàidhlig"
            ],
            [
                'code' => "gl",
                'language' => "Galician",
                'native' => "Galego"
            ],
            [
                'code' => "gn",
                'language' => "Guarani",
                'native' => "Avañe'ẽ"
            ],
            [
                'code' => "gu",
                'language' => "Gujarati",
                'native' => "ગુજરાતી"
            ],
            [
                'code' => "gv",
                'language' => "Manx",
                'native' => "Gaelg"
            ],
            [
                'code' => "ha",
                'language' => "Hausa",
                'native' => "هَوُسَ"
            ],
            [
                'code' => "he",
                'language' => "Hebrew",
                'native' => "עברית"
            ],
            [
                'code' => "hi",
                'language' => "Hindi",
                'native' => "हिन्दी"
            ],
            [
                'code' => "ho",
                'language' => "Hiri Motu",
                'native' => "Hiri Motu"
            ],
            [
                'code' => "hr",
                'language' => "Croatian",
                'native' => "Hrvatski"
            ],
            [
                'code' => "ht",
                'language' => "Haitian",
                'native' => "Krèyol ayisyen"
            ],
            [
                'code' => "hu",
                'language' => "Hungarian",
                'native' => "Magyar"
            ],
            [
                'code' => "hy",
                'language' => "Armenian",
                'native' => "Հայերեն"
            ],
            [
                'code' => "hz",
                'language' => "Herero",
                'native' => "Otsiherero"
            ],
            [
                'code' => "ia",
                'language' => "Interlingua",
                'native' => "Interlingua"
            ],
            [
                'code' => "id",
                'language' => "Indonesian",
                'native' => "Bahasa Indonesia"
            ],
            [
                'code' => "ie",
                'language' => "Interlingue",
                'native' => "Interlingue"
            ],
            [
                'code' => "ig",
                'language' => "Igbo",
                'native' => "Igbo"
            ],
            [
                'code' => "ii",
                'language' => "Sichuan Yi",
                'native' => "ꆇꉙ / 四川彝语"
            ],
            [
                'code' => "ik",
                'language' => "Inupiak",
                'native' => "Iñupiak"
            ],
            [
                'code' => "io",
                'language' => "Ido",
                'native' => "Ido"
            ],
            [
                'code' => "is",
                'language' => "Icelandic",
                'native' => "Íslenska"
            ],
            [
                'code' => "it",
                'language' => "Italian",
                'native' => "Italiano"
            ],
            [
                'code' => "iu",
                'language' => "Inuktitut",
                'native' => "ᐃᓄᒃᑎᑐᑦ"
            ],
            [
                'code' => "ja",
                'language' => "Japanese",
                'native' => "日本語"
            ],
            [
                'code' => "jv",
                'language' => "Javanese",
                'native' => "Basa Jawa"
            ],
            [
                'code' => "ka",
                'language' => "Georgian",
                'native' => "ქართული"
            ],
            [
                'code' => "kg",
                'language' => "Kongo",
                'native' => "KiKongo"
            ],
            [
                'code' => "ki",
                'language' => "Kikuyu",
                'native' => "Gĩkũyũ"
            ],
            [
                'code' => "kj",
                'language' => "Kuanyama",
                'native' => "Kuanyama"
            ],
            [
                'code' => "kk",
                'language' => "Kazakh",
                'native' => "Қазақша"
            ],
            [
                'code' => "kl",
                'language' => "Greenlandic",
                'native' => "Kalaallisut"
            ],
            [
                'code' => "km",
                'language' => "Cambodian",
                'native' => "ភាសាខ្មែរ"
            ],
            [
                'code' => "kn",
                'language' => "Kannada",
                'native' => "ಕನ್ನಡ"
            ],
            [
                'code' => "ko",
                'language' => "Korean",
                'native' => "한국어"
            ],
            [
                'code' => "kr",
                'language' => "Kanuri",
                'native' => "Kanuri"
            ],
            [
                'code' => "ks",
                'language' => "Kashmiri",
                'native' => "कश्मीरी / كشميري"
            ],
            [
                'code' => "ku",
                'language' => "Kurdish",
                'native' => "Kurdî / كوردی"
            ],
            [
                'code' => "kv",
                'language' => "Komi",
                'native' => "Коми"
            ],
            [
                'code' => "kw",
                'language' => "Cornish",
                'native' => "Kernewek"
            ],
            [
                'code' => "ky",
                'language' => "Kyrgyz",
                'native' => "Кыргызча"
            ],
            [
                'code' => "la",
                'language' => "Latin",
                'native' => "Latina"
            ],
            [
                'code' => "lb",
                'language' => "Luxembourgish",
                'native' => "Lëtzebuergesch"
            ],
            [
                'code' => "lg",
                'language' => "Ganda",
                'native' => "Luganda"
            ],
            [
                'code' => "li",
                'language' => "Limburgian",
                'native' => "Limburgs"
            ],
            [
                'code' => "ln",
                'language' => "Lingala",
                'native' => "Lingála"
            ],
            [
                'code' => "lo",
                'language' => "Laotian",
                'native' => "ລາວ / Pha xa lao"
            ],
            [
                'code' => "lt",
                'language' => "Lithuanian",
                'native' => "Lietuvių"
            ],
            [
                'code' => "lu",
                'language' => "Luba-Katanga",
                'native' => "Tshiluba"
            ],
            [
                'code' => "lv",
                'language' => "Latvian",
                'native' => "Latviešu"
            ],
            [
                'code' => "mg",
                'language' => "Malagasy",
                'native' => "Malagasy"
            ],
            [
                'code' => "mh",
                'language' => "Marshallese",
                'native' => "Kajin Majel / Ebon"
            ],
            [
                'code' => "mi",
                'language' => "Maori",
                'native' => "Māori"
            ],
            [
                'code' => "mk",
                'language' => "Macedonian",
                'native' => "Македонски"
            ],
            [
                'code' => "ml",
                'language' => "Malayalam",
                'native' => "മലയാളം"
            ],
            [
                'code' => "mn",
                'language' => "Mongolian",
                'native' => "Монгол"
            ],
            [
                'code' => "mo",
                'language' => "Moldovan",
                'native' => "Moldovenească"
            ],
            [
                'code' => "mr",
                'language' => "Marathi",
                'native' => "मराठी"
            ],
            [
                'code' => "ms",
                'language' => "Malay",
                'native' => "Bahasa Melayu"
            ],
            [
                'code' => "mt",
                'language' => "Maltese",
                'native' => "bil-Malti"
            ],
            [
                'code' => "my",
                'language' => "Burmese",
                'native' => "မြန်မာစာ"
            ],
            [
                'code' => "na",
                'language' => "Nauruan",
                'native' => "Dorerin Naoero"
            ],
            [
                'code' => "nb",
                'language' => "Norwegian Bokmål",
                'native' => "Norsk bokmål"
            ],
            [
                'code' => "nd",
                'language' => "North Ndebele",
                'native' => "Sindebele"
            ],
            [
                'code' => "ne",
                'language' => "Nepali",
                'native' => "नेपाली"
            ],
            [
                'code' => "ng",
                'language' => "Ndonga",
                'native' => "Oshiwambo"
            ],
            [
                'code' => "nl",
                'language' => "Dutch",
                'native' => "Nederlands"
            ],
            [
                'code' => "nn",
                'language' => "Norwegian Nynorsk",
                'native' => "Norsk nynorsk"
            ],
            [
                'code' => "no",
                'language' => "Norwegian",
                'native' => "Norsk"
            ],
            [
                'code' => "nr",
                'language' => "South Ndebele",
                'native' => "isiNdebele"
            ],
            [
                'code' => "nv",
                'language' => "Navajo",
                'native' => "Diné bizaad"
            ],
            [
                'code' => "ny",
                'language' => "Chichewa",
                'native' => "Chi-Chewa"
            ],
            [
                'code' => "oc",
                'language' => "Occitan",
                'native' => "Occitan"
            ],
            [
                'code' => "oj",
                'language' => "Ojibwa",
                'native' => "ᐊᓂᔑᓈᐯᒧᐎᓐ / Anishinaabemowin"
            ],
            [
                'code' => "om",
                'language' => "Oromo",
                'native' => "Oromoo"
            ],
            [
                'code' => "or",
                'language' => "Oriya",
                'native' => "ଓଡ଼ିଆ"
            ],
            [
                'code' => "os",
                'language' => "Ossetian / Ossetic",
                'native' => "Иронау"
            ],
            [
                'code' => "pa",
                'language' => "Panjabi / Punjabi",
                'native' => "ਪੰਜਾਬੀ / पंजाबी / پنجابي"
            ],
            [
                'code' => "pi",
                'language' => "Pali",
                'native' => "Pāli / पाऴि"
            ],
            [
                'code' => "pl",
                'language' => "Polish",
                'native' => "Polski"
            ],
            [
                'code' => "ps",
                'language' => "Pashto",
                'native' => "پښتو"
            ],
            [
                'code' => "pt",
                'language' => "Portuguese",
                'native' => "Português"
            ],
            [
                'code' => "qu",
                'language' => "Quechua",
                'native' => "Runa Simi"
            ],
            [
                'code' => "rm",
                'language' => "Raeto Romance",
                'native' => "Rumantsch"
            ],
            [
                'code' => "rn",
                'language' => "Kirundi",
                'native' => "Kirundi"
            ],
            [
                'code' => "ro",
                'language' => "Romanian",
                'native' => "Română"
            ],
            [
                'code' => "ru",
                'language' => "Russian",
                'native' => "Русский"
            ],
            [
                'code' => "rw",
                'language' => "Rwandi",
                'native' => "Kinyarwandi"
            ],
            [
                'code' => "sa",
                'language' => "Sanskrit",
                'native' => "संस्कृतम्"
            ],
            [
                'code' => "sc",
                'language' => "Sardinian",
                'native' => "Sardu"
            ],
            [
                'code' => "sd",
                'language' => "Sindhi",
                'native' => "सिनधि"
            ],
            [
                'code' => "se",
                'language' => "Northern Sami",
                'native' => "Sámegiella"
            ],
            [
                'code' => "sg",
                'language' => "Sango",
                'native' => "Sängö"
            ],
            [
                'code' => "sh",
                'language' => "Serbo-Croatian",
                'native' => "Srpskohrvatski / Српскохрватски"
            ],
            [
                'code' => "si",
                'language' => "Sinhalese",
                'native' => "සිංහල"
            ],
            [
                'code' => "sk",
                'language' => "Slovak",
                'native' => "Slovenčina"
            ],
            [
                'code' => "sl",
                'language' => "Slovenian",
                'native' => "Slovenščina"
            ],
            [
                'code' => "sm",
                'language' => "Samoan",
                'native' => "Gagana Samoa"
            ],
            [
                'code' => "sn",
                'language' => "Shona",
                'native' => "chiShona"
            ],
            [
                'code' => "so",
                'language' => "Somalia",
                'native' => "Soomaaliga"
            ],
            [
                'code' => "sq",
                'language' => "Albanian",
                'native' => "Shqip"
            ],
            [
                'code' => "sr",
                'language' => "Serbian",
                'native' => "Српски"
            ],
            [
                'code' => "ss",
                'language' => "Swati",
                'native' => "SiSwati"
            ],
            [
                'code' => "st",
                'language' => "Southern Sotho",
                'native' => "Sesotho"
            ],
            [
                'code' => "su",
                'language' => "Sundanese",
                'native' => "Basa Sunda"
            ],
            [
                'code' => "sv",
                'language' => "Swedish",
                'native' => "Svenska"
            ],
            [
                'code' => "sw",
                'language' => "Swahili",
                'native' => "Kiswahili"
            ],
            [
                'code' => "ta",
                'language' => "Tamil",
                'native' => "தமிழ்"
            ],
            [
                'code' => "te",
                'language' => "Telugu",
                'native' => "తెలుగు"
            ],
            [
                'code' => "tg",
                'language' => "Tajik",
                'native' => "Тоҷикӣ"
            ],
            [
                'code' => "th",
                'language' => "Thai",
                'native' => "ไทย / Phasa Thai"
            ],
            [
                'code' => "ti",
                'language' => "Tigrinya",
                'native' => "ትግርኛ"
            ],
            [
                'code' => "tk",
                'language' => "Turkmen",
                'native' => "Туркмен / تركمن"
            ],
            [
                'code' => "tl",
                'language' => "Tagalog / Filipino",
                'native' => "Tagalog"
            ],
            [
                'code' => "tn",
                'language' => "Tswana",
                'native' => "Setswana"
            ],
            [
                'code' => "to",
                'language' => "Tonga",
                'native' => "Lea Faka-Tonga"
            ],
            [
                'code' => "tr",
                'language' => "Turkish",
                'native' => "Türkçe"
            ],
            [
                'code' => "ts",
                'language' => "Tsonga",
                'native' => "Xitsonga"
            ],
            [
                'code' => "tt",
                'language' => "Tatar",
                'native' => "Tatarça"
            ],
            [
                'code' => "tw",
                'language' => "Twi",
                'native' => "Twi"
            ],
            [
                'code' => "ty",
                'language' => "Tahitian",
                'native' => "Reo Mā`ohi"
            ],
            [
                'code' => "ug",
                'language' => "Uyghur",
                'native' => "Uyƣurqə / ئۇيغۇرچە"
            ],
            [
                'code' => "uk",
                'language' => "Ukrainian",
                'native' => "Українська"
            ],
            [
                'code' => "ur",
                'language' => "Urdu",
                'native' => "اردو"
            ],
            [
                'code' => "uz",
                'language' => "Uzbek",
                'native' => "Ўзбек"
            ],
            [
                'code' => "ve",
                'language' => "Venda",
                'native' => "Tshivenḓa"
            ],
            [
                'code' => "vi",
                'language' => "Vietnamese",
                'native' => "Tiếng Việt"
            ],
            [
                'code' => "vo",
                'language' => "Volapük",
                'native' => "Volapük"
            ],
            [
                'code' => "wa",
                'language' => "Walloon",
                'native' => "Walon"
            ],
            [
                'code' => "wo",
                'language' => "Wolof",
                'native' => "Wollof"
            ],
            [
                'code' => "xh",
                'language' => "Xhosa",
                'native' => "isiXhosa"
            ],
            [
                'code' => "yi",
                'language' => "Yiddish",
                'native' => "ייִדיש"
            ],
            [
                'code' => "yo",
                'language' => "Yoruba",
                'native' => "Yorùbá"
            ],
            [
                'code' => "za",
                'language' => "Zhuang",
                'native' => "Cuengh / Tôô / 壮语"
            ],
            [
                'code' => "zh",
                'language' => "Chinese",
                'native' => "中文"
            ],
            [
                'code' => "zu",
                'language' => "Zulu",
                'native' => "isiZulu"
            ]
        ]);
    }
}
