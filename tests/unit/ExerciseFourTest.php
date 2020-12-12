<?php
namespace tests\unit;

require __DIR__ . "/../../src/ExerciseFour.php";
require __DIR__ . "/../../src/ExerciseFourLevelOne.php";
require __DIR__ . "/../../src/ExerciseFourLevelTwo.php";
require __DIR__ . "/../../src/ExerciseFourLevelThree.php";

use PHPUnit\Framework\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use src\ExerciseFourLevelOne;
use src\ExerciseFourLevelTwo;
use src\ExerciseFourLevelThree;

class ExerciseFourTest extends TestCase
{
    /**
     *
     * @test
     */
    function firstTest()
    {
        $exerciseFourLevel1 = new ExerciseFourLevelOne();
        $exerciseFourLevel2 = new ExerciseFourLevelTwo();
        $exerciseFourLevel3 = new ExerciseFourLevelThree();
        
        $this->assertEquals(
            50,
            $exerciseFourLevel1->pointCalculator(50),
            "El resultado esperado es 50");
            
        $this->assertEquals(
            100,
            $exerciseFourLevel2->pointCalculator(50),
            "El resultado esperado es 100");
            
        $this->assertEquals(
            150,
            $exerciseFourLevel3->pointCalculator(50),
            "El resultado esperado es 150");
    }
    
    /**
     *
     * @test
     */
    function secondTest()
    {
        $exerciseFourLevel1 = new ExerciseFourLevelOne();
        $exerciseFourLevel2 = new ExerciseFourLevelTwo();
        $exerciseFourLevel3 = new ExerciseFourLevelThree();
        
        $this->assertEquals(
            0,
            $exerciseFourLevel1->pointCalculator(0),
            "El resultado esperado es 0");
        
        $this->assertEquals(
            0,
            $exerciseFourLevel2->pointCalculator(0),
            "El resultado esperado es 0");
        
        $this->assertEquals(
            0,
            $exerciseFourLevel3->pointCalculator(0),
            "El resultado esperado es 0");
    }
}