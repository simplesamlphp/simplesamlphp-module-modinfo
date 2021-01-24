<?php

declare(strict_types=1);

namespace SimpleSAML\Module\modinfo;

use SimpleSAML\Assert\Assert;
use SimpleSAML\Module;

/**
 * Hook to add the modinfo module to the frontpage.
 *
 * @param array &$links  The links on the frontpage, split into sections.
 */
function modinfo_hook_frontpage(array &$links): void
{
    Assert::keyExists($links, "links");

    $links['config'][] = [
        'href' => Module::getModuleURL('modinfo/'),
        'text' => '{modinfo:modinfo:modlist_header}',
    ];
}
