<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Examples\AbstractFields\Renderable;
use App\Examples\AbstractFields\Text;
use App\Examples\Interfaces\CollectionAgency;
use App\Examples\Interfaces\DebtCollectionService;
use App\Examples\Interfaces\Rocky;

$service = new DebtCollectionService();

echo '<pre>';
echo "CollectionAgency:\n";
$service->collectDebt(new CollectionAgency());
echo "Rocky:\n";
$service->collectDebt(new Rocky());
echo '</pre>';

// Field реализует Renderable, поэтому его потомок Text тоже подходит.
$field = new Text('example');
echo 'Renderable: ' . ($field instanceof Renderable ? 'yes' : 'no') . '<br />';
echo $field->render();
