<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Examples\AbstractFields\Checkbox;
use App\Examples\AbstractFields\Radio;
use App\Examples\AbstractFields\Text;

// Field и Boolean создать нельзя: они задают основу для конкретных полей.
$fields = [
    new Text('textField'),
    new Checkbox('checkboxField'),
    new Radio('radioField'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br />' . PHP_EOL;
}
