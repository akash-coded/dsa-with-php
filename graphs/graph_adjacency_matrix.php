<?php
class Graph
{
    public $vertices; // contains the vertices of the graph
    public $n; // number of vertices in the graph

    public function __construct($n)
    {
        if ($n <= 0) {
            // invalid number of vertices
            return;
        }

        $this->vertices = array_fill(0, $n, array_fill(0, $n, 0));
        $this->n = $n;
    }

    public function addEdge($u, $v)
    {
        if ($this->n > $u && $this->n > $v) {
            $this->vertices[$u][$v] = 1;
            $this->vertices[$v][$u] = 1;
        }
    }

    public function printGraph()
    {
        if ($this->n > 0) {
            for ($row = 0; $row < $this->n; ++$row) {
                print("Neighbours of vertex-" . $row . ": ");
                for ($col = 0; $col < $this->n; $col++) {
                    if ($this->vertices[$row][$col] == 1) {
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
                    print($this->vertices[$row][$col] . " ");
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
