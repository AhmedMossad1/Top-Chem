<?php

function is_active(string $routeName)
{
    return null !== request()->segment(2) && request()->segment(2) == $routeName ? 'active' : '';
}
function slug(string $name){
    return strtolower(trim(str_replace(' ' , '_'  ,$name)));
}
?>
