<?php
class Student
{
    private $name;
    private $rollNo;
    private $age;

    /**
     * Contructor with scalar type declaration
     *
     * @param string $name
     * @param integer $rollNo
     * @param integer $age
     */
    public function __construct(string $name, int $rollNo = -1, int $age = -1)
    {
        $this->name = $name;
        $this->rollNo = $rollNo;
        $this->age = $age;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }

    /**
     * __toString() method with return type declaration
     *
     * @return string
     */
    public function __toString(): string
    {
        return "Student: $this->name, Roll No.: $this->rollNo, Age: $this->age";
    }
}

$student1 = new Student("Akash", 5, 99);
print($student1);
