<?php

function jquery_update_insert_head ($flux) {

    $old_jquery = '<script src="prive/javascript/jquery.js" type="text/javascript"></script>';

    $new_jquery = '<script src="' .
        find_in_path('javascript/jquery.js') .
        '" type="text/javascript"></script>';

    str_replace($old_jquery, $new_jquery, $flux);

    return $flux;
}
