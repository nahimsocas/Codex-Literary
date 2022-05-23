<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'code' => "AD",
                'native' => "Andorra",
                'country' => "Andorra",
            ],
            [
                'code' => "AE",
                'native' => "دولة الإمارات العربية المتحدة",
                'country' => "United Arab Emirates",
            ],
            [
                'code' => "AF",
                'native' => "افغانستان",
                'country' => "Afghanistan",
            ],
            [
                'code' => "AG",
                'native' => "Antigua and Barbuda",
                'country' => "Antigua and Barbuda",
            ],
            [
                'code' => "AI",
                'native' => "Anguilla",
                'country' => "Anguilla",
            ],
            [
                'code' => "AL",
                'native' => "Shqipëria",
                'country' => "Albania",
            ],
            [
                'code' => "AM",
                'native' => "Հայաստան",
                'country' => "Armenia",
            ],
            [
                'code' => "AO",
                'native' => "Angola",
                'country' => "Angola",
            ],
            [
                'code' => "AQ",
                'native' => "Antarctica",
                'country' => "Antarctica",
            ],
            [
                'code' => "AR",
                'native' => "Argentina",
                'country' => "Argentina",
            ],
            [
                'code' => "AS",
                'native' => "American Samoa",
                'country' => "American Samoa",
            ],
            [
                'code' => "AT",
                'native' => "Österreich",
                'country' => "Austria",
            ],
            [
                'code' => "AU",
                'native' => "Australia",
                'country' => "Australia",
            ],
            [
                'code' => "AW",
                'native' => "Aruba",
                'country' => "Aruba",
            ],
            [
                'code' => "AX",
                'native' => "Åland",
                'country' => "Åland",
            ],
            [
                'code' => "AZ",
                'native' => "Azərbaycan",
                'country' => "Azerbaijan",
            ],
            [
                'code' => "BA",
                'native' => "Bosna i Hercegovina",
                'country' => "Bosnia and Herzegovina",
            ],
            [
                'code' => "BB",
                'native' => "Barbados",
                'country' => "Barbados",
            ],
            [
                'code' => "BD",
                'native' => "Bangladesh",
                'country' => "Bangladesh",
            ],
            [
                'code' => "BE",
                'native' => "België",
                'country' => "Belgium",
            ],
            [
                'code' => "BF",
                'native' => "Burkina Faso",
                'country' => "Burkina Faso",
            ],
            [
                'code' => "BG",
                'native' => "България",
                'country' => "Bulgaria",
            ],
            [
                'code' => "BH",
                'native' => "‏البحرين",
                'country' => "Bahrain",
            ],
            [
                'code' => "BI",
                'native' => "Burundi",
                'country' => "Burundi",
            ],
            [
                'code' => "BJ",
                'native' => "Bénin",
                'country' => "Benin",
            ],
            [
                'code' => "BL",
                'native' => "Saint-Barthélemy",
                'country' => "Saint Barthélemy",
            ],
            [
                'code' => "BM",
                'native' => "Bermuda",
                'country' => "Bermuda",
            ],
            [
                'code' => "BN",
                'native' => "Negara Brunei Darussalam",
                'country' => "Brunei",
            ],
            [
                'code' => "BO",
                'native' => "Bolivia",
                'country' => "Bolivia",
            ],
            [
                'code' => "BQ",
                'native' => "Bonaire",
                'country' => "Bonaire",
            ],
            [
                'code' => "BR",
                'native' => "Brasil",
                'country' => "Brazil",
            ],
            [
                'code' => "BS",
                'native' => "Bahamas",
                'country' => "Bahamas",
            ],
            [
                'code' => "BT",
                'native' => "ʼbrug-yul",
                'country' => "Bhutan",
            ],
            [
                'code' => "BV",
                'native' => "Bouvetøya",
                'country' => "Bouvet Island",
            ],
            [
                'code' => "BW",
                'native' => "Botswana",
                'country' => "Botswana",
            ],
            [
                'code' => "BY",
                'native' => "Белару́сь",
                'country' => "Belarus",
            ],
            [
                'code' => "BZ",
                'native' => "Belize",
                'country' => "Belize",
            ],
            [
                'code' => "CA",
                'native' => "Canada",
                'country' => "Canada",
            ],
            [
                'code' => "CC",
                'native' => "Cocos (Keeling) Islands",
                'country' => "Cocos [Keeling] Islands",
            ],
            [
                'code' => "CD",
                'native' => "République démocratique du Congo",
                'country' => "Democratic Republic of the Congo",
            ],
            [
                'code' => "CF",
                'native' => "Ködörösêse tî Bêafrîka",
                'country' => "Central African Republic",
            ],
            [
                'code' => "CG",
                'native' => "République du Congo",
                'country' => "Republic of the Congo",
            ],
            [
                'code' => "CH",
                'native' => "Schweiz",
                'country' => "Switzerland",
            ],
            [
                'code' => "CI",
                'native' => "Côte d'Ivoire",
                'country' => "Ivory Coast",
            ],
            [
                'code' => "CK",
                'native' => "Cook Islands",
                'country' => "Cook Islands",
            ],
            [
                'code' => "CL",
                'native' => "Chile",
                'country' => "Chile",
            ],
            [
                'code' => "CM",
                'native' => "Cameroon",
                'country' => "Cameroon",
            ],
            [
                'code' => "CN",
                'native' => "中国",
                'country' => "China",
            ],
            [
                'code' => "CO",
                'native' => "Colombia",
                'country' => "Colombia",
            ],
            [
                'code' => "CR",
                'native' => "Costa Rica",
                'country' => "Costa Rica",
            ],
            [
                'code' => "CU",
                'native' => "Cuba",
                'country' => "Cuba",
            ],
            [
                'code' => "CV",
                'native' => "Cabo Verde",
                'country' => "Cape Verde",
            ],
            [
                'code' => "CW",
                'native' => "Curaçao",
                'country' => "Curacao",
            ],
            [
                'code' => "CX",
                'native' => "Christmas Island",
                'country' => "Christmas Island",
            ],
            [
                'code' => "CY",
                'native' => "Κύπρος",
                'country' => "Cyprus",
            ],
            [
                'code' => "CZ",
                'native' => "Česká republika",
                'country' => "Czech Republic",
            ],
            [
                'code' => "DE",
                'native' => "Deutschland",
                'country' => "Germany",
            ],
            [
                'code' => "DJ",
                'native' => "Djibouti",
                'country' => "Djibouti",
            ],
            [
                'code' => "DK",
                'native' => "Danmark",
                'country' => "Denmark",
            ],
            [
                'code' => "DM",
                'native' => "Dominica",
                'country' => "Dominica",
            ],
            [
                'code' => "DO",
                'native' => "República Dominicana",
                'country' => "Dominican Republic",
            ],
            [
                'code' => "DZ",
                'native' => "الجزائر",
                'country' => "Algeria",
            ],
            [
                'code' => "EC",
                'native' => "Ecuador",
                'country' => "Ecuador",
            ],
            [
                'code' => "EE",
                'native' => "Eesti",
                'country' => "Estonia",
            ],
            [
                'code' => "EG",
                'native' => "مصر‎",
                'country' => "Egypt",
            ],
            [
                'code' => "EH",
                'native' => "الصحراء الغربية",
                'country' => "Western Sahara",
            ],
            [
                'code' => "ER",
                'native' => "ኤርትራ",
                'country' => "Eritrea",
            ],
            [
                'code' => "ES",
                'native' => "España",
                'country' => "Spain",
            ],
            [
                'code' => "ET",
                'native' => "ኢትዮጵያ",
                'country' => "Ethiopia",
            ],
            [
                'code' => "FI",
                'native' => "Suomi",
                'country' => "Finland",
            ],
            [
                'code' => "FJ",
                'native' => "Fiji",
                'country' => "Fiji",
            ],
            [
                'code' => "FK",
                'native' => "Falkland Islands",
                'country' => "Falkland Islands",
            ],
            [
                'code' => "FM",
                'native' => "Micronesia",
                'country' => "Micronesia",
            ],
            [
                'code' => "FO",
                'native' => "Føroyar",
                'country' => "Faroe Islands",
            ],
            [
                'code' => "FR",
                'native' => "France",
                'country' => "France",
            ],
            [
                'code' => "GA",
                'native' => "Gabon",
                'country' => "Gabon",
            ],
            [
                'code' => "GB",
                'native' => "United Kingdom",
                'country' => "United Kingdom",
            ],
            [
                'code' => "GD",
                'native' => "Grenada",
                'country' => "Grenada",
            ],
            [
                'code' => "GE",
                'native' => "საქართველო",
                'country' => "Georgia",
            ],
            [
                'code' => "GF",
                'native' => "Guyane française",
                'country' => "French Guiana",
            ],
            [
                'code' => "GG",
                'native' => "Guernsey",
                'country' => "Guernsey",
            ],
            [
                'code' => "GH",
                'native' => "Ghana",
                'country' => "Ghana",
            ],
            [
                'code' => "GI",
                'native' => "Gibraltar",
                'country' => "Gibraltar",
            ],
            [
                'code' => "GL",
                'native' => "Kalaallit Nunaat",
                'country' => "Greenland",
            ],
            [
                'code' => "GM",
                'native' => "Gambia",
                'country' => "Gambia",
            ],
            [
                'code' => "GN",
                'native' => "Guinée",
                'country' => "Guinea",
            ],
            [
                'code' => "GP",
                'native' => "Guadeloupe",
                'country' => "Guadeloupe",
            ],
            [
                'code' => "GQ",
                'native' => "Guinea Ecuatorial",
                'country' => "Equatorial Guinea",
            ],
            [
                'code' => "GR",
                'native' => "Ελλάδα",
                'country' => "Greece",
            ],
            [
                'code' => "GS",
                'native' => "South Georgia",
                'country' => "South Georgia and the South Sandwich Islands",
            ],
            [
                'code' => "GT",
                'native' => "Guatemala",
                'country' => "Guatemala",
            ],
            [
                'code' => "GU",
                'native' => "Guam",
                'country' => "Guam",
            ],
            [
                'code' => "GW",
                'native' => "Guiné-Bissau",
                'country' => "Guinea-Bissau",
            ],
            [
                'code' => "GY",
                'native' => "Guyana",
                'country' => "Guyana",
            ],
            [
                'code' => "HK",
                'native' => "香港",
                'country' => "Hong Kong",
            ],
            [
                'code' => "HM",
                'native' => "Heard Island and McDonald Islands",
                'country' => "Heard Island and McDonald Islands",
            ],
            [
                'code' => "HN",
                'native' => "Honduras",
                'country' => "Honduras",
            ],
            [
                'code' => "HR",
                'native' => "Hrvatska",
                'country' => "Croatia",
            ],
            [
                'code' => "HT",
                'native' => "Haïti",
                'country' => "Haiti",
            ],
            [
                'code' => "HU",
                'native' => "Magyarország",
                'country' => "Hungary",
            ],
            [
                'code' => "ID",
                'native' => "Indonesia",
                'country' => "Indonesia",
            ],
            [
                'code' => "IE",
                'native' => "Éire",
                'country' => "Ireland",
            ],
            [
                'code' => "IL",
                'native' => "יִשְׂרָאֵל",
                'country' => "Israel",
            ],
            [
                'code' => "IM",
                'native' => "Isle of Man",
                'country' => "Isle of Man",
            ],
            [
                'code' => "IN",
                'native' => "भारत",
                'country' => "India",
            ],
            [
                'code' => "IO",
                'native' => "British Indian Ocean Territory",
                'country' => "British Indian Ocean Territory",
            ],
            [
                'code' => "IQ",
                'native' => "العراق",
                'country' => "Iraq",
            ],
            [
                'code' => "IR",
                'native' => "ایران",
                'country' => "Iran",
            ],
            [
                'code' => "IS",
                'native' => "Ísland",
                'country' => "Iceland",
            ],
            [
                'code' => "IT",
                'native' => "Italia",
                'country' => "Italy",
            ],
            [
                'code' => "JE",
                'native' => "Jersey",
                'country' => "Jersey",
            ],
            [
                'code' => "JM",
                'native' => "Jamaica",
                'country' => "Jamaica",
            ],
            [
                'code' => "JO",
                'native' => "الأردن",
                'country' => "Jordan",
            ],
            [
                'code' => "JP",
                'native' => "日本",
                'country' => "Japan",
            ],
            [
                'code' => "KE",
                'native' => "Kenya",
                'country' => "Kenya",
            ],
            [
                'code' => "KG",
                'native' => "Кыргызстан",
                'country' => "Kyrgyzstan",
            ],
            [
                'code' => "KH",
                'native' => "Kâmpŭchéa",
                'country' => "Cambodia",
            ],
            [
                'code' => "KI",
                'native' => "Kiribati",
                'country' => "Kiribati",
            ],
            [
                'code' => "KM",
                'native' => "Komori",
                'country' => "Comoros",
            ],
            [
                'code' => "KN",
                'native' => "Saint Kitts and Nevis",
                'country' => "Saint Kitts and Nevis",
            ],
            [
                'code' => "KP",
                'native' => "북한",
                'country' => "North Korea",
            ],
            [
                'code' => "KR",
                'native' => "대한민국",
                'country' => "South Korea",
            ],
            [
                'code' => "KW",
                'native' => "الكويت",
                'country' => "Kuwait",
            ],
            [
                'code' => "KY",
                'native' => "Cayman Islands",
                'country' => "Cayman Islands",
            ],
            [
                'code' => "KZ",
                'native' => "Қазақстан",
                'country' => "Kazakhstan",
            ],
            [
                'code' => "LA",
                'native' => "ສປປລາວ",
                'country' => "Laos",
            ],
            [
                'code' => "LB",
                'native' => "لبنان",
                'country' => "Lebanon",
            ],
            [
                'code' => "LC",
                'native' => "Saint Lucia",
                'country' => "Saint Lucia",
            ],
            [
                'code' => "LI",
                'native' => "Liechtenstein",
                'country' => "Liechtenstein",
            ],
            [
                'code' => "LK",
                'native' => "śrī laṃkāva",
                'country' => "Sri Lanka",
            ],
            [
                'code' => "LR",
                'native' => "Liberia",
                'country' => "Liberia",
            ],
            [
                'code' => "LS",
                'native' => "Lesotho",
                'country' => "Lesotho",
            ],
            [
                'code' => "LT",
                'native' => "Lietuva",
                'country' => "Lithuania",
            ],
            [
                'code' => "LU",
                'native' => "Luxembourg",
                'country' => "Luxembourg",
            ],
            [
                'code' => "LV",
                'native' => "Latvija",
                'country' => "Latvia",
            ],
            [
                'code' => "LY",
                'native' => "‏ليبيا",
                'country' => "Libya",
            ],
            [
                'code' => "MA",
                'native' => "المغرب",
                'country' => "Morocco",
            ],
            [
                'code' => "MC",
                'native' => "Monaco",
                'country' => "Monaco",
            ],
            [
                'code' => "MD",
                'native' => "Moldova",
                'country' => "Moldova",
            ],
            [
                'code' => "ME",
                'native' => "Црна Гора",
                'country' => "Montenegro",
            ],
            [
                'code' => "MF",
                'native' => "Saint-Martin",
                'country' => "Saint Martin",
            ],
            [
                'code' => "MG",
                'native' => "Madagasikara",
                'country' => "Madagascar",
            ],
            [
                'code' => "MH",
                'native' => "M̧ajeļ",
                'country' => "Marshall Islands",
            ],
            [
                'code' => "MK",
                'native' => "Северна Македонија",
                'country' => "North Macedonia",
            ],
            [
                'code' => "ML",
                'native' => "Mali",
                'country' => "Mali",
            ],
            [
                'code' => "MM",
                'native' => "မြန်မာ",
                'country' => "Myanmar [Burma]",
            ],
            [
                'code' => "MN",
                'native' => "Монгол улс",
                'country' => "Mongolia",
            ],
            [
                'code' => "MO",
                'native' => "澳門",
                'country' => "Macao",
            ],
            [
                'code' => "MP",
                'native' => "Northern Mariana Islands",
                'country' => "Northern Mariana Islands",
            ],
            [
                'code' => "MQ",
                'native' => "Martinique",
                'country' => "Martinique",
            ],
            [
                'code' => "MR",
                'native' => "موريتانيا",
                'country' => "Mauritania",
            ],
            [
                'code' => "MS",
                'native' => "Montserrat",
                'country' => "Montserrat",
            ],
            [
                'code' => "MT",
                'native' => "Malta",
                'country' => "Malta",
            ],
            [
                'code' => "MU",
                'native' => "Maurice",
                'country' => "Mauritius",
            ],
            [
                'code' => "MV",
                'native' => "Maldives",
                'country' => "Maldives",
            ],
            [
                'code' => "MW",
                'native' => "Malawi",
                'country' => "Malawi",
            ],
            [
                'code' => "MX",
                'native' => "México",
                'country' => "Mexico",
            ],
            [
                'code' => "MY",
                'native' => "Malaysia",
                'country' => "Malaysia",
            ],
            [
                'code' => "MZ",
                'native' => "Moçambique",
                'country' => "Mozambique",
            ],
            [
                'code' => "NA",
                'native' => "Namibia",
                'country' => "Namibia",
            ],
            [
                'code' => "NC",
                'native' => "Nouvelle-Calédonie",
                'country' => "New Caledonia",
            ],
            [
                'code' => "NE",
                'native' => "Niger",
                'country' => "Niger",
            ],
            [
                'code' => "NF",
                'native' => "Norfolk Island",
                'country' => "Norfolk Island",
            ],
            [
                'code' => "NG",
                'native' => "Nigeria",
                'country' => "Nigeria",
            ],
            [
                'code' => "NI",
                'native' => "Nicaragua",
                'country' => "Nicaragua",
            ],
            [
                'code' => "NL",
                'native' => "Nederland",
                'country' => "Netherlands",
            ],
            [
                'code' => "NO",
                'native' => "Norge",
                'country' => "Norway",
            ],
            [
                'code' => "NP",
                'native' => "नपल",
                'country' => "Nepal",
            ],
            [
                'code' => "NR",
                'native' => "Nauru",
                'country' => "Nauru",
            ],
            [
                'code' => "NU",
                'native' => "Niuē",
                'country' => "Niue",
            ],
            [
                'code' => "NZ",
                'native' => "New Zealand",
                'country' => "New Zealand",
            ],
            [
                'code' => "OM",
                'native' => "عمان",
                'country' => "Oman",
            ],
            [
                'code' => "PA",
                'native' => "Panamá",
                'country' => "Panama",
            ],
            [
                'code' => "PE",
                'native' => "Perú",
                'country' => "Peru",
            ],
            [
                'code' => "PF",
                'native' => "Polynésie française",
                'country' => "French Polynesia",
            ],
            [
                'code' => "PG",
                'native' => "Papua Niugini",
                'country' => "Papua New Guinea",
            ],
            [
                'code' => "PH",
                'native' => "Pilipinas",
                'country' => "Philippines",
            ],
            [
                'code' => "PK",
                'native' => "Pakistan",
                'country' => "Pakistan",
            ],
            [
                'code' => "PL",
                'native' => "Polska",
                'country' => "Poland",
            ],
            [
                'code' => "PM",
                'native' => "Saint-Pierre-et-Miquelon",
                'country' => "Saint Pierre and Miquelon",
            ],
            [
                'code' => "PN",
                'native' => "Pitcairn Islands",
                'country' => "Pitcairn Islands",
            ],
            [
                'code' => "PR",
                'native' => "Puerto Rico",
                'country' => "Puerto Rico",
            ],
            [
                'code' => "PS",
                'native' => "فلسطين",
                'country' => "Palestine",
            ],
            [
                'code' => "PT",
                'native' => "Portugal",
                'country' => "Portugal",
            ],
            [
                'code' => "PW",
                'native' => "Palau",
                'country' => "Palau",
            ],
            [
                'code' => "PY",
                'native' => "Paraguay",
                'country' => "Paraguay",
            ],
            [
                'code' => "QA",
                'native' => "قطر",
                'country' => "Qatar",
            ],
            [
                'code' => "RE",
                'native' => "La Réunion",
                'country' => "Réunion",
            ],
            [
                'code' => "RO",
                'native' => "România",
                'country' => "Romania",
            ],
            [
                'code' => "RS",
                'native' => "Србија",
                'country' => "Serbia",
            ],
            [
                'code' => "RU",
                'native' => "Россия",
                'country' => "Russia",
            ],
            [
                'code' => "RW",
                'native' => "Rwanda",
                'country' => "Rwanda",
            ],
            [
                'code' => "SA",
                'native' => "العربية السعودية",
                'country' => "Saudi Arabia",
            ],
            [
                'code' => "SB",
                'native' => "Solomon Islands",
                'country' => "Solomon Islands",
            ],
            [
                'code' => "SC",
                'native' => "Seychelles",
                'country' => "Seychelles",
            ],
            [
                'code' => "SD",
                'native' => "السودان",
                'country' => "Sudan",
            ],
            [
                'code' => "SE",
                'native' => "Sverige",
                'country' => "Sweden",
            ],
            [
                'code' => "SG",
                'native' => "Singapore",
                'country' => "Singapore",
            ],
            [
                'code' => "SH",
                'native' => "Saint Helena",
                'country' => "Saint Helena",
            ],
            [
                'code' => "SI",
                'native' => "Slovenija",
                'country' => "Slovenia",
            ],
            [
                'code' => "SJ",
                'native' => "Svalbard og Jan Mayen",
                'country' => "Svalbard and Jan Mayen",
            ],
            [
                'code' => "SK",
                'native' => "Slovensko",
                'country' => "Slovakia",
            ],
            [
                'code' => "SL",
                'native' => "Sierra Leone",
                'country' => "Sierra Leone",
            ],
            [
                'code' => "SM",
                'native' => "San Marino",
                'country' => "San Marino",
            ],
            [
                'code' => "SN",
                'native' => "Sénégal",
                'country' => "Senegal",
            ],
            [
                'code' => "SO",
                'native' => "Soomaaliya",
                'country' => "Somalia",
            ],
            [
                'code' => "SR",
                'native' => "Suriname",
                'country' => "Suriname",
            ],
            [
                'code' => "SS",
                'native' => "South Sudan",
                'country' => "South Sudan",
            ],
            [
                'code' => "ST",
                'native' => "São Tomé e Príncipe",
                'country' => "São Tomé and Príncipe",
            ],
            [
                'code' => "SV",
                'native' => "El Salvador",
                'country' => "El Salvador",
            ],
            [
                'code' => "SX",
                'native' => "Sint Maarten",
                'country' => "Sint Maarten",
            ],
            [
                'code' => "SY",
                'native' => "سوريا",
                'country' => "Syria",
            ],
            [
                'code' => "SZ",
                'native' => "Swaziland",
                'country' => "Swaziland",
            ],
            [
                'code' => "TC",
                'native' => "Turks and Caicos Islands",
                'country' => "Turks and Caicos Islands",
            ],
            [
                'code' => "TD",
                'native' => "Tchad",
                'country' => "Chad",
            ],
            [
                'code' => "TF",
                'native' => "Territoire des Terres australes et antarctiques fr",
                'country' => "French Southern Territories",
            ],
            [
                'code' => "TG",
                'native' => "Togo",
                'country' => "Togo",
            ],
            [
                'code' => "TH",
                'native' => "ประเทศไทย",
                'country' => "Thailand",
            ],
            [
                'code' => "TJ",
                'native' => "Тоҷикистон",
                'country' => "Tajikistan",
            ],
            [
                'code' => "TK",
                'native' => "Tokelau",
                'country' => "Tokelau",
            ],
            [
                'code' => "TL",
                'native' => "Timor-Leste",
                'country' => "East Timor",
            ],
            [
                'code' => "TM",
                'native' => "Türkmenistan",
                'country' => "Turkmenistan",
            ],
            [
                'code' => "TN",
                'native' => "تونس",
                'country' => "Tunisia",
            ],
            [
                'code' => "TO",
                'native' => "Tonga",
                'country' => "Tonga",
            ],
            [
                'code' => "TR",
                'native' => "Türkiye",
                'country' => "Turkey",
            ],
            [
                'code' => "TT",
                'native' => "Trinidad and Tobago",
                'country' => "Trinidad and Tobago",
            ],
            [
                'code' => "TV",
                'native' => "Tuvalu",
                'country' => "Tuvalu",
            ],
            [
                'code' => "TW",
                'native' => "臺灣",
                'country' => "Taiwan",
            ],
            [
                'code' => "TZ",
                'native' => "Tanzania",
                'country' => "Tanzania",
            ],
            [
                'code' => "UA",
                'native' => "Україна",
                'country' => "Ukraine",
            ],
            [
                'code' => "UG",
                'native' => "Uganda",
                'country' => "Uganda",
            ],
            [
                'code' => "UM",
                'native' => "United States Minor Outlying Islands",
                'country' => "U.S. Minor Outlying Islands",
            ],
            [
                'code' => "US",
                'native' => "United States",
                'country' => "United States",
            ],
            [
                'code' => "UY",
                'native' => "Uruguay",
                'country' => "Uruguay",
            ],
            [
                'code' => "UZ",
                'native' => "O‘zbekiston",
                'country' => "Uzbekistan",
            ],
            [
                'code' => "VA",
                'native' => "Vaticano",
                'country' => "Vatican City",
            ],
            [
                'code' => "VC",
                'native' => "Saint Vincent and the Grenadines",
                'country' => "Saint Vincent and the Grenadines",
            ],
            [
                'code' => "VE",
                'native' => "Venezuela",
                'country' => "Venezuela",
            ],
            [
                'code' => "VG",
                'native' => "British Virgin Islands",
                'country' => "British Virgin Islands",
            ],
            [
                'code' => "VI",
                'native' => "United States Virgin Islands",
                'country' => "U.S. Virgin Islands",
            ],
            [
                'code' => "VN",
                'native' => "Việt Nam",
                'country' => "Vietnam",
            ],
            [
                'code' => "VU",
                'native' => "Vanuatu",
                'country' => "Vanuatu",
            ],
            [
                'code' => "WF",
                'native' => "Wallis et Futuna",
                'country' => "Wallis and Futuna",
            ],
            [
                'code' => "WS",
                'native' => "Samoa",
                'country' => "Samoa",
            ],
            [
                'code' => "XK",
                'native' => "Republika e Kosovës",
                'country' => "Kosovo",
            ],
            [
                'code' => "YE",
                'native' => "اليَمَن",
                'country' => "Yemen",
            ],
            [
                'code' => "YT",
                'native' => "Mayotte",
                'country' => "Mayotte",
            ],
            [
                'code' => "ZA",
                'native' => "South Africa",
                'country' => "South Africa",
            ],
            [
                'code' => "ZM",
                'native' => "Zambia",
                'country' => "Zambia",
            ],
            [
                'code' => "ZW",
                'native' => "Zimbabwe",
                'country' => "Zimbabwe",
            ]
        ]);
    }
}
