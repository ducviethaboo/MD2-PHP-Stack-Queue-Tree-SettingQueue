<?php


class Queue
{
    public $queue;
    public $limit;

    public function __construct($limit)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function add($item)
    {
        $not_out_of_limit = count($this->queue) < $this->limit;
        if ($not_out_of_limit) {
            array_push($this->queue, $item);
        } else {
            echo "The queue was full!!";
        }
    }

    public function cuttingFirst()
    {
        if (!$this->isEmpty()) {
            array_shift($this->queue);
        } else {
            echo "Not thing to take!";
        }
    }
}