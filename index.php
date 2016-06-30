<?
// baby name generator

//all functions
include "../../functions.php";

//project specific functions
include "functions.php";

include "names-database.php";

// $gender = get( $_GET["gender"], "b" );
$style = (isset( $_GET["style"] ) ? $_GET["style"] : null );
$last_name = (isset( $_GET["last_name"] ) ? $_GET["last_name"] : null );
// $selected_boy=''; $selected_girl='';
// if ($gender=="b") {
//   $selected_boy=' selected';
// } else {
//   $selected_girl='selected';
// }

// STYLES LIST
$styles=array(
  // array("Basketball","bball"),
  array("Science Fiction","scifi"),
  array("Sports","sports"),
  array("Television","television"),
  // array("Game of Thrones","thrones"),
  // array("Star Wars","starwars"),
  // array("Futurama","futurama"),
);

// get the names if the style is set
$list_names = ($style) ? find_style($style) : null;

require_once "debug.php";
require_once "view.php";

echo $page;