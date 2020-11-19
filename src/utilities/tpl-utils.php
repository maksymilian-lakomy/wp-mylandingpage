<?php

namespace utilities\tpl;

function __template(string $name)
{
    return load_template(TEMPLATES_PATH . $name . '.php');
}
