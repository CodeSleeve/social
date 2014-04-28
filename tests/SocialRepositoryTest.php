<?php

use Codesleeve\Social\SocialRepository;

class SocialRepositoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * [setUp description]
     */
    public function setUp()
    {

    }

    /**
     * [tearDown description]
     * @return [type] [description]
     */
    public function tearDown()
    {

    }

    /**
     * [newSocial description]
     * @param  [type] $config [description]
     * @param  [type] $url    [description]
     * @return [type]         [description]
     */
    public function newSocial($config = null, $url = null, $session = null)
    {
        if (!$config) {
            $config = $this->getMock('Config');            
        }

        if (!$url) {
            $url = $this->getMock('Url');            
        }

        if (!$session) {
            $session = $this->getMock('Session');            
        }

        $social = new SocialRepository($config, $url, $session);

        return $social;
    }

    /**
     * [testCanInstantiate description]
     * @return [type] [description]
     */
    public function testCanInstantiate()
    {        
        $outcome = $this->newSocial();
    }

}
