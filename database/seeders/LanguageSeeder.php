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
                'native' => "Afar",
                'language' => "Afar",
            ],
            [
                'code' => "ab",
                'native' => "Аҧсуа",
                'language' => "Abkhazian",
            ],
            [
                'code' => "af",
                'native' => "Afrikaans",
                'language' => "Afrikaans",
            ],
            [
                'code' => "ak",
                'native' => "Akana",
                'language' => "Akan",
            ],
            [
                'code' => "am",
                'native' => "አማርኛ",
                'language' => "Amharic",
            ],
            [
                'code' => "an",
                'native' => "Aragonés",
                'language' => "Aragonese",
            ],
            [
                'code' => "ar",
                'native' => "العربية",
                'language' => "Arabic",
            ],
            [
                'code' => "as",
                'native' => "অসমীয়া",
                'language' => "Assamese",
            ],
            [
                'code' => "av",
                'native' => "Авар",
                'language' => "Avar",
            ],
            [
                'code' => "ay",
                'native' => "Aymar",
                'language' => "Aymara",
            ],
            [
                'code' => "az",
                'native' => "Azərbaycanca / آذربايجان",
                'language' => "Azerbaijani",
            ],
            [
                'code' => "ba",
                'native' => "Башҡорт",
                'language' => "Bashkir",
            ],
            [
                'code' => "be",
                'native' => "Беларуская",
                'language' => "Belarusian",
            ],
            [
                'code' => "bg",
                'native' => "Български",
                'language' => "Bulgarian",
            ],
            [
                'code' => "bh",
                'native' => "भोजपुरी",
                'language' => "Bihari",
            ],
            [
                'code' => "bi",
                'native' => "Bislama",
                'language' => "Bislama",
            ],
            [
                'code' => "bm",
                'native' => "Bamanankan",
                'language' => "Bambara",
            ],
            [
                'code' => "bn",
                'native' => "বাংলা",
                'language' => "Bengali",
            ],
            [
                'code' => "bo",
                'native' => "བོད་ཡིག / Bod skad",
                'language' => "Tibetan",
            ],
            [
                'code' => "br",
                'native' => "Brezhoneg",
                'language' => "Breton",
            ],
            [
                'code' => "bs",
                'native' => "Bosanski",
                'language' => "Bosnian",
            ],
            [
                'code' => "ca",
                'native' => "Català",
                'language' => "Catalan",
            ],
            [
                'code' => "ce",
                'native' => "Нохчийн",
                'language' => "Chechen",
            ],
            [
                'code' => "ch",
                'native' => "Chamoru",
                'language' => "Chamorro",
            ],
            [
                'code' => "co",
                'native' => "Corsu",
                'language' => "Corsican",
            ],
            [
                'code' => "cr",
                'native' => "Nehiyaw",
                'language' => "Cree",
            ],
            [
                'code' => "cs",
                'native' => "Čeština",
                'language' => "Czech",
            ],
            [
                'code' => "cu",
                'native' => "словѣньскъ / slověnĭskŭ",
                'language' => "Old Church Slavonic / Old Bulgarian",
            ],
            [
                'code' => "cv",
                'native' => "Чăваш",
                'language' => "Chuvash",
            ],
            [
                'code' => "cy",
                'native' => "Cymraeg",
                'language' => "Welsh",
            ],
            [
                'code' => "da",
                'native' => "Dansk",
                'language' => "Danish",
            ],
            [
                'code' => "de",
                'native' => "Deutsch",
                'language' => "German",
            ],
            [
                'code' => "dv",
                'native' => "ދިވެހިބަސް",
                'language' => "Divehi",
            ],
            [
                'code' => "dz",
                'native' => "ཇོང་ཁ",
                'language' => "Dzongkha",
            ],
            [
                'code' => "ee",
                'native' => "Ɛʋɛ",
                'language' => "Ewe",
            ],
            [
                'code' => "el",
                'native' => "Ελληνικά",
                'language' => "Greek",
            ],
            [
                'code' => "en",
                'native' => "English",
                'language' => "English",
            ],
            [
                'code' => "eo",
                'native' => "Esperanto",
                'language' => "Esperanto",
            ],
            [
                'code' => "es",
                'native' => "Español",
                'language' => "Spanish",
            ],
            [
                'code' => "et",
                'native' => "Eesti",
                'language' => "Estonian",
            ],
            [
                'code' => "eu",
                'native' => "Euskara",
                'language' => "Basque",
            ],
            [
                'code' => "fa",
                'native' => "فارسی",
                'language' => "Persian",
            ],
            [
                'code' => "ff",
                'native' => "Fulfulde",
                'language' => "Peul",
            ],
            [
                'code' => "fi",
                'native' => "Suomi",
                'language' => "Finnish",
            ],
            [
                'code' => "fj",
                'native' => "Na Vosa Vakaviti",
                'language' => "Fijian",
            ],
            [
                'code' => "fo",
                'native' => "Føroyskt",
                'language' => "Faroese",
            ],
            [
                'code' => "fr",
                'native' => "Français",
                'language' => "French",
            ],
            [
                'code' => "fy",
                'native' => "Frysk",
                'language' => "West Frisian",
            ],
            [
                'code' => "ga",
                'native' => "Gaeilge",
                'language' => "Irish",
            ],
            [
                'code' => "gd",
                'native' => "Gàidhlig",
                'language' => "Scottish Gaelic",
            ],
            [
                'code' => "gl",
                'native' => "Galego",
                'language' => "Galician",
            ],
            [
                'code' => "gn",
                'native' => "Avañe'ẽ",
                'language' => "Guarani",
            ],
            [
                'code' => "gu",
                'native' => "ગુજરાતી",
                'language' => "Gujarati",
            ],
            [
                'code' => "gv",
                'native' => "Gaelg",
                'language' => "Manx",
            ],
            [
                'code' => "ha",
                'native' => "هَوُسَ",
                'language' => "Hausa",
            ],
            [
                'code' => "he",
                'native' => "עברית",
                'language' => "Hebrew",
            ],
            [
                'code' => "hi",
                'native' => "हिन्दी",
                'language' => "Hindi",
            ],
            [
                'code' => "ho",
                'native' => "Hiri Motu",
                'language' => "Hiri Motu",
            ],
            [
                'code' => "hr",
                'native' => "Hrvatski",
                'language' => "Croatian",
            ],
            [
                'code' => "ht",
                'native' => "Krèyol ayisyen",
                'language' => "Haitian",
            ],
            [
                'code' => "hu",
                'native' => "Magyar",
                'language' => "Hungarian",
            ],
            [
                'code' => "hy",
                'native' => "Հայերեն",
                'language' => "Armenian",
            ],
            [
                'code' => "hz",
                'native' => "Otsiherero",
                'language' => "Herero",
            ],
            [
                'code' => "ia",
                'native' => "Interlingua",
                'language' => "Interlingua",
            ],
            [
                'code' => "id",
                'native' => "Bahasa Indonesia",
                'language' => "Indonesian",
            ],
            [
                'code' => "ie",
                'native' => "Interlingue",
                'language' => "Interlingue",
            ],
            [
                'code' => "ig",
                'native' => "Igbo",
                'language' => "Igbo",
            ],
            [
                'code' => "ii",
                'native' => "ꆇꉙ / 四川彝语",
                'language' => "Sichuan Yi",
            ],
            [
                'code' => "ik",
                'native' => "Iñupiak",
                'language' => "Inupiak",
            ],
            [
                'code' => "io",
                'native' => "Ido",
                'language' => "Ido",
            ],
            [
                'code' => "is",
                'native' => "Íslenska",
                'language' => "Icelandic",
            ],
            [
                'code' => "it",
                'native' => "Italiano",
                'language' => "Italian",
            ],
            [
                'code' => "iu",
                'native' => "ᐃᓄᒃᑎᑐᑦ",
                'language' => "Inuktitut",
            ],
            [
                'code' => "ja",
                'native' => "日本語",
                'language' => "Japanese",
            ],
            [
                'code' => "jv",
                'native' => "Basa Jawa",
                'language' => "Javanese",
            ],
            [
                'code' => "ka",
                'native' => "ქართული",
                'language' => "Georgian",
            ],
            [
                'code' => "kg",
                'native' => "KiKongo",
                'language' => "Kongo",
            ],
            [
                'code' => "ki",
                'native' => "Gĩkũyũ",
                'language' => "Kikuyu",
            ],
            [
                'code' => "kj",
                'native' => "Kuanyama",
                'language' => "Kuanyama",
            ],
            [
                'code' => "kk",
                'native' => "Қазақша",
                'language' => "Kazakh",
            ],
            [
                'code' => "kl",
                'native' => "Kalaallisut",
                'language' => "Greenlandic",
            ],
            [
                'code' => "km",
                'native' => "ភាសាខ្មែរ",
                'language' => "Cambodian",
            ],
            [
                'code' => "kn",
                'native' => "ಕನ್ನಡ",
                'language' => "Kannada",
            ],
            [
                'code' => "ko",
                'native' => "한국어",
                'language' => "Korean",
            ],
            [
                'code' => "kr",
                'native' => "Kanuri",
                'language' => "Kanuri",
            ],
            [
                'code' => "ks",
                'native' => "कश्मीरी / كشميري",
                'language' => "Kashmiri",
            ],
            [
                'code' => "ku",
                'native' => "Kurdî / كوردی",
                'language' => "Kurdish",
            ],
            [
                'code' => "kv",
                'native' => "Коми",
                'language' => "Komi",
            ],
            [
                'code' => "kw",
                'native' => "Kernewek",
                'language' => "Cornish",
            ],
            [
                'code' => "ky",
                'native' => "Кыргызча",
                'language' => "Kyrgyz",
            ],
            [
                'code' => "la",
                'native' => "Latina",
                'language' => "Latin",
            ],
            [
                'code' => "lb",
                'native' => "Lëtzebuergesch",
                'language' => "Luxembourgish",
            ],
            [
                'code' => "lg",
                'native' => "Luganda",
                'language' => "Ganda",
            ],
            [
                'code' => "li",
                'native' => "Limburgs",
                'language' => "Limburgian",
            ],
            [
                'code' => "ln",
                'native' => "Lingála",
                'language' => "Lingala",
            ],
            [
                'code' => "lo",
                'native' => "ລາວ / Pha xa lao",
                'language' => "Laotian",
            ],
            [
                'code' => "lt",
                'native' => "Lietuvių",
                'language' => "Lithuanian",
            ],
            [
                'code' => "lu",
                'native' => "Tshiluba",
                'language' => "Luba-Katanga",
            ],
            [
                'code' => "lv",
                'native' => "Latviešu",
                'language' => "Latvian",
            ],
            [
                'code' => "mg",
                'native' => "Malagasy",
                'language' => "Malagasy",
            ],
            [
                'code' => "mh",
                'native' => "Kajin Majel / Ebon",
                'language' => "Marshallese",
            ],
            [
                'code' => "mi",
                'native' => "Māori",
                'language' => "Maori",
            ],
            [
                'code' => "mk",
                'native' => "Македонски",
                'language' => "Macedonian",
            ],
            [
                'code' => "ml",
                'native' => "മലയാളം",
                'language' => "Malayalam",
            ],
            [
                'code' => "mn",
                'native' => "Монгол",
                'language' => "Mongolian",
            ],
            [
                'code' => "mo",
                'native' => "Moldovenească",
                'language' => "Moldovan",
            ],
            [
                'code' => "mr",
                'native' => "मराठी",
                'language' => "Marathi",
            ],
            [
                'code' => "ms",
                'native' => "Bahasa Melayu",
                'language' => "Malay",
            ],
            [
                'code' => "mt",
                'native' => "bil-Malti",
                'language' => "Maltese",
            ],
            [
                'code' => "my",
                'native' => "မြန်မာစာ",
                'language' => "Burmese",
            ],
            [
                'code' => "na",
                'native' => "Dorerin Naoero",
                'language' => "Nauruan",
            ],
            [
                'code' => "nb",
                'native' => "Norsk bokmål",
                'language' => "Norwegian Bokmål",
            ],
            [
                'code' => "nd",
                'native' => "Sindebele",
                'language' => "North Ndebele",
            ],
            [
                'code' => "ne",
                'native' => "नेपाली",
                'language' => "Nepali",
            ],
            [
                'code' => "ng",
                'native' => "Oshiwambo",
                'language' => "Ndonga",
            ],
            [
                'code' => "nl",
                'native' => "Nederlands",
                'language' => "Dutch",
            ],
            [
                'code' => "nn",
                'native' => "Norsk nynorsk",
                'language' => "Norwegian Nynorsk",
            ],
            [
                'code' => "no",
                'native' => "Norsk",
                'language' => "Norwegian",
            ],
            [
                'code' => "nr",
                'native' => "isiNdebele",
                'language' => "South Ndebele",
            ],
            [
                'code' => "nv",
                'native' => "Diné bizaad",
                'language' => "Navajo",
            ],
            [
                'code' => "ny",
                'native' => "Chi-Chewa",
                'language' => "Chichewa",
            ],
            [
                'code' => "oc",
                'native' => "Occitan",
                'language' => "Occitan",
            ],
            [
                'code' => "oj",
                'native' => "ᐊᓂᔑᓈᐯᒧᐎᓐ / Anishinaabemowin",
                'language' => "Ojibwa",
            ],
            [
                'code' => "om",
                'native' => "Oromoo",
                'language' => "Oromo",
            ],
            [
                'code' => "or",
                'native' => "ଓଡ଼ିଆ",
                'language' => "Oriya",
            ],
            [
                'code' => "os",
                'native' => "Иронау",
                'language' => "Ossetian / Ossetic",
            ],
            [
                'code' => "pa",
                'native' => "ਪੰਜਾਬੀ / पंजाबी / پنجابي",
                'language' => "Panjabi / Punjabi",
            ],
            [
                'code' => "pi",
                'native' => "Pāli / पाऴि",
                'language' => "Pali",
            ],
            [
                'code' => "pl",
                'native' => "Polski",
                'language' => "Polish",
            ],
            [
                'code' => "ps",
                'native' => "پښتو",
                'language' => "Pashto",
            ],
            [
                'code' => "pt",
                'native' => "Português",
                'language' => "Portuguese",
            ],
            [
                'code' => "qu",
                'native' => "Runa Simi",
                'language' => "Quechua",
            ],
            [
                'code' => "rm",
                'native' => "Rumantsch",
                'language' => "Raeto Romance",
            ],
            [
                'code' => "rn",
                'native' => "Kirundi",
                'language' => "Kirundi",
            ],
            [
                'code' => "ro",
                'native' => "Română",
                'language' => "Romanian",
            ],
            [
                'code' => "ru",
                'native' => "Русский",
                'language' => "Russian",
            ],
            [
                'code' => "rw",
                'native' => "Kinyarwandi",
                'language' => "Rwandi",
            ],
            [
                'code' => "sa",
                'native' => "संस्कृतम्",
                'language' => "Sanskrit",
            ],
            [
                'code' => "sc",
                'native' => "Sardu",
                'language' => "Sardinian",
            ],
            [
                'code' => "sd",
                'native' => "सिनधि",
                'language' => "Sindhi",
            ],
            [
                'code' => "se",
                'native' => "Sámegiella",
                'language' => "Northern Sami",
            ],
            [
                'code' => "sg",
                'native' => "Sängö",
                'language' => "Sango",
            ],
            [
                'code' => "sh",
                'native' => "Srpskohrvatski / Српскохрватски",
                'language' => "Serbo-Croatian",
            ],
            [
                'code' => "si",
                'native' => "සිංහල",
                'language' => "Sinhalese",
            ],
            [
                'code' => "sk",
                'native' => "Slovenčina",
                'language' => "Slovak",
            ],
            [
                'code' => "sl",
                'native' => "Slovenščina",
                'language' => "Slovenian",
            ],
            [
                'code' => "sm",
                'native' => "Gagana Samoa",
                'language' => "Samoan",
            ],
            [
                'code' => "sn",
                'native' => "chiShona",
                'language' => "Shona",
            ],
            [
                'code' => "so",
                'native' => "Soomaaliga",
                'language' => "Somalia",
            ],
            [
                'code' => "sq",
                'native' => "Shqip",
                'language' => "Albanian",
            ],
            [
                'code' => "sr",
                'native' => "Српски",
                'language' => "Serbian",
            ],
            [
                'code' => "ss",
                'native' => "SiSwati",
                'language' => "Swati",
            ],
            [
                'code' => "st",
                'native' => "Sesotho",
                'language' => "Southern Sotho",
            ],
            [
                'code' => "su",
                'native' => "Basa Sunda",
                'language' => "Sundanese",
            ],
            [
                'code' => "sv",
                'native' => "Svenska",
                'language' => "Swedish",
            ],
            [
                'code' => "sw",
                'native' => "Kiswahili",
                'language' => "Swahili",
            ],
            [
                'code' => "ta",
                'native' => "தமிழ்",
                'language' => "Tamil",
            ],
            [
                'code' => "te",
                'native' => "తెలుగు",
                'language' => "Telugu",
            ],
            [
                'code' => "tg",
                'native' => "Тоҷикӣ",
                'language' => "Tajik",
            ],
            [
                'code' => "th",
                'native' => "ไทย / Phasa Thai",
                'language' => "Thai",
            ],
            [
                'code' => "ti",
                'native' => "ትግርኛ",
                'language' => "Tigrinya",
            ],
            [
                'code' => "tk",
                'native' => "Туркмен / تركمن",
                'language' => "Turkmen",
            ],
            [
                'code' => "tl",
                'native' => "Tagalog",
                'language' => "Tagalog / Filipino",
            ],
            [
                'code' => "tn",
                'native' => "Setswana",
                'language' => "Tswana",
            ],
            [
                'code' => "to",
                'native' => "Lea Faka-Tonga",
                'language' => "Tonga",
            ],
            [
                'code' => "tr",
                'native' => "Türkçe",
                'language' => "Turkish",
            ],
            [
                'code' => "ts",
                'native' => "Xitsonga",
                'language' => "Tsonga",
            ],
            [
                'code' => "tt",
                'native' => "Tatarça",
                'language' => "Tatar",
            ],
            [
                'code' => "tw",
                'native' => "Twi",
                'language' => "Twi",
            ],
            [
                'code' => "ty",
                'native' => "Reo Mā`ohi",
                'language' => "Tahitian",
            ],
            [
                'code' => "ug",
                'native' => "Uyƣurqə / ئۇيغۇرچە",
                'language' => "Uyghur",
            ],
            [
                'code' => "uk",
                'native' => "Українська",
                'language' => "Ukrainian",
            ],
            [
                'code' => "ur",
                'native' => "اردو",
                'language' => "Urdu",
            ],
            [
                'code' => "uz",
                'native' => "Ўзбек",
                'language' => "Uzbek",
            ],
            [
                'code' => "ve",
                'native' => "Tshivenḓa",
                'language' => "Venda",
            ],
            [
                'code' => "vi",
                'native' => "Tiếng Việt",
                'language' => "Vietnamese",
            ],
            [
                'code' => "vo",
                'native' => "Volapük",
                'language' => "Volapük",
            ],
            [
                'code' => "wa",
                'native' => "Walon",
                'language' => "Walloon",
            ],
            [
                'code' => "wo",
                'native' => "Wollof",
                'language' => "Wolof",
            ],
            [
                'code' => "xh",
                'native' => "isiXhosa",
                'language' => "Xhosa",
            ],
            [
                'code' => "yi",
                'native' => "ייִדיש",
                'language' => "Yiddish",
            ],
            [
                'code' => "yo",
                'native' => "Yorùbá",
                'language' => "Yoruba",
            ],
            [
                'code' => "za",
                'native' => "Cuengh / Tôô / 壮语",
                'language' => "Zhuang",
            ],
            [
                'code' => "zh",
                'native' => "中文",
                'language' => "Chinese",
            ],
            [
                'code' => "zu",
                'native' => "isiZulu",
                'language' => "Zulu",
            ]
        ]);
    }
}
