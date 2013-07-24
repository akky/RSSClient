<?php

/**
 * This file is part of the RSSClient proyect.
 *
 * Copyright (c)
 * Daniel González <daniel.gonzalez@freelancemadrid.es>
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

namespace Desarrolla2\RSSClient\Handler\Sanitizer\Test;

use \Desarrolla2\RSSClient\Handler\Sanitizer\SanitizerHandler;

/**
 *
 * Description of SanitizerHandlerTest
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es>
 * @file : SanitizerHandlerTest.php , UTF-8
 * @date : May 5, 2013 , 8:55:36 PM
 */
class SanitizerHandlerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \Desarrolla2\RSSClient\Handler\Error\ErrorHandler
     */
    protected $handler = null;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->handler = new SanitizerHandler();
    }

    /**
     * Provider
     *
     * @return array
     */
    public function dataProvider()
    {
        return array(
            array(
                '', ''
            )
        );
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function testDoClean($expected, $data)
    {
        $this->assertEquals($expected, $this->handler->doClean($data));
    }

}
