<?php

namespace Html;

class Table {
    public $title = "";
    public $numRows = 0;

    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}


class Image {
    public $title = "";
    public $href = "";

    public function message() {
        echo "<p>Image with title - '{$this->title}' has {$this->href} link.</p>";
    }
}