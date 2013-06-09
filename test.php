<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*
$f = file_get_contents('css/img/input_select.png');

$newdata=  base64_encode($f); 

echo $newdata;

?>
<img src="data:image/png;base64,<?php echo $newdata; ?>"/>
 * 
 */
//var_dump($_REQUEST);
function PMA_parseEnumSetValues($definition)
{
    $values_string = htmlentities($definition);
    // There is a JS port of the below parser in functions.js
    // If you are fixing something here,
    // you need to also update the JS port.
    $values = array();
    $in_string = false;
    $buffer = '';
    for ($i=0; $i<strlen($values_string); $i++) {
        $curr = $values_string[$i];
        $next = $i == strlen($values_string)-1 ? '' : $values_string[$i+1];
        if (! $in_string && $curr == "'") {
            $in_string = true;
        } else if ($in_string && $curr == "\\" && $next == "\\") {
            $buffer .= "&#92;";
            $i++;
        } else if ($in_string && $next == "'" && ($curr == "'" || $curr == "\\")) {
            $buffer .= "&#39;";
            $i++;
        } else if ($in_string && $curr == "'") {
            $in_string = false;
            $values[] = $buffer;
            $buffer = '';
        } else if ($in_string) {
             $buffer .= $curr;
        }
    }
    if (strlen($buffer) > 0) {
        // The leftovers in the buffer are the last value (if any)
        $values[] = $buffer;
    }
    return $values;
}
$definition = " enum('中国','美国')";
$definition = PMA_parseEnumSetValues($definition);
print_r($definition);
        
?>

<form name="form1">
    <input type="text" name="name[0][q]" value="12" />
    <input type="text" name="name[0][qq]" value="12" />
    <input type="text" name="name[1][b]" value="12" />
    <input type="text" name="name[1][bb]" value="12" />
    <input type="submit" value="submit" />
</form>
