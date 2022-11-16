<?php
require_once '../Libraries/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:secret@mysql-server/mydata1'
    ));
});
// defined active records connection 