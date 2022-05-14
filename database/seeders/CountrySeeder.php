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
                'country' => "Andorra",
                'native' => "Andorra"
            ],
            [
                'code' => "AE",
                'country' => "United Arab Emirates",
                'native' => "دولة الإمارات العربية المتحدة"
            ],
            [
                'code' => "AF",
                'country' => "Afghanistan",
                'native' => "افغانستان"
            ],
            [
                'code' => "AG",
                'country' => "Antigua and Barbuda",
                'native' => "Antigua and Barbuda"
            ],
            [
                'code' => "AI",
                'country' => "Anguilla",
                'native' => "Anguilla"
            ],
            [
                'code' => "AL",
                'country' => "Albania",
                'native' => "Shqipëria"
            ],
            [
                'code' => "AM",
                'country' => "Armenia",
                'native' => "Հայաստան"
            ],
            [
                'code' => "AO",
                'country' => "Angola",
                'native' => "Angola"
            ],
            [
                'code' => "AQ",
                'country' => "Antarctica",
                'native' => "Antarctica"
            ],
            [
                'code' => "AR",
                'country' => "Argentina",
                'native' => "Argentina"
            ],
            [
                'code' => "AS",
                'country' => "American Samoa",
                'native' => "American Samoa"
            ],
            [
                'code' => "AT",
                'country' => "Austria",
                'native' => "Österreich"
            ],
            [
                'code' => "AU",
                'country' => "Australia",
                'native' => "Australia"
            ],
            [
                'code' => "AW",
                'country' => "Aruba",
                'native' => "Aruba"
            ],
            [
                'code' => "AX",
                'country' => "Åland",
                'native' => "Åland"
            ],
            [
                'code' => "AZ",
                'country' => "Azerbaijan",
                'native' => "Azərbaycan"
            ],
            [
                'code' => "BA",
                'country' => "Bosnia and Herzegovina",
                'native' => "Bosna i Hercegovina"
            ],
            [
                'code' => "BB",
                'country' => "Barbados",
                'native' => "Barbados"
            ],
            [
                'code' => "BD",
                'country' => "Bangladesh",
                'native' => "Bangladesh"
            ],
            [
                'code' => "BE",
                'country' => "Belgium",
                'native' => "België"
            ],
            [
                'code' => "BF",
                'country' => "Burkina Faso",
                'native' => "Burkina Faso"
            ],
            [
                'code' => "BG",
                'country' => "Bulgaria",
                'native' => "България"
            ],
            [
                'code' => "BH",
                'country' => "Bahrain",
                'native' => "‏البحرين"
            ],
            [
                'code' => "BI",
                'country' => "Burundi",
                'native' => "Burundi"
            ],
            [
                'code' => "BJ",
                'country' => "Benin",
                'native' => "Bénin"
            ],
            [
                'code' => "BL",
                'country' => "Saint Barthélemy",
                'native' => "Saint-Barthélemy"
            ],
            [
                'code' => "BM",
                'country' => "Bermuda",
                'native' => "Bermuda"
            ],
            [
                'code' => "BN",
                'country' => "Brunei",
                'native' => "Negara Brunei Darussalam"
            ],
            [
                'code' => "BO",
                'country' => "Bolivia",
                'native' => "Bolivia"
            ],
            [
                'code' => "BQ",
                'country' => "Bonaire",
                'native' => "Bonaire"
            ],
            [
                'code' => "BR",
                'country' => "Brazil",
                'native' => "Brasil"
            ],
            [
                'code' => "BS",
                'country' => "Bahamas",
                'native' => "Bahamas"
            ],
            [
                'code' => "BT",
                'country' => "Bhutan",
                'native' => "ʼbrug-yul"
            ],
            [
                'code' => "BV",
                'country' => "Bouvet Island",
                'native' => "Bouvetøya"
            ],
            [
                'code' => "BW",
                'country' => "Botswana",
                'native' => "Botswana"
            ],
            [
                'code' => "BY",
                'country' => "Belarus",
                'native' => "Белару́сь"
            ],
            [
                'code' => "BZ",
                'country' => "Belize",
                'native' => "Belize"
            ],
            [
                'code' => "CA",
                'country' => "Canada",
                'native' => "Canada"
            ],
            [
                'code' => "CC",
                'country' => "Cocos [Keeling] Islands",
                'native' => "Cocos (Keeling) Islands"
            ],
            [
                'code' => "CD",
                'country' => "Democratic Republic of the Congo",
                'native' => "République démocratique du Congo"
            ],
            [
                'code' => "CF",
                'country' => "Central African Republic",
                'native' => "Ködörösêse tî Bêafrîka"
            ],
            [
                'code' => "CG",
                'country' => "Republic of the Congo",
                'native' => "République du Congo"
            ],
            [
                'code' => "CH",
                'country' => "Switzerland",
                'native' => "Schweiz"
            ],
            [
                'code' => "CI",
                'country' => "Ivory Coast",
                'native' => "Côte d'Ivoire"
            ],
            [
                'code' => "CK",
                'country' => "Cook Islands",
                'native' => "Cook Islands"
            ],
            [
                'code' => "CL",
                'country' => "Chile",
                'native' => "Chile"
            ],
            [
                'code' => "CM",
                'country' => "Cameroon",
                'native' => "Cameroon"
            ],
            [
                'code' => "CN",
                'country' => "China",
                'native' => "中国"
            ],
            [
                'code' => "CO",
                'country' => "Colombia",
                'native' => "Colombia"
            ],
            [
                'code' => "CR",
                'country' => "Costa Rica",
                'native' => "Costa Rica"
            ],
            [
                'code' => "CU",
                'country' => "Cuba",
                'native' => "Cuba"
            ],
            [
                'code' => "CV",
                'country' => "Cape Verde",
                'native' => "Cabo Verde"
            ],
            [
                'code' => "CW",
                'country' => "Curacao",
                'native' => "Curaçao"
            ],
            [
                'code' => "CX",
                'country' => "Christmas Island",
                'native' => "Christmas Island"
            ],
            [
                'code' => "CY",
                'country' => "Cyprus",
                'native' => "Κύπρος"
            ],
            [
                'code' => "CZ",
                'country' => "Czech Republic",
                'native' => "Česká republika"
            ],
            [
                'code' => "DE",
                'country' => "Germany",
                'native' => "Deutschland"
            ],
            [
                'code' => "DJ",
                'country' => "Djibouti",
                'native' => "Djibouti"
            ],
            [
                'code' => "DK",
                'country' => "Denmark",
                'native' => "Danmark"
            ],
            [
                'code' => "DM",
                'country' => "Dominica",
                'native' => "Dominica"
            ],
            [
                'code' => "DO",
                'country' => "Dominican Republic",
                'native' => "República Dominicana"
            ],
            [
                'code' => "DZ",
                'country' => "Algeria",
                'native' => "الجزائر"
            ],
            [
                'code' => "EC",
                'country' => "Ecuador",
                'native' => "Ecuador"
            ],
            [
                'code' => "EE",
                'country' => "Estonia",
                'native' => "Eesti"
            ],
            [
                'code' => "EG",
                'country' => "Egypt",
                'native' => "مصر‎"
            ],
            [
                'code' => "EH",
                'country' => "Western Sahara",
                'native' => "الصحراء الغربية"
            ],
            [
                'code' => "ER",
                'country' => "Eritrea",
                'native' => "ኤርትራ"
            ],
            [
                'code' => "ES",
                'country' => "Spain",
                'native' => "España"
            ],
            [
                'code' => "ET",
                'country' => "Ethiopia",
                'native' => "ኢትዮጵያ"
            ],
            [
                'code' => "FI",
                'country' => "Finland",
                'native' => "Suomi"
            ],
            [
                'code' => "FJ",
                'country' => "Fiji",
                'native' => "Fiji"
            ],
            [
                'code' => "FK",
                'country' => "Falkland Islands",
                'native' => "Falkland Islands"
            ],
            [
                'code' => "FM",
                'country' => "Micronesia",
                'native' => "Micronesia"
            ],
            [
                'code' => "FO",
                'country' => "Faroe Islands",
                'native' => "Føroyar"
            ],
            [
                'code' => "FR",
                'country' => "France",
                'native' => "France"
            ],
            [
                'code' => "GA",
                'country' => "Gabon",
                'native' => "Gabon"
            ],
            [
                'code' => "GB",
                'country' => "United Kingdom",
                'native' => "United Kingdom"
            ],
            [
                'code' => "GD",
                'country' => "Grenada",
                'native' => "Grenada"
            ],
            [
                'code' => "GE",
                'country' => "Georgia",
                'native' => "საქართველო"
            ],
            [
                'code' => "GF",
                'country' => "French Guiana",
                'native' => "Guyane française"
            ],
            [
                'code' => "GG",
                'country' => "Guernsey",
                'native' => "Guernsey"
            ],
            [
                'code' => "GH",
                'country' => "Ghana",
                'native' => "Ghana"
            ],
            [
                'code' => "GI",
                'country' => "Gibraltar",
                'native' => "Gibraltar"
            ],
            [
                'code' => "GL",
                'country' => "Greenland",
                'native' => "Kalaallit Nunaat"
            ],
            [
                'code' => "GM",
                'country' => "Gambia",
                'native' => "Gambia"
            ],
            [
                'code' => "GN",
                'country' => "Guinea",
                'native' => "Guinée"
            ],
            [
                'code' => "GP",
                'country' => "Guadeloupe",
                'native' => "Guadeloupe"
            ],
            [
                'code' => "GQ",
                'country' => "Equatorial Guinea",
                'native' => "Guinea Ecuatorial"
            ],
            [
                'code' => "GR",
                'country' => "Greece",
                'native' => "Ελλάδα"
            ],
            [
                'code' => "GS",
                'country' => "South Georgia and the South Sandwich Islands",
                'native' => "South Georgia"
            ],
            [
                'code' => "GT",
                'country' => "Guatemala",
                'native' => "Guatemala"
            ],
            [
                'code' => "GU",
                'country' => "Guam",
                'native' => "Guam"
            ],
            [
                'code' => "GW",
                'country' => "Guinea-Bissau",
                'native' => "Guiné-Bissau"
            ],
            [
                'code' => "GY",
                'country' => "Guyana",
                'native' => "Guyana"
            ],
            [
                'code' => "HK",
                'country' => "Hong Kong",
                'native' => "香港"
            ],
            [
                'code' => "HM",
                'country' => "Heard Island and McDonald Islands",
                'native' => "Heard Island and McDonald Islands"
            ],
            [
                'code' => "HN",
                'country' => "Honduras",
                'native' => "Honduras"
            ],
            [
                'code' => "HR",
                'country' => "Croatia",
                'native' => "Hrvatska"
            ],
            [
                'code' => "HT",
                'country' => "Haiti",
                'native' => "Haïti"
            ],
            [
                'code' => "HU",
                'country' => "Hungary",
                'native' => "Magyarország"
            ],
            [
                'code' => "ID",
                'country' => "Indonesia",
                'native' => "Indonesia"
            ],
            [
                'code' => "IE",
                'country' => "Ireland",
                'native' => "Éire"
            ],
            [
                'code' => "IL",
                'country' => "Israel",
                'native' => "יִשְׂרָאֵל"
            ],
            [
                'code' => "IM",
                'country' => "Isle of Man",
                'native' => "Isle of Man"
            ],
            [
                'code' => "IN",
                'country' => "India",
                'native' => "भारत"
            ],
            [
                'code' => "IO",
                'country' => "British Indian Ocean Territory",
                'native' => "British Indian Ocean Territory"
            ],
            [
                'code' => "IQ",
                'country' => "Iraq",
                'native' => "العراق"
            ],
            [
                'code' => "IR",
                'country' => "Iran",
                'native' => "ایران"
            ],
            [
                'code' => "IS",
                'country' => "Iceland",
                'native' => "Ísland"
            ],
            [
                'code' => "IT",
                'country' => "Italy",
                'native' => "Italia"
            ],
            [
                'code' => "JE",
                'country' => "Jersey",
                'native' => "Jersey"
            ],
            [
                'code' => "JM",
                'country' => "Jamaica",
                'native' => "Jamaica"
            ],
            [
                'code' => "JO",
                'country' => "Jordan",
                'native' => "الأردن"
            ],
            [
                'code' => "JP",
                'country' => "Japan",
                'native' => "日本"
            ],
            [
                'code' => "KE",
                'country' => "Kenya",
                'native' => "Kenya"
            ],
            [
                'code' => "KG",
                'country' => "Kyrgyzstan",
                'native' => "Кыргызстан"
            ],
            [
                'code' => "KH",
                'country' => "Cambodia",
                'native' => "Kâmpŭchéa"
            ],
            [
                'code' => "KI",
                'country' => "Kiribati",
                'native' => "Kiribati"
            ],
            [
                'code' => "KM",
                'country' => "Comoros",
                'native' => "Komori"
            ],
            [
                'code' => "KN",
                'country' => "Saint Kitts and Nevis",
                'native' => "Saint Kitts and Nevis"
            ],
            [
                'code' => "KP",
                'country' => "North Korea",
                'native' => "북한"
            ],
            [
                'code' => "KR",
                'country' => "South Korea",
                'native' => "대한민국"
            ],
            [
                'code' => "KW",
                'country' => "Kuwait",
                'native' => "الكويت"
            ],
            [
                'code' => "KY",
                'country' => "Cayman Islands",
                'native' => "Cayman Islands"
            ],
            [
                'code' => "KZ",
                'country' => "Kazakhstan",
                'native' => "Қазақстан"
            ],
            [
                'code' => "LA",
                'country' => "Laos",
                'native' => "ສປປລາວ"
            ],
            [
                'code' => "LB",
                'country' => "Lebanon",
                'native' => "لبنان"
            ],
            [
                'code' => "LC",
                'country' => "Saint Lucia",
                'native' => "Saint Lucia"
            ],
            [
                'code' => "LI",
                'country' => "Liechtenstein",
                'native' => "Liechtenstein"
            ],
            [
                'code' => "LK",
                'country' => "Sri Lanka",
                'native' => "śrī laṃkāva"
            ],
            [
                'code' => "LR",
                'country' => "Liberia",
                'native' => "Liberia"
            ],
            [
                'code' => "LS",
                'country' => "Lesotho",
                'native' => "Lesotho"
            ],
            [
                'code' => "LT",
                'country' => "Lithuania",
                'native' => "Lietuva"
            ],
            [
                'code' => "LU",
                'country' => "Luxembourg",
                'native' => "Luxembourg"
            ],
            [
                'code' => "LV",
                'country' => "Latvia",
                'native' => "Latvija"
            ],
            [
                'code' => "LY",
                'country' => "Libya",
                'native' => "‏ليبيا"
            ],
            [
                'code' => "MA",
                'country' => "Morocco",
                'native' => "المغرب"
            ],
            [
                'code' => "MC",
                'country' => "Monaco",
                'native' => "Monaco"
            ],
            [
                'code' => "MD",
                'country' => "Moldova",
                'native' => "Moldova"
            ],
            [
                'code' => "ME",
                'country' => "Montenegro",
                'native' => "Црна Гора"
            ],
            [
                'code' => "MF",
                'country' => "Saint Martin",
                'native' => "Saint-Martin"
            ],
            [
                'code' => "MG",
                'country' => "Madagascar",
                'native' => "Madagasikara"
            ],
            [
                'code' => "MH",
                'country' => "Marshall Islands",
                'native' => "M̧ajeļ"
            ],
            [
                'code' => "MK",
                'country' => "North Macedonia",
                'native' => "Северна Македонија"
            ],
            [
                'code' => "ML",
                'country' => "Mali",
                'native' => "Mali"
            ],
            [
                'code' => "MM",
                'country' => "Myanmar [Burma]",
                'native' => "မြန်မာ"
            ],
            [
                'code' => "MN",
                'country' => "Mongolia",
                'native' => "Монгол улс"
            ],
            [
                'code' => "MO",
                'country' => "Macao",
                'native' => "澳門"
            ],
            [
                'code' => "MP",
                'country' => "Northern Mariana Islands",
                'native' => "Northern Mariana Islands"
            ],
            [
                'code' => "MQ",
                'country' => "Martinique",
                'native' => "Martinique"
            ],
            [
                'code' => "MR",
                'country' => "Mauritania",
                'native' => "موريتانيا"
            ],
            [
                'code' => "MS",
                'country' => "Montserrat",
                'native' => "Montserrat"
            ],
            [
                'code' => "MT",
                'country' => "Malta",
                'native' => "Malta"
            ],
            [
                'code' => "MU",
                'country' => "Mauritius",
                'native' => "Maurice"
            ],
            [
                'code' => "MV",
                'country' => "Maldives",
                'native' => "Maldives"
            ],
            [
                'code' => "MW",
                'country' => "Malawi",
                'native' => "Malawi"
            ],
            [
                'code' => "MX",
                'country' => "Mexico",
                'native' => "México"
            ],
            [
                'code' => "MY",
                'country' => "Malaysia",
                'native' => "Malaysia"
            ],
            [
                'code' => "MZ",
                'country' => "Mozambique",
                'native' => "Moçambique"
            ],
            [
                'code' => "NA",
                'country' => "Namibia",
                'native' => "Namibia"
            ],
            [
                'code' => "NC",
                'country' => "New Caledonia",
                'native' => "Nouvelle-Calédonie"
            ],
            [
                'code' => "NE",
                'country' => "Niger",
                'native' => "Niger"
            ],
            [
                'code' => "NF",
                'country' => "Norfolk Island",
                'native' => "Norfolk Island"
            ],
            [
                'code' => "NG",
                'country' => "Nigeria",
                'native' => "Nigeria"
            ],
            [
                'code' => "NI",
                'country' => "Nicaragua",
                'native' => "Nicaragua"
            ],
            [
                'code' => "NL",
                'country' => "Netherlands",
                'native' => "Nederland"
            ],
            [
                'code' => "NO",
                'country' => "Norway",
                'native' => "Norge"
            ],
            [
                'code' => "NP",
                'country' => "Nepal",
                'native' => "नपल"
            ],
            [
                'code' => "NR",
                'country' => "Nauru",
                'native' => "Nauru"
            ],
            [
                'code' => "NU",
                'country' => "Niue",
                'native' => "Niuē"
            ],
            [
                'code' => "NZ",
                'country' => "New Zealand",
                'native' => "New Zealand"
            ],
            [
                'code' => "OM",
                'country' => "Oman",
                'native' => "عمان"
            ],
            [
                'code' => "PA",
                'country' => "Panama",
                'native' => "Panamá"
            ],
            [
                'code' => "PE",
                'country' => "Peru",
                'native' => "Perú"
            ],
            [
                'code' => "PF",
                'country' => "French Polynesia",
                'native' => "Polynésie française"
            ],
            [
                'code' => "PG",
                'country' => "Papua New Guinea",
                'native' => "Papua Niugini"
            ],
            [
                'code' => "PH",
                'country' => "Philippines",
                'native' => "Pilipinas"
            ],
            [
                'code' => "PK",
                'country' => "Pakistan",
                'native' => "Pakistan"
            ],
            [
                'code' => "PL",
                'country' => "Poland",
                'native' => "Polska"
            ],
            [
                'code' => "PM",
                'country' => "Saint Pierre and Miquelon",
                'native' => "Saint-Pierre-et-Miquelon"
            ],
            [
                'code' => "PN",
                'country' => "Pitcairn Islands",
                'native' => "Pitcairn Islands"
            ],
            [
                'code' => "PR",
                'country' => "Puerto Rico",
                'native' => "Puerto Rico"
            ],
            [
                'code' => "PS",
                'country' => "Palestine",
                'native' => "فلسطين"
            ],
            [
                'code' => "PT",
                'country' => "Portugal",
                'native' => "Portugal"
            ],
            [
                'code' => "PW",
                'country' => "Palau",
                'native' => "Palau"
            ],
            [
                'code' => "PY",
                'country' => "Paraguay",
                'native' => "Paraguay"
            ],
            [
                'code' => "QA",
                'country' => "Qatar",
                'native' => "قطر"
            ],
            [
                'code' => "RE",
                'country' => "Réunion",
                'native' => "La Réunion"
            ],
            [
                'code' => "RO",
                'country' => "Romania",
                'native' => "România"
            ],
            [
                'code' => "RS",
                'country' => "Serbia",
                'native' => "Србија"
            ],
            [
                'code' => "RU",
                'country' => "Russia",
                'native' => "Россия"
            ],
            [
                'code' => "RW",
                'country' => "Rwanda",
                'native' => "Rwanda"
            ],
            [
                'code' => "SA",
                'country' => "Saudi Arabia",
                'native' => "العربية السعودية"
            ],
            [
                'code' => "SB",
                'country' => "Solomon Islands",
                'native' => "Solomon Islands"
            ],
            [
                'code' => "SC",
                'country' => "Seychelles",
                'native' => "Seychelles"
            ],
            [
                'code' => "SD",
                'country' => "Sudan",
                'native' => "السودان"
            ],
            [
                'code' => "SE",
                'country' => "Sweden",
                'native' => "Sverige"
            ],
            [
                'code' => "SG",
                'country' => "Singapore",
                'native' => "Singapore"
            ],
            [
                'code' => "SH",
                'country' => "Saint Helena",
                'native' => "Saint Helena"
            ],
            [
                'code' => "SI",
                'country' => "Slovenia",
                'native' => "Slovenija"
            ],
            [
                'code' => "SJ",
                'country' => "Svalbard and Jan Mayen",
                'native' => "Svalbard og Jan Mayen"
            ],
            [
                'code' => "SK",
                'country' => "Slovakia",
                'native' => "Slovensko"
            ],
            [
                'code' => "SL",
                'country' => "Sierra Leone",
                'native' => "Sierra Leone"
            ],
            [
                'code' => "SM",
                'country' => "San Marino",
                'native' => "San Marino"
            ],
            [
                'code' => "SN",
                'country' => "Senegal",
                'native' => "Sénégal"
            ],
            [
                'code' => "SO",
                'country' => "Somalia",
                'native' => "Soomaaliya"
            ],
            [
                'code' => "SR",
                'country' => "Suriname",
                'native' => "Suriname"
            ],
            [
                'code' => "SS",
                'country' => "South Sudan",
                'native' => "South Sudan"
            ],
            [
                'code' => "ST",
                'country' => "São Tomé and Príncipe",
                'native' => "São Tomé e Príncipe"
            ],
            [
                'code' => "SV",
                'country' => "El Salvador",
                'native' => "El Salvador"
            ],
            [
                'code' => "SX",
                'country' => "Sint Maarten",
                'native' => "Sint Maarten"
            ],
            [
                'code' => "SY",
                'country' => "Syria",
                'native' => "سوريا"
            ],
            [
                'code' => "SZ",
                'country' => "Swaziland",
                'native' => "Swaziland"
            ],
            [
                'code' => "TC",
                'country' => "Turks and Caicos Islands",
                'native' => "Turks and Caicos Islands"
            ],
            [
                'code' => "TD",
                'country' => "Chad",
                'native' => "Tchad"
            ],
            [
                'code' => "TF",
                'country' => "French Southern Territories",
                'native' => "Territoire des Terres australes et antarctiques fr"
            ],
            [
                'code' => "TG",
                'country' => "Togo",
                'native' => "Togo"
            ],
            [
                'code' => "TH",
                'country' => "Thailand",
                'native' => "ประเทศไทย"
            ],
            [
                'code' => "TJ",
                'country' => "Tajikistan",
                'native' => "Тоҷикистон"
            ],
            [
                'code' => "TK",
                'country' => "Tokelau",
                'native' => "Tokelau"
            ],
            [
                'code' => "TL",
                'country' => "East Timor",
                'native' => "Timor-Leste"
            ],
            [
                'code' => "TM",
                'country' => "Turkmenistan",
                'native' => "Türkmenistan"
            ],
            [
                'code' => "TN",
                'country' => "Tunisia",
                'native' => "تونس"
            ],
            [
                'code' => "TO",
                'country' => "Tonga",
                'native' => "Tonga"
            ],
            [
                'code' => "TR",
                'country' => "Turkey",
                'native' => "Türkiye"
            ],
            [
                'code' => "TT",
                'country' => "Trinidad and Tobago",
                'native' => "Trinidad and Tobago"
            ],
            [
                'code' => "TV",
                'country' => "Tuvalu",
                'native' => "Tuvalu"
            ],
            [
                'code' => "TW",
                'country' => "Taiwan",
                'native' => "臺灣"
            ],
            [
                'code' => "TZ",
                'country' => "Tanzania",
                'native' => "Tanzania"
            ],
            [
                'code' => "UA",
                'country' => "Ukraine",
                'native' => "Україна"
            ],
            [
                'code' => "UG",
                'country' => "Uganda",
                'native' => "Uganda"
            ],
            [
                'code' => "UM",
                'country' => "U.S. Minor Outlying Islands",
                'native' => "United States Minor Outlying Islands"
            ],
            [
                'code' => "US",
                'country' => "United States",
                'native' => "United States"
            ],
            [
                'code' => "UY",
                'country' => "Uruguay",
                'native' => "Uruguay"
            ],
            [
                'code' => "UZ",
                'country' => "Uzbekistan",
                'native' => "O‘zbekiston"
            ],
            [
                'code' => "VA",
                'country' => "Vatican City",
                'native' => "Vaticano"
            ],
            [
                'code' => "VC",
                'country' => "Saint Vincent and the Grenadines",
                'native' => "Saint Vincent and the Grenadines"
            ],
            [
                'code' => "VE",
                'country' => "Venezuela",
                'native' => "Venezuela"
            ],
            [
                'code' => "VG",
                'country' => "British Virgin Islands",
                'native' => "British Virgin Islands"
            ],
            [
                'code' => "VI",
                'country' => "U.S. Virgin Islands",
                'native' => "United States Virgin Islands"
            ],
            [
                'code' => "VN",
                'country' => "Vietnam",
                'native' => "Việt Nam"
            ],
            [
                'code' => "VU",
                'country' => "Vanuatu",
                'native' => "Vanuatu"
            ],
            [
                'code' => "WF",
                'country' => "Wallis and Futuna",
                'native' => "Wallis et Futuna"
            ],
            [
                'code' => "WS",
                'country' => "Samoa",
                'native' => "Samoa"
            ],
            [
                'code' => "XK",
                'country' => "Kosovo",
                'native' => "Republika e Kosovës"
            ],
            [
                'code' => "YE",
                'country' => "Yemen",
                'native' => "اليَمَن"
            ],
            [
                'code' => "YT",
                'country' => "Mayotte",
                'native' => "Mayotte"
            ],
            [
                'code' => "ZA",
                'country' => "South Africa",
                'native' => "South Africa"
            ],
            [
                'code' => "ZM",
                'country' => "Zambia",
                'native' => "Zambia"
            ],
            [
                'code' => "ZW",
                'country' => "Zimbabwe",
                'native' => "Zimbabwe"
            ]
        ]);
    }
}
