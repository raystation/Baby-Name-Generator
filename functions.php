<?

function get_baby_name($array){
  $rand = array_rand($array);
  return $array[$rand];
}

function get_list_names($array,$return_values=10) {
  shuffle($array);
  $list=array();
  $array_count=count($array); //48
  // echo $array_count;
  //if the value of $return_valuess is higher than array items, ???

  $counter=0;
  for ($i=0; $i < $return_values; $i++) {
    if ( $i == $array_count ) {
      $counter=0;
    }
    $list[] = $array[$counter];
    $counter++;
  }
  return $list;
}

// GETTING THE NAMES
//get the approps list based on the dropdown
function find_style($style){
  if (function_exists( $style )) {
    $list_names = get_list_names( $style());
  } else {
    $list_names=null;
  }
  return $list_names;
}