<?php

class Queue
{
    protected $queue;
    protected $front;
    protected $rear;
    protected $capacity;

    public function __construct($capacity = 5)
    {
        // initialize the queue with an empty array
        $this->queue = array();

        // queue can only contain this many elements
        $this->capacity = $capacity;

        // initialize front and rear to -1
        $this->front = -1;
        $this->rear = -1;
    }

    public function enqueue($element)
    {
        if ($this->rear == $this->capacity) {
            print("Queue is full!!!\n");
        } else {
            // when the queue is empty
            if ($this->front == -1) {
                // initialization required for first queue element
                $this->front = $this->rear = 0;
            }
            $this->queue[$this->rear] = $element;
            $this->rear++;
        }
    }

    public function dequeue()
    {
        if ($this->front == $this->rear) {
            print("Queue is empty!!!\n");
        } else {
            if ($this->rear - $this->front == 1) {
                $this->front = $this->rear = -1;
            } else {
                $this->rear--;
            }
            return array_shift($this->queue);
        }
    }

    public function isEmpty()
    {
        return $this->front == $this->rear;
    }

    public function peek()
    {
        return $this->queue[$this->front];
    }

    public function printQueue()
    {
        print_r($this->queue);
    }
}

class Graph
{
    public $adjacencyMatrix; // represents the edges of the graph
    public $n; // number of adjacencyMatrix in the graph

    public function __construct($n)
    {
        if ($n <= 0) {
            // invalid number of vertices
            return;
        }

        $this->adjacencyMatrix = array_fill(0, $n, array_fill(0, $n, 0));
        $this->n = $n;
    }

    public function addEdge($u, $v)
    {
        if ($this->n > $u && $this->n > $v) {
            $this->adjacencyMatrix[$u][$v] = 1;
            $this->adjacencyMatrix[$v][$u] = 1;
        }
    }

    public function bfs(int $source)
    {
        // Mark all vertices as not visited
        $visited = array_fill(0, $this->n, false);

        // Create an empty queue for BFS traversal
        $queue = new Queue($this->n);

        // Mark the source vertex as visited and enqueue it
        $visited[$source] = true;
        $queue->enqueue($source);

        while (!$queue->isEmpty()) {
            // Dequeue a vertex and print it
            $u = $queue->dequeue();
            print($u . " --> ");

            // Get all the neighbours of the dequeued vertex u.
            // If an adjacent vertex has not been visited,
            // then mark it visited and enqueue it
            for ($i = 0; $i < $this->n; $i++) {
                if ($this->adjacencyMatrix[$u][$i] == 1 && !$visited[$i]) {
                    $visited[$i] = true;
                    $queue->enqueue($i);
                }
            }
        }
    }

    public function printGraph()
    {
        if ($this->n > 0) {
            for ($row = 0; $row < $this->n; ++$row) {
                print("Neighbours of vertex-" . $row . ": ");
                for ($col = 0; $col < $this->n; $col++) {
                    if ($this->adjacencyMatrix[$row][$col] == 1) {
                        print($col . " ");
                    }
                }
                print("\n");
            }
        } else {
            print("Empty Graph\n");
        }
    }

    public function displayAdjacencyMatrix()
    {
        if ($this->n > 0) {
            for ($row = 0; $row < $this->n; ++$row) {
                for ($col = 0; $col < $this->n; $col++) {
                    print($this->adjacencyMatrix[$row][$col] . " ");
                }
                print("\n");
            }
        } else {
            print("Empty Graph\n");
        }
    }

    public static function main($args = array())
    {
        // Creating a graph with 5 vertices
        $graph = new Graph(4);

        // Adding edges
        $graph->addEdge(0, 1);
        $graph->addEdge(0, 2);
        $graph->addEdge(1, 2);
        $graph->addEdge(2, 0);
        $graph->addEdge(2, 3);
        $graph->addEdge(3, 3);

        // Display the graph
        $graph->printGraph();
        $graph->displayAdjacencyMatrix();

        // BFS Traversal
        $graph->bfs(2);
    }
}

Graph::main();
