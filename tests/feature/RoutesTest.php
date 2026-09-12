<?php

namespace Tests\Feature;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
final class RoutesTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomePageLoadsSuccessfully(): void
    {
        $result = $this->get('/');

        $result->assertOK();
        $result->assertSee('Home');
        $result->assertSee('POS');
    }

    public function testAboutPageLoadsSuccessfully(): void
    {
        $result = $this->get('about');

        $result->assertOK();
        $result->assertSee('About');
        $result->assertSee('POS');
    }

    public function testCustomersPageLoadsWithRecords(): void
    {
        $result = $this->get('customers');

        $result->assertOK();
        $result->assertSee('Customer Accounts');
        $result->assertSee('Full Name');
        $result->assertSee('Email Address');
        $result->assertSee('Phone Number');
        $result->assertSee('Eleanor Vance');
        $result->assertSee('eleanor.vance@example.com');
        $result->assertSee('+1 (555) 234-5678');
        $result->assertSee('Julian Hayes');
    }

    public function testUsersPageLoadsWithRecords(): void
    {
        $result = $this->get('users');

        $result->assertOK();
        $result->assertSee('User Accounts');
        $result->assertSee('Username');
        $result->assertSee('Full Name');
        $result->assertSee('Role');
        $result->assertSee('clara.delgado');
        $result->assertSee('Clara Delgado');
        $result->assertSee('System Administrator');
        $result->assertSee('Store Manager');
    }

    public function testNonExistentRouteThrowsPageNotFoundException(): void
    {
        $this->expectException(PageNotFoundException::class);
        $this->get('non-existent-page-route');
    }
}
