<?php defined('BASEPATH') OR exit('No direct script access allowed');



/**
 * Quickly fetch the value of a framework configuration.
 *
 * @param string $key Configuration key.
 *
 * @return mixed Returns the configuration value.
 */
function config($key)
{
    $framework = &get_instance();

    return $framework->config->item($key);
}
