<?php

/**
 * Human short summary.
 *
 * Human description.
 *
 * @version 1.0
 * @author John Park
 */
class Human
{
    public $Name;
    public $Age;
    public $Height;
    public $Weight;

    // 생성자
    function __construct($hname)
    {
        $this->Name = $hname;
        $this->Age = 19;
    }
    // 소멸자
    function __destruct()
    {
        $this->Talk("안녕~");
    }

    public function Eat($foods)
    {
        echo $this->Name.": " . $foods . "<br>";
    }
    public function Walk($destination)
    {
        echo $this->Name.": " . $destination . "<br>";
    }
    public function Talk($words)
    {
        echo $this->Name.": " . $words . "<br>";
    }

}