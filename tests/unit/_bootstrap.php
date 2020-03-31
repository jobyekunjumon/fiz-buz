<?php
/**
 * Autoloader function 
 * @author Joby E Kunjumon <jobyekunjumon@gmail.com>
 * @param string $className Name of class
 */
function autoLoad($className) {
    $file = __DIR__ . '/../../app/classes/'.$className.'.php';
    if(file_exists($file)) {
        require_once($file);
    }
} // end: function autoLoad

spl_autoload_register('autoLoad');