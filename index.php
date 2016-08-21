<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/08/2016
 * Time: 07:38 PM
 */
class Test{
    public $correct;

    private function testOne()
    {
        foreach ([1,2,3] as $item) {
            
        }
    }
    /**
     * Test constructor.
     * @param $correct
     */
    public function __construct($correct)
    {
        $this->correct = $correct;
    }

    /**
     * @return mixed
     */
    public function getCorrect()
    {
        return $this->correct;
    }

    /**
     * @param mixed $correct
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;
    }

}