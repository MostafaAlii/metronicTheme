<?php
/**
 * check app locale and change class from bottom-start to bottom-end 
 * if app locale is arabic change class from bottom-start to bottom-end else change class from bottom-end to bottom-start
 */
function bottomStartDirectionClass() {
    $class = 'bottom-start';
    if (app()->getLocale() == 'ar') {
        $class = 'bottom-end';
    }
    return $class;
}

function bottomEndDirectionClass() {
    $class = 'bottom-end';
    if (app()->getLocale() == 'ar') {
        $class = 'bottom-start';
    }
    return $class;
}

function rightStartDirectionClass() {
    $class = 'right-start';
    if (app()->getLocale() == 'ar') {
        $class = 'left-start';
    }
    return $class;
}

function leftStartDirectionClass() {
    $class = 'left-start';
    if (app()->getLocale() == 'ar') {
        $class = 'right-start';
    }
    return $class;
}