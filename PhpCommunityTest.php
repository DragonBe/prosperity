<?php

namespace PHPCommunity;

use PHPUnit\Framework\TestCase;

require_once 'PhpCommunity.php';

class PhpCommunityTest extends TestCase
{
	public function testProsperousYearGuaranteed()
	{
	    $phpCommunity = new PhpCommunity();
	    $success = $phpCommunity->generateProsperousYear(
	        new \DateTime('2018-01-01', new \DateTimeZone('UTC'))
	    );
	    $this->assertInstanceOf(\PhpCommunity\Success::class, $success);
	    $this->assertTrue($success->isGuaranteed(),
	        'Expecting success guaranteed in 2018 for the PHP community'
	    );
	}
}
