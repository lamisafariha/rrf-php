<?php
interface DB {
    public function create();
    public function read();
    public function delete();
}

interface DB2 {
    public function update();
}

class MySQL implements DB, DB2 {
    public function create()
    {
        echo 'Creaing using MySQL..';
    }
    public function update()
    {
        echo 'Updating using MySQL..';
    }
    public function read()
    {
        echo 'Reading using MySQL..';
    }
    public function delete()
    {
        echo 'Deleting using MySQL..';
    }
}

class MongoDB implements DB {
    public function create()
    {
        echo 'Creating using MongoDB..';
    }
    public function read()
    {
        echo 'Reading using MongoDB..';
    }
    public function delete()
    {
        echo 'Deleting using MongoDB..';
    }
}

class User {
    public $name;
    private $db;

    public function __construct(DB $db, $name)
    {
        $this->name = $name;
        $this->db = $db;
    }

    public function register()
    {
        // store the user
        $this->db->create();
    }

    public function update()
    {
        // update the user
        $this->db->update();
    }

    public function read()
    {
        // read the user
        $this->db->read();
    }

    public function delete()
    {
        // delete the user
        $this->db->delete();
    }
}

$adnan = new User(new Human, 'Adnan');
$adnan->update();
