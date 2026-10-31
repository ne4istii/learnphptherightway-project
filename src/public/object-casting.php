<?php

$json = '{"a":1,"b":2,"c":3}';
$fromJson = json_decode($json);
var_dump($fromJson);

$array = [1, 2, 3];
$fromArray = (object) $array;
var_dump($fromArray, $fromArray->{0});

$fromBool = (object) false;
var_dump($fromBool->scalar);

$fromNull = (object) null;
var_dump($fromNull);
