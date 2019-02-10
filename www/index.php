<?php

$modules = \SimpleSAML\Module::getModules();
sort($modules);

$modinfo = array();

foreach ($modules as $m) {
    $modinfo[$m] = [
        'enabled' => \SimpleSAML\Module::isModuleEnabled($m),
    ];
}


$config = \SimpleSAML\Configuration::getInstance();
$t = new \SimpleSAML\XHTML\Template($config, 'modinfo:modlist.php');
$t->data['modules'] = $modinfo;
ksort($t->data['modules']);
$t->show();
