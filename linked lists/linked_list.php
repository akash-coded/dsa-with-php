<?php
/**
 * Class to represent a node of the linked list
 */
class Node {
    public $data;
    public $next;

    public function __construct($item) {
        $this->data = $item;
        $this->next = null;
    }
}

/**
 * Class to represent a linked list
 */
class MyLinkedList 
{
    public $head = null; // instance variable

    private static $count = 0; // static variable

    /**
     * Getter function for count of nodes
     *
     * @return int
     */
    public function getCount() {
        return self::$count;
    }

    /**
     * Insertion at the beginning of the linked list
     *
     * @param mixed $newItem
     * @return void
     */
    public function insertAtFirst($newItem) {
        if ($this->head === null) { // if the linked list is empty
            $this->head = new Node($newItem);
        } else { // when the linked list is non-empty
            $temp = new Node($newItem);
            $temp->next = $this->head;
            $this->head = $temp;
        }

        self::$count++;
    }

    public function insertAtLast($newItem) {
        if ($this->head === null) { // if the linked list is empty
            $this->head = new Node($newItem);
        } else { // when the linked list is non-empty
            $current = $this->head;

            while ($current->next != null)
            {
                $current = $current->next;
            } // after while loop terminates, current points to the last Node

            $current->next = new Node($newItem);
        }

        self::$count++;
    }

    public function delete($item) {
        $current = $previous = $this->head;

        while($current->data != $item) {
            $previous = $current;
            $current = $current->next;
        }

        // if you are deleting the first node of the linked list
        if($current == $previous) {
            $this->head = $current -> next;
        }

        $previous->next = $current->next;

        self::$count--;
    }

    public function printList() {
        $items = [];
        $current = $this->head;
        while($current != null) {
            array_push($items, $current->data);
            $current = $current->next;
        }

        $str = '';
        foreach ($items as $item) {
            $str .= $item . '->';
        }

        echo $str;
        echo PHP_EOL;
    }
}

$my_list = new MyLinkedList();

$my_list->insertAtFirst(20);
$my_list->insertAtLast(40);
$my_list->printList();
