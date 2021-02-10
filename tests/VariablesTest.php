<?php

namespace Deg540\koans\Test;


use koans\Variable;
use PHPUnit\Framework\TestCase;

class VariablesTest extends TestCase
{
    /**
     * @test
     **/
    public function declaresAnInt() //los test en tercera persona
    {
        $variable = new Variable();
        $integerValue = $variable->declareAnInt(); //flecha es como punto en java parra acceder a metodos
        $this->assertIsInt($integerValue);
    }
    /**
     * @test
     **/
    public function declaresABoolean()
    {
        $variable = new Variable();
        $boolValue = $variable->declareABoolean();
        $this->assertIsBool($boolValue);
    }
    /**
     * @test
     **/
    public function declaresAFloat()
    {
        $variable = new Variable();
        $floatValue = $variable->declareAFloat();
        $this->assertIsFloat($floatValue);
    }
    /**
     * @test
     **/
    public function declaresAnArray()
    {
        $variable = new Variable();
        $arrayValue = $variable->declareAnArray();
        $this->assertIsArray($arrayValue);
    }
    /**
     * @test
     **/
    public function declaresAnIntWithNullValue()
    {
        $variable = new Variable();
        $nullValue = $variable->declareAnIntWithNullValue();
        $this->assertNull($nullValue);
    }
    /**
     * @test
     **/
    public function assignsAVariableValueToAnotherVariable()
    {
        $variable = new Variable();
        $assignValue = 1;
        $auxAssignValue = 3;
        $assignValue = $variable->assignAVariableValueToAnotherVariable($auxAssignValue);
        $this->assertSame($auxAssignValue,$assignValue);
    }


}
