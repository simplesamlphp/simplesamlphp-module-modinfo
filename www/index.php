<?php

$modules = SimpleSAML\Module::getModules();
sort($modules);

$modinfo = array();

foreach($modules as $m) {
	$modinfo[$m] = array(
		'enabled' => SimpleSAML\Module::isModuleEnabled($m),
	);
}


$config = SimpleSAML_Configuration::getInstance();
$t = new SimpleSAML_XHTML_Template($config, 'modinfo:modlist.php');
$t->data['modules'] = $modinfo;
$t->show();
