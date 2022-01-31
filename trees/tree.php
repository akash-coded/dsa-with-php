<?php
class Node
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }

    public function getData()
    {
        return $this->data;
    }
}

class BinaryTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty()
    {
        return $this->root === null;
    }

    protected function insertNode($node, &$subtree)
    {
        if ($subtree === null) {
            // insert node here if the subtree is empty
            $subtree = $node;
        } else {
            if ($node->data < $subtree->data) {
                // try to insert in the left subtree
                $this->insertNode($node, $subtree->left);
            } else if ($node->data > $subtree->data) {
                // try to insert in the right subtree
                $this->insertNode($node, $subtree->right);
            } else {
                // reject duplicates
            }
        }
    }

    public function insert($item)
    {
        $newNode = new Node($item);
        if ($this->isEmpty()) {
            $this->root = $newNode;
        } else {
            $this->insertNode($newNode, $this->root);
        }
    }

    protected function inorder($localRoot)
    {
        if ($localRoot != null) {
            $this->inorder($localRoot->left);
            print($localRoot->data . PHP_EOL);
            $this->inorder($localRoot->right);
        }
    }

    protected function preorder($localRoot)
    {
        if ($localRoot != null) {
            print($localRoot->data . PHP_EOL);
            $this->preorder($localRoot->left);
            $this->preorder($localRoot->right);
        }
    }

    protected function postorder($localRoot)
    {
        if ($localRoot != null) {
            $this->postorder($localRoot->left);
            $this->postorder($localRoot->right);
            print($localRoot->data . PHP_EOL);
        }
    }

    public function displayTree()
    {
        $this->postorder($this->root);
    }
}

$binaryTree = new BinaryTree();
$binaryTree->insert(5);
$binaryTree->insert(6);
$binaryTree->insert(7);
$binaryTree->displayTree();
