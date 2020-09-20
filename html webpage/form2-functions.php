<?php

function displayOptions($options, $selectedValues){
    foreach($options as $option){
        $option = strtolower( $option ); // Banana or banana
        $selected = '';
        if(in_array($option, $selectedValues)) // or another way > if(in_array(strtolower($option, $selectedValues)))
            $selected = "selected";
            printf("<option value='%s' %s>%s</option>\n", $option, $selected, ucwords($option));
    }
}