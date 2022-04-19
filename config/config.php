<?php
define("DB_HOST", "localhost");
define("DB_USR", "root");
define("DB_PASS", "");
define("DB_DB", "simuladormundial");
define("DB_PORT", 3308);
//define(DB_TYPE, "mysql");

$template_config =
    array(
        'template_dir' => 'vistas/',
        'compile_dir' => 'libs/smarty/templates_c/',
        'cache_dir' => 'libs/smarty/cache/',
        'config_dir' => 'libs/smarty/configs/',
    );
define("URL_BASE", "/clasePHP/clase6/Simulador-Mundial-2022/");