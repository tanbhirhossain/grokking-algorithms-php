<?php 

class Node{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList{
    public $head;

    public function __construct(){
        $this->head = null;
    }

    public function insertAtHead($data){
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function display(){
        $current = $this->head;
        $result = "";

        // while ($current !== null) {
        //     $result .= $current->data . " -> ";
        //     $current = $current->next;
        // }

        while ($current !== null) {
            $nextValue = ($current->next !== null) ? spl_object_hash($current->next) : "null";
            $result .= "[Data: " . $current->data . ", Next: " . $nextValue . "] -> ";
            $current = $current->next;
        }

        $result .= "null";

        return $result;
    }
}

$add_list = new LinkedList();
$add_list->insertAtHead(5);
$add_list->insertAtHead(data: 6);
$add_list->insertAtHead(data: 99);

$add_list->insertAtHead(7);

echo $add_list->display();
?>
