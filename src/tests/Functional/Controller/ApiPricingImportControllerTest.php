<?php

declare(strict_types=1);

namespace App\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiPricingImportControllerTest extends WebTestCase
{
    public function testRouteApiPricingImportUrl()
    {
        $client = static::createClient();

        // check simple get - we must get 201
        $client->request('GET', '/api/pricing/import');
        $this->assertEquals(201, $client->getResponse()->getStatusCode());
        $this->assertResponseIsSuccessful();
    }
}