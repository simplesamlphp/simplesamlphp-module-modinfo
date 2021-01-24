<?php

declare(strict_types=1);

namespace SimpleSAML\Test\Module\authX509\Controller;

use PHPUnit\Framework\TestCase;
use SimpleSAML\Configuration;
use SimpleSAML\Module\modinfo\Controller;
use SimpleSAML\Session;
use SimpleSAML\XHTML\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Set of tests for the controllers in the "modinfo" module.
 *
 * @package SimpleSAML\Test
 */
class ModInfoTest extends TestCase
{
    /** @var \SimpleSAML\Configuration */
    protected Configuration $config;

    /** @var \SimpleSAML\Session */
    protected Session $session;


    /**
     * Set up for each test.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->config = Configuration::loadFromArray(
            [
                'module.enable' => ['modinfo' => true],
            ],
            '[ARRAY]',
            'simplesaml'
        );

        $this->session = Session::getSessionFromRequest();
    }


    /**
     * Test that calling the controller results in a Template being returned
     */
    public function testMain(): void
    {
        $c = new Controller\ModInfo($this->config, $this->session);
        $response = $c->main();

        // Validate response
        $this->assertInstanceOf(Template::class, $response);
        $this->assertTrue($response->isSuccessful());
    }
}
