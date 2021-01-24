<?php

declare(strict_types=1);

namespace SimpleSAML\Module\modinfo;

use SimpleSAML\Assert\Assert;

/**
 * This hook lets the module describe itself.
 *
 * @param array &$moduleinfo  The links on the frontpage, split into sections.
 */
function modinfo_hook_moduleinfo(array &$moduleinfo): void
{
    Assert::keyExists($moduleinfo, "info");

    $moduleinfo['info']['modinfo'] = [
        'name' => ['en' => 'Module information'],
        'description' => ['en' => 'This module lists all available modules, and tells whether they are enabled or not.'],
        'dependencies' => ['core'],
        'uses' => ['sanitycheck'],
    ];
}
