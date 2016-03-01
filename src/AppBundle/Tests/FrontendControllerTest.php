<?php

namespace AppBundle\Tests;

/**
 * Class FrontendControllerTest
 *
 * @category Test
 * @package  AppBundle\Tests
 * @author   David Romaní <david@flux.cat>
 */
class FrontendControllerTest extends AbstractBaseTest
{
    /**
     * Test HTTP request is successful
     *
     * @dataProvider provideUrls
     *
     * @param string $url
     */
    public function testFrontendPagesAreSuccessful($url)
    {
        $this->loadFixtures(array());
        $client = static::createClient();
        $client->request('GET', $url);

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    /**
     * Urls provider.
     *
     * @return array
     */
    public function provideUrls()
    {
        return array(
            array('/'),
            array('/es/'),
            array('/en/'),
            array('/serveis'),
            array('/es/servicios'),
            array('/en/services'),
            array('/projectes'),
            array('/es/proyectos'),
            array('/en/projects'),
            array('/equip'),
            array('/es/equipo'),
            array('/en/team'),
            array('/blog'),
            array('/es/blog'),
            array('/en/blog'),
        );
    }
}
