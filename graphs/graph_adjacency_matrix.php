<?php
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
        $graph = new Graph(5);

        // Adding edges
        $graph->addEdge(0, 1);
        $graph->addEdge(0, 2);
        $graph->addEdge(0, 3);
        $graph->addEdge(1, 4);
        $graph->addEdge(2, 3);
        $graph->addEdge(3, 4);

        // Display the graph
        $graph->printGraph();
        $graph->displayAdjacencyMatrix();
    }
}

Graph::main();
