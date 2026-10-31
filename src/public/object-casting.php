<?php

$json = '{"a":1,"b":2,"c":3}';
// json_decode() по умолчанию создаёт объект stdClass.
$fromJson = json_decode($json);
var_dump($fromJson);

$array = [1, 2, 3];
// Ключи массива становятся именами свойств объекта.
$fromArray = (object) $array;
// Числовое имя свойства читаем через фигурные скобки.
var_dump($fromArray, $fromArray->{0});

// Значение false окажется в свойстве scalar.
$fromBool = (object) false;
var_dump($fromBool->scalar);

// При преобразовании null получается пустой stdClass.
$fromNull = (object) null;
var_dump($fromNull);
