<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
    private $user;
    protected function setUp(): void {
        $this->user = new \App\Model\User( "Bill", "Gates" );
    }

    function testGetFirstName() {
        $firstName = $this->user->getFirstName();
        $this->assertEquals( "Bill", $firstName );
    }

    function testSetFirstName() {
        $this->user->setFirstName( "Larry" );
        $firstName = $this->user->getFirstName( "Larry" );
        $this->assertEquals( "Larry", $firstName );
    }

    /** @test */
    function do_something_here() {
        $this->assertCount( 3, ['A', 'B', 'C'] );
    }
}