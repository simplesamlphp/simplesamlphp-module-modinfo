<?php

declare(strict_types=1);

use SimpleSAML\Locale\Translate;
use SimpleSAML\Module;
use SimpleSAML\XHTML\Template;

/**
 * Hook to add the modinfo module to the config page.
 *
 * @param \SimpleSAML\XHTML\Template &$template The template that we should alter in this hook.
 */
function modinfo_hook_configpage(Template &$template): void
{
    $template->data['links'][] = [
        'href' => Module::getModuleURL('modinfo/'),
        'text' => Translate::noop('{modinfo:modinfo:modlist_header}'),
    ];

    $template->getLocalization()->addModuleDomain('modinfo');
}
