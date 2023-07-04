<?php
function filterRequest($field)
{
    return addslashes(htmlspecialchars(strip_tags($_POST[$field])));
}
