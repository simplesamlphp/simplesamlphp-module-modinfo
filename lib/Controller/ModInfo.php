<?php

declare(strict_types=1);

namespace SimpleSAML\Module\modinfo\Controller;

use SimpleSAML\Configuration;
use SimpleSAML\Module;
use SimpleSAML\Session;
use SimpleSAML\XHTML\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller class for the modinfo module.
 *
 * This class serves the different views available in the module.
 *
 * @package simplesamlphp/simplesamlphp-module-modinfo
 */
class ModInfo
{
    /** @var \SimpleSAML\Configuration */
    protected Configuration $config;

    /** @var \SimpleSAML\Session */
    protected Session $session;


    /**
     * Controller constructor.
     *
     * It initializes the global configuration and session for the controllers implemented here.
     *
     * @param \SimpleSAML\Configuration $config The configuration to use by the controllers.
     * @param \SimpleSAML\Session $session The session to use by the controllers.
     *
     * @throws \Exception
     */
    public function __construct(
        Configuration $config,
        Session $session
    ) {
        $this->config = $config;
        $this->session = $session;
    }


    /**
     * Show module info.
     *
     * @return \SimpleSAML\XHTML\Template
     * @throws \Exception
     */
    public function main(): Template
    {
        $modules = Module::getModules();
        sort($modules);

        $modinfo = [];
        foreach ($modules as $module) {
            $modinfo[$module] = [
                'enabled' => Module::isModuleEnabled($module),
            ];
        }
        ksort($modinfo);

        $t = new Template($this->config, 'modinfo:modlist.twig');
        $t->data['modules'] = $modinfo;

        return $t;
    }
}
