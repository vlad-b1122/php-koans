<?php


namespace koans;


class Variable
{

    /**
     * Variable constructor.
     */
    public function __construct()
    {
    }

    public function declareAnInt()
    {
        $variableInt = 1;
        return $variableInt;
    }

    public function declareABoolean()
    {
        $variableBool = true;
        return $variableBool;
    }

    public function declareAFloat()
    {
        $variableFLoat = 3.2;
        return $variableFLoat;
    }

    public function declareAnArray()
    {
        $variableArray = array(
            "1" => "uno",
            "2" => "dos",
        );
        return $variableArray;
    }

    public function declareAnIntWithNullValue()
    {
        $variableNull = null;
        return $variableNull;
    }

    public function assignAVariableValueToAnotherVariable(int $auxAssignValue)
    {
        $variableAssign = $auxAssignValue;
        return $variableAssign;
    }
}