<?php

/**
 * This hook lets the module describe itself.
 *
 * @param array &$moduleinfo  The links on the frontpage, split into sections.
 * @return void
 */
function modinfo_hook_moduleinfo(&$moduleinfo)
{
    assert('is_array($moduleinfo)');
    assert('array_key_exists("info", $moduleinfo)');

    $moduleinfo['info']['modinfo'] = [
        'name' => ['en' => 'Module information'],
        'description' => ['en' => 'This module lists all available modules, and tells whether they are enabled or not.'],
        'dependencies' => ['core'],
        'uses' => ['sanitycheck'],
    ];
}
