<?php

// Breadth First is an algorithm to find things. 
function bfs($graph, $start) {
    // Create an empty array to keep track of visited nodes
    $visited = [];
    
    // Create a queue and add the starting node to it
    $queue = new SplQueue();
    $queue->enqueue($start);
    
    // Loop until the queue is empty
    while (!$queue->isEmpty()) {
        // Dequeue a node from the front of the queue
        $node = $queue->dequeue();
        
        // If the node has not been visited, process it
        if (!in_array($node, $visited)) {
            // Mark the node as visited
            $visited[] = $node;
            
            // Process the node (here, just echoing it)
            echo $node . " ";
            
            // Enqueue all unvisited neighbors
            foreach ($graph[$node] as $neighbor) {
                if (!in_array($neighbor, $visited)) {
                    $queue->enqueue($neighbor);
                }
            }
        }
    }
}

// Example graph: adjacency list representation
$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'D', 'E'],
    'C' => ['A', 'F'],
    'D' => ['B'],
    'E' => ['B', 'F'],
    'F' => ['C', 'E']
];

// Call BFS starting from node 'A'
bfs($graph, 'A');
