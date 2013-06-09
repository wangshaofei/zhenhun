<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_education'))
{
	function get_education($index)
	{
            global $CFG;
            return $CFG->config['education'][$index];
	}
}

/**
 * Parses ENUM/SET values
 * show columns from t_member like 'user_id';
 * @param string $definition The definition of the column
 *                           for which to parse the values
 *
 * @return array
 */
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
