<?php
class Container{

    public $bindings = [];

    public function bind($name, Callable $resolver){

        $this->bindings[$name] = $resolver;

    }

    public  function make($name){
        return $this->bindings[$name]();
    }




}

$container = new Container();
$x = "pp ";
$container->bind('game',function() use($x){
    return $x . 'hello';
});


print_r($container->bindings['game']());

