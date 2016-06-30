<?
// ========================
//DEBUG
$debug=array();
$debug[]="lastName=$last_name";
// $debug[]="gender=$gender";
$debug[]="style=$style";
$debug_print="<ul>";

foreach ($debug as $key => $item) {
  $debug_print.="
  <li>$item
  ";
}
$debug_print.="</ul>";

$debug_html="
<div class='debug'>$debug_print</div>
";