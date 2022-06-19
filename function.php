<?php

function checkbox(string $name, string $value, array $data)
{
    $attributes = '';
    if(isset($data[$name]) && in_array($value, $data[$name]))
    {
        $attributes .= "checked";

    }

 echo   '<input type="checkbox" name="($name)[]" value="$value" $attributes >';
}
?>