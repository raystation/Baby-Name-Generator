<?
function list_normal($gender="g"){

  if ($gender=="g") {
    $list=array(
      "Aria",
      "Gemma",
      "Sage",
      "Grace",
      "Avery",
      "Autumn",
      "Apple",
      "Avery",
      "Ygritte",
      "Cruella",
      "Geneivive",
    );
  } else {
    $list=array(
      "Maximus",
      "Gus",
      "Luke",
      "Lucas",
      "Scrimshaw",
      "Comma",
      "Anita",
      "Coco",
      "Danny",
      "Lucky",
      "Cadpig",
      "Wally",
      "Spot",
      "Dipstick",
      "Domino",
      "Freckles",
      "Horace",
      "Jasper",
      "Duffy",
      "Nanny",
      "Oddball",
      "Patch",
    );
  }
  return $list;
}

function list_basketball($gender="g"){
  if ($gender=="g") {
    $content=array(
    "Sage",
    "Willow",
    "Delly",
    );
  } else {
    $content=array(
      "Alonzo","Bill","Bismack","Biymombo","Bob","Charles","Clyde","David","DeAndre","DeMar","Dennis","DeShaun","Earl","Elgin","Elvin","George","Hakeem","Isiah","James","Jerry","John","Jordan","Julius","Kareem","Karl","Karl","Kenny","Kevin","Klay","Kyle","Larry","LeBron","Lenny","Magic","Michael","Moses","Muggsy","Nate","Reggie","Oscar","Patrick","Scottie","Scottie","Shaquille","Stephen","Walt","Willis","Wilt",
    );
  }
  return $content;
}

function scifi(){
  $array = array(
    "Mal",
    "Zoe",
    "Wash",
    "Inara",
    "Jayne",
    "Kaylee",
    "Simon",
    "River",
    "Book",
    "Serenity",
  );
  $array = array_merge( $array, startrek(), futurama(), starwars() );
  return $array;
}
function sports(){
  $array = array_merge( bball(), famous_sports_people() );
  return $array;
}
function television(){
  $array = array(
    // LOST
    "Jack","Kate","Hurley","Sawyer","Locke","Sayid","Jin","Sun","Claire","Charlie","Michael","Walt","Shannon","Boone","Rose","Christian","Danielle","Bernard","Desmond","Eko","Libby","Benjamin","Penny","Juliet","Miles","Charlotte",
    // MAD MEN
    "Don","Peggy","Pete","Betty","Joan","Roger","Bert","Ken","Harry","Bobby","Megan","Sally","Rachel","Lane","Stan","Sal","Allison","Lou","Joey","Jimmy","Bob","Glen","Helen","Ida",
    // WALKING DEAD
    "Rick","Shane","Lori","Andrea","Dale","Glenn","Carl","Daryl","Carol","Merle","Morgan","Maggie","Hershel","Michonne","Tyreese","Tara","Abraham","Eugene","Rosita","Gabriel","Negan",
    );
  $array = array_merge( $array, breaking_bad(), thrones() );
  return $array;
}

function bball(){
  $content=array(
    "Alonzo","Bill","Bismack","Biymombo","Bob","Charles","Clyde","David","DeAndre","DeMar","Dennis","DeShaun","Earl","Elgin","Elvin","George","Hakeem","Isiah","James","Jerry","John","Jordan","Julius","Kareem","Karl","Karl","Kenny","Kevin","Klay","Kyle","Larry","LeBron","Lenny","Magic","Magic","Michael","Moses","Muggsy","Nate","Reggie","Oscar","Patrick","Scottie","Scottie","Shaquille","Stephen","Walt","Willis","Wilt",
    );
  return $content;
}
function startrek(){
  $content=array(
    "Kirk","Spock","Leonard","McCoy","Montgomery","Hikaru","Sulu","Pavel","Chekov","Nyota","Uhura","Jean-Luc","Picard","Riker","Data","Geordi ","La Forge","Worf","Beverly","Crusher","Deanna","Troi","Natasha","Yar","Wesley","Sisko","Kira","Nerys","Odo","Worf","Jadzia","Dax","Julian","Bashir","Miles","O'Brien","Ezri","Dax","Quark","Kathryn","Janeway","Chakotay","Tuvok","Paris","B'Elanna","Torres","Harry Kim","Seven","Neelix","Jonathan Archer","T'Pol","Tucker","Malcolm","Reed","Travis","Mayweather","Hoshi","Sato","Phlox",);
  return $content;
}
function thrones(){
  $content=array(
    "Arya","Bran","Brienne","Bronn","Catelyn","Cersei","Daario","Daenerys","Davos","Drogo","Ellaria","Gendry","Gilly","Jaime","Jaqen","Jeor","Joffrey","Jon","Jorah","Margaery","Melisandre","Missandei","Ned","Petyr","Ramsay","Robb","Robert","Roose","Samwell","Sandor","Sansa","Shae","Stannis","Talisa","Theon","Tommen","Tormund","Tyrion","Tywin","Varys","Viserys","Ygritte",
    );
  return $content;
}
function starwars(){
  $content=array(
    "Darth","Vader","Han","Solo","Obi-Wan","Obi","Kenobi","Chewbacca","Yoda","Luke","Leia","Organa","Boba","Fett","Palpatine","Lando","Calrissian","Qui-Gon","Jinn","Maul","Padmé","Amidala","Jabba","Hutt","Wickett","Dooku","Jango","Fett","Grievous","Ren","Kylo","Rey","Finn","Artwo","Threepio",
    );
  return $content;
}
function futurama(){
  $content=array(
    "Philip","Fry","Turanga","Leela","Bender","Bending","Rodriguez","Amy","Wong","Hermes","Conrad","Hubert","Farnsworth","Zoidberg","Nibbler","Zapp","Brannigan","Kif","Kroker","Mom","Agnew","Calculon","Crushinator","Clamps","Elzar","Cubert","Flexo","Morbo","Scruffy",
  );
  return $content;
}
function breaking_bad(){
  $content=array(
    "Walter",
    "Skyler",
    "Jesse",
    "Hank",
    "Marie",
    "Walter",
    "Saul",
    "Gus",
  );
  return $content;
}
function famous_sports_people(){
  $content=array(
    "Ali",
    "Babe",
    "Beckham",
    "Bjorn",
    "Bo",
    "Bolt",
    "Borg",
    "Cam",
    "Costas",
    "Deion",
    "Evel",
    "Federer",
    "Foreman",
    "Henderson",
    "Joyner",
    "Knievel",
    "Lance",
    "Lionel",
    "Manning",
    "Manny",
    "Messi",
    "Newton",
    "Oscar",
    "Pele",
    "Peyton",
    "Rafael",
    "Rickey",
    "Tiger",
    "Tyson",
    "Usain",
    "Kerrigan",
    // "Billie Jean",
    // "Serena",
    // "Venus",
    // "Mia",
    // "Steffi",
    // "Ronda",
    // "Rousey",
    // "Dominique",
  );
  return $content;
}