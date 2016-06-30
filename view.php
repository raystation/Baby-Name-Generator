<?
// sets value in the text field if last name is set
$lastName_value = $last_name ? "value='$last_name'" : null ;
if ( is_null($last_name) ) {
  $last_name_placeholder="placeholder='optional'";
} elseif ($last_name=="") {
  $last_name_placeholder="placeholder='optional'";
} else {
  $last_name_placeholder=null;
}

// <!-- GENDER SELECT -->
// <select class='gender-select select-menu' name='gender' value='$gender'>
//   <option value='b' $selected_boy>boy</option>
//   <option value='g' $selected_girl>girl</option>
// </select>

$styles_html="";
foreach ($styles as $key => $style_menu) {
  if ($style_menu[1]==$style) {
    $selected_html="selected";
  } else {
    $selected_html="";
  }
  $styles_html.="
    <option value='$style_menu[1]' $selected_html>$style_menu[0]&nbsp;&nbsp;</option>
  ";
}

// sets the names to a html list
if ( $style!==null && $last_name!==null) {
  $print_list="";
  foreach ($list_names as $key => $list_name) {
    $print_list.="<li>$list_name $last_name";
  }
}

if ($style==null) {
  $content="
    <ol class='name-list'>
      Please pick a style and then hit submit.
    </ol>
  ";
} else {
  $content="
    <ol class='name-list'>
      $print_list
    </ol>
  ";
}

$page="
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8' />
  <title>Baby Name Generator</title>
  <link rel='stylesheet' href='$bootstrap_css_code'>
  <link rel='stylesheet' href='style/style.css'>
</head>
<body>
  <div class='container'>
    <div class='col-xs-12'>
      <h1>
        <a id='title' href='./'>Baby Name Generator</a>
      </h1>

      <form method='get' action='./''>

        <!-- LAST NAME -->
        Last Name:
        <input id='last-name-field' type='text' name='last_name' $last_name_placeholder $lastName_value>

        <!-- STYLE SELECT -->
        <p>
          <select class='select-menu' name='style' value='$style'>
            $styles_html
          </select>
        </p>

        <!-- OUTPUT -->
        $content

        <!-- SUBMIT BUTTON -->
        <input class='submit' type='submit' style='margin-top:40px;'>

      </form>

      <a href='../../'>
        <p style='margin-top:1em;font-size:0.75em'>
          back to Darth Pickle
        </p>
      </a>

    </div>
  </div>
  $bootstrap_js_code
  $debug_html
</body>
</html>
";