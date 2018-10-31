<?php

abstract class Table{
    protected $params = [];

    abstract function printInfo();

    public function __set($name, $val)
    {
        $this->params[$name] = $val;
    }
    public function __get($name)
    {
        if(isset($this->params[$name])){
            return $this->params[$name];
        }else{
            return "Not found";
        }

    }

    public function __construct(array $arg)
    {
        foreach ($arg as $name => $val){
          $this->params[$name] = $val;
        }
    }

}

class OfficeTable extends Table{
    public function printInfo()
    {
        print_r($this->params);
    }
}

$table1 = new OfficeTable(["name"=>"Corolex","manufacture"=>"ATB","width"=>210,"height"=>85]);
echo $table1->name;

$table1->printInfo();