<?php

/*
 * This file is part of the Fungio Google Map bundle package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Fungio\GoogleMapBundle\Tests\Entity;

use Fungio\GoogleMapBundle\Entity\Event;

/**
 * Event entity test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class EventTest extends \PHPUnit_Framework_TestCase
{
    public function testInheritance()
    {
        $this->assertInstanceOf('Fungio\GoogleMap\Events\Event', new Event());
    }
}
