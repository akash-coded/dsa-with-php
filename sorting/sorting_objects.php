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

    static function sortByProperty($students, $property)
    {
        $size = count($students) - 1;
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i; $j++) {
                $k = $j + 1;
                if ($students[$k]->$property > $students[$j]->$property) {
                    // Swap the elements at j-th and k-th indices
                    list($students[$j], $students[$k]) = array($students[$k], $students[$j]);
                }
            }
        }
        return $students;
    }
}

$student1 = new Student("Mickey", 5, 99);
$student2 = new Student("Donald", 6, 113);
$student3 = new Student("Goofy", 7, 56);

$students = array($student1, $student2, $student3);

print("Unsorted list of students:: \n");
print_r($students);

$students_sorted_desc_by_rollNo = Student::sortByProperty($students, "rollNo");
print("List of students sorted by roll no.:: \n");
print_r($students_sorted_desc_by_rollNo);

$students_sorted_desc_by_age = Student::sortByProperty($students, "age");
print("List of students sorted by age:: \n");
print_r($students_sorted_desc_by_age);

$students_sorted_desc_by_name = Student::sortByProperty($students, "name");
print("List of students sorted by name:: \n");
print_r($students_sorted_desc_by_name);
