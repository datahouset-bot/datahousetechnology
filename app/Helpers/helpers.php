<?php

if (! function_exists('global_asset')) {
    function global_asset($path)
    {
        return asset($path);
    }
}
