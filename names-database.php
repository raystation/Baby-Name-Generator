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

function bball(){
  $content=array(
    "Alonzo","Bill","Bismack","Biymombo","Bob","Charles","Clyde","David","DeAndre","DeMar","Dennis","DeShaun","Earl","Elgin","Elvin","George","Hakeem","Isiah","James","Jerry","John","Jordan","Julius","Kareem","Karl","Karl","Kenny","Kevin","Klay","Kyle","Larry","LeBron","Lenny","Magic","Magic","Michael","Moses","Muggsy","Nate","Reggie","Oscar","Patrick","Scottie","Scottie","Shaquille","Stephen","Walt","Willis","Wilt",
    );
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
    "Vader","Han","Solo","Obi-Wan","Obi","Kenobi","Chewbacca","Yoda","Luke","Leia","Organa","Boba","Fett","Palpatine","Lando","Calrissian","Qui-Gon","Jinn","Maul","Padmé","Amidala","Jabba","Hutt","Wickett","Dooku","Jango","Fett","Grievous","Ren","Kylo","Rey","Finn"
    );
  return $content;
}
function futurama(){
  $content=array(
    "Philip","Fry","Turanga","Leela","Bender","Bending","Rodriguez","Amy","Wong","Hermes","Conrad","Hubert","Farnsworth","Zoidberg","Nibbler","Zapp","Brannigan","Kif","Kroker","Mom","Agnew","Calculon","Crushinator","Clamps","Elzar","Cubert","Flexo","Morbo","Panucci","Scruffy",
  );
  return $content;
}