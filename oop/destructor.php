<?php

class Fruit{
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    function set_name($name){
        $this->name = $name;
    }

    function __destruct(){// used when script execution is ended or stopped, or when destructuring happens
        echo "Bye! {$this->name} leaves the script.(";
    }
}

class File {
    private $file_resource;
    private $filesize;

    public function __construct($filename, $mode='r')
    {
        echo 'Opening file...' . PHP_EOL;
        $this->file_resource = fopen($filename, $mode);
        $this->filesize = filesize($filename);

    }

    public function readData()
    {
        echo 'Reading file...' . PHP_EOL;
        $data = fread($this->file_resource, $this->filesize);
        return $data;
    }

    public function insertData($data){
        fwrite($this->file_resource, $data);
    }

    public function __destruct()
    {
        echo 'Closing file...' . PHP_EOL;
        fclose($this->file_resource);
    }
}

//$banana = new Fruit();
////$banana->name = 'banana';
//$banana->set_name('banana');
//
//$banana = new Fruit('banana');
//$apple = new Fruit('apple');
//var_dump($banana->name);

$file = new File('lorem.txt');
echo $file->readData();