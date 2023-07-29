<?php
function asset_public($path, $secure = null)
{
    return asset("public/" . $path, $secure);
}?>
