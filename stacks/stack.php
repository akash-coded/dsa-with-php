<?php
class Stack
{
    protected $stack;
    protected $capacity;

    public function __construct($capacity = 5)
    {
        // initialize the stack with an empty array
        $this->stack = array();
        // stack can only contain this many elements
        $this->capacity = $capacity;
    }

    public function push($element)
    {
        // check for stack overflow
        if (count($this->stack) < $this->capacity) {
            // prepend element to the start of the stack array
            array_unshift($this->stack, $element);
        } else {
            throw new RuntimeException('Stack overflow!!!');
        }
    }

    public function pop()
    {
        // check for stack underflow
        if (empty($this->stack)) {
            throw new RuntimeException('Stack underflow!!!');
        } else {
            // pop an element from the start of the stack array
            return array_shift($this->stack);
        }
    }

    public function peek()
    {
        return current($this->stack);
    }

    public function printStack()
    {
        print_r($this->stack);
    }
}

$stack = new Stack(3);

$stack->push(10);
$stack->printStack();

$stack->push(20);
$stack->printStack();

$removed_ele = $stack->pop();
print("Popped element: " . $removed_ele . "\n");
$stack->printStack();

$peeked_ele = $stack->peek();
print("Top element: " . $peeked_ele . "\n");

$stack->push(20);
$stack->push(30);
$stack->push(40);
