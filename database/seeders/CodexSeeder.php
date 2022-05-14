<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codexes')->insert([
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780670023486.jpg",
                'title' => "SHADOW OF NIGHT",
                'description' => "An Oxford scholar/witch and a vampire geneticist pursue history, secrets and each other in Elizabethan London.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780307588388.jpg",
                'title' => "GONE GIRL",
                'description' => "A woman disappears on the day of her fifth anniversary; is her husband a killer?",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780399157325.jpg",
                'title' => "BACKFIRE",
                'description' => "The F.B.I. agents Dillon Savich and Lacey Sherlock investigate the murder of a judge.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781451617771.jpg",
                'title' => "THE NEXT BEST THING",
                'description' => "A young woman who moves to Hollywood to make it in television finds success, but her life remains complicated.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780345527776.jpg",
                'title' => "WICKED BUSINESS",
                'description' => "The Salem, Mass., pastry chef Lizzy Tucker and her partner, Diesel, take up a quest for a powerful ancient relic.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062106063.jpg",
                'title' => "THE GREAT ESCAPE",
                'description' => "A young woman runs out on her wedding in search of herself — and a new man.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780553582017.jpg",
                'title' => "A DANCE WITH DRAGONS",
                'description' => "Book 5 of \"A Song of Ice and Fire.\"",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062206282.jpg",
                'title' => "THE PRISONER OF HEAVEN",
                'description' => "In 1950s Barcelona, two friends pursue a secret from the early days of Franco’s dictatorship.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781101585535.jpg",
                'title' => "NIGHT WATCH",
                'description' => "The prosecutor Alexandra Cooper becomes involved when a wealthy man assaults a maid in a Manhattan hotel.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780345528506.jpg",
                'title' => "CRIMINAL",
                'description' => "Will Trent of the Georgia Bureau of Investigation and his supervisor, Amanda Wagner, confront mysteries from the past.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781400069484.jpg",
                'title' => "MISSION TO PARIS",
                'description' => "In Paris in 1938, an actor stumbles into the clutches of Nazi conspirators who want to exploit his celebrity.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780385536080.jpg",
                'title' => "CALICO JOE",
                'description' => "A pitcher beans a promising rookie, ending both their careers; years later, the pitcher’s son brings them together.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780061785665.jpg",
                'title' => "BLOODLINE",
                'description' => "A deadly rescue mission in the African jungle and a clinic bombing in South Carolina both reveal a dangerous conspiracy; a Sigma Force novel.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780061928123.jpg",
                'title' => "BEAUTIFUL RUINS",
                'description' => "Ruins both emotional and architectural, in Italy, Hollywood and elsewhere, figure in this sweeping novel.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780679644385.jpg",
                'title' => "THE AGE OF MIRACLES",
                'description' => "A girl comes of age as an apocalypse caused by a slowing of the earth’s rotation looms.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780061655975.jpg",
                'title' => "15 SECONDS",
                'description' => "Dr Henry Steadman has it all: a booming business, a daughter he loves, and plenty of time to enjoy life. But while visiting upstate Florida, a police-stop ends in the shooting of a local cop - with Henry as the prime suspect. Framed for a second murder, this time of a close friend, Henry goes on the run.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780061961298.jpg",
                'title' => "PORCH LIGHTS",
                'description' => "The widow of a New York City firefighter returns to her Lowcountry South Carolina home.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781400079155.jpg",
                'title' => "INFERNO",
                'description' => "The symbologist Robert Langdon, on the run in Florence, must decipher a series of codes created by a Dante-loving scientist. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781476717104.jpg",
                'title' => "HIDDEN ORDER",
                'description' => "As the counterterrorism operative Scot Harvath searches for the murderer of candidates to head a powerful, mysterious agency, he uncovers a plot with roots in the 18th century.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781594632389.jpg",
                'title' => "AND THE MOUNTAINS ECHOED",
                'description' => "A multigenerational family saga centers on a brother and sister born in Afghanistan; from the author of “The Kite Runner.”",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062255662.jpg",
                'title' => "THE OCEAN AT THE END OF THE LANE",
                'description' => "A middle-aged man recalls his lonely boyhood and his friendship with a remarkable girl.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781101637197.jpg",
                'title' => "BOMBSHELL",
                'description' => "After the F.B.I. special agent Griffin Hammersmith accepts Dillon Savich’s invitation to join him and Lacey Sherlock, Hammersmith’s sister is savagely beaten.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780446556149.jpg",
                'title' => "BAD MONKEY",
                'description' => "A defrocked Miami cop turned restaurant inspector investigates a grisly murder.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781594746376.jpg",
                'title' => "WILLIAM SHAKESPEARE'S STAR WARS",
                'description' => "Verily, a new hope: The story of a beautiful princess, a hero coming of age, a wise knight and an evil lord, retold in iambic pentameter. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780385534819.jpg",
                'title' => "THE LIGHT IN THE RUINS",
                'description' => "Memories of World War II are evoked in 1955 when a Florentine police investigator, a former partisan, tries to find a serial killer who has targeted a Tuscan nobleman’s family.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781451661545.jpg",
                'title' => "THE SILVER STAR",
                'description' => "When their irresponsible mother takes off, a 12-year-old California girl and her sister join the rest of their family in Virginia. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780061784804.jpg",
                'title' => "THE EYE OF GOD",
                'description' => "As the end of the world looms, Cmdr. Gray Pierce and Sigma Force race to uncover an ancient mystery. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780425255704.jpg",
                'title' => "AFFLICTION",
                'description' => "The vampire hunter Anita Blake encounters a dangerous new breed of zombies. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780345511423.jpg",
                'title' => "CRUCIBLE",
                'description' => "Star Wars: Crucible is a Star Wars novel written by Troy Denning, released by Del Rey Books on July 9, 2013. Featuring Luke Skywalker, Han Solo and Leia Organa Solo, it is set 45 years after the 1977 film Star Wars.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780812994407.jpg",
                'title' => "SISTERLAND",
                'description' => "Twin sisters share psychic powers. One suppresses her ability while trying to fit in as a suburban housewife; the other cultivates her unusual gifts and becomes a professional medium.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062132451.jpg",
                'title' => "THE LAST ORIGINAL WIFE",
                'description' => "An Atlanta woman returns to her hometown, Charleston, to reassess her life. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062120397.jpg",
                'title' => "THE SON",
                'description' => "A multigenerational saga of power, blood, land and oil that follows the rise of one Texas family, from Comanche raids to the present.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781621572039.jpg",
                'title' => "AMERICA",
                'description' => "A defense of America against the view that its power in the world should be diminished; also a documentary film. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781621573135.jpg",
                'title' => "BLOOD FEUD",
                'description' => "A journalist describes animosity behind the alliance between the Clinton and Obama families.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781476751450.jpg",
                'title' => "HARD CHOICES",
                'description' => "Clinton’s memoir focuses on her years as secretary of state and her views about the American role in the world.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780674430006.jpg",
                'title' => "CAPITAL IN THE TWENTY-FIRST CENTURY",
                'description' => "A French economist’s analysis of centuries of economic history predicts worsening inequality and proposes solutions.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780316204361.jpg",
                'title' => "DAVID AND GOLIATH",
                'description' => "How disadvantages can work in our favor.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781101632048.jpg",
                'title' => "DIARY OF A MAD DIVA",
                'description' => "Humorous reflections about life, pop culture and celebrities. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780393244670.jpg",
                'title' => "FLASH BOYS",
                'description' => "The world of high-frequency computer-driven trading; from the author of \"Liar's Poker.\"",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780804140843.jpg",
                'title' => "THRIVE",
                'description' => "Personal well-being as the indispensable third measure — with money and power — of success. ",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781476753614.jpg",
                'title' => "THE OPPOSITE OF LONELINESS",
                'description' => "Essays and stories by a promising young writer who died in a car crash in 2012.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781594205224.jpg",
                'title' => "HOW NOT TO BE WRONG",
                'description' => "A mathematician shows how his discipline helps us think about problems of politics, medicine and commerce.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780385349178.jpg",
                'title' => "THINGS THAT MATTER",
                'description' => "Essays and reflections from the recently deceased conservative columnist.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781250020215.jpg",
                'title' => "THE ROMANOV SISTERS",
                'description' => "The story of the daughters of the last czar, who were executed in 1918.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781476762722.jpg",
                'title' => "PRIMATES OF PARK AVENUE",
                'description' => "A memoir of life among the wealthy women of the Upper East Side.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780802473158.jpg",
                'title' => "THE FIVE LOVE LANGUAGES",
                'description' => "How to communicate love with quality time, affirmative words, gifts, acts of service, and physical touch.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780385538749.jpg",
                'title' => "MISSOULA",
                'description' => "The author of “Into the Wild” discusses cases of acquaintance rape in Missoula, Mont., home of the University of Montana.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781592407330.jpg",
                'title' => "DARING GREATLY",
                'description' => "The courage to embrace one's vulnerability is a positive force in loving and living.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780802123411.jpg",
                'title' => "H IS FOR HAWK",
                'description' => "Overwhelmed by her father’s death, a British woman decides to raise a goshawk, a bird that is fierce and notoriously difficult to tame.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780399176494.jpg",
                'title' => "IF YOU FEEL TOO MUCH",
                'description' => "An invitation to embrace one's vulnerabilities and also the vulnerabilities of others.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781937006884.jpg",
                'title' => "HOW TO LOVE",
                'description' => "Mindful connections with other people.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781400203758.jpg",
                'title' => "LOVE DOES",
                'description' => "How to forge meaningful connections with strangers through positive actions.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062282712.jpg",
                'title' => "BAD FEMINIST",
                'description' => "A collection of essays on race, gender, politics and \"Sweet Valley High.\"",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780316208246.jpg",
                'title' => "ALTRUISM",
                'description' => "In Happiness, Matthieu Ricard demonstrated that true happiness is not tied to fleeting moments or sensations, but is an enduring state of soul rooted in mindfulness and compassion for others.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781555977078.jpg",
                'title' => "THE ARGONAUTS",
                'description' => "A memoir that explores the limits and possibilities of love and art, gender and identity, language and individual freedom in society, marriage and family-making.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781605501550.jpg",
                'title' => "WHY MEN LOVE BITCHES",
                'description' => "A thought-provoking and invaluable book for anyone who cares about risk communication and management in the 21st century.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9781455566396.jpg",
                'title' => "TRIBE",
                'description' => "How modern society’s loss of the sense of belonging — now achieved mostly in the military and in disasters — has led to income inequality, incivility and mental disorders like PTSD.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780399184123.jpg",
                'title' => "BUT WHAT IF WE'RE WRONG?",
                'description' => "Imagining the contemporary world as it will appear to those for whom it will be the distant past.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062316097.jpg",
                'title' => "SAPIENS",
                'description' => "How Homo sapiens became Earth’s dominant species.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062262264.jpg",
                'title' => "THE VIEW FROM THE CHEAP SEATS",
                'description' => "Selected nonfiction on aesthetic pleasures and narrative’s various forms and platforms.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062484222.jpg",
                'title' => "THE WORLD ACCORDING TO STAR WARS",
                'description' => "A look at the various ways the movie franchise illuminates political, moral, and familial themes.",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780544276000.jpg",
                'title' => "EVERYBODY BEHAVES BADLY",
                'description' => "The true story behind Ernest Hemingway's novel, \"The Sun Also Rises.\"",
                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780061966231.jpg",
                'title' => "THE HARVARD PSYCHEDELIC CLUB",
                'description' => "The influences of Timothy Leary, Ram Dass, Huston Smith and Andrew Weill in shaping and popularizing the \"New Age\" mind-body-spirit culture of the early sixties and into today.",                'languages_id' => 37
            ],
            [
                'cover' => "https://storage.googleapis.com/du-prd/books/images/9780062234322.jpg",
                'title' => "DIANE ARBUS",
                'description' => "A biography and assessment of the influential twentieth-century American photographer.",
                'languages_id' => 37
            ]
        ]);
    }
}
