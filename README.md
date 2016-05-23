# blesta/items

A library for creating a collection of arbitrary items.

## Installation

Install via composer:

```sh
composer require blesta/items:~1.0
```

## Basic Usage

### Item

Item stores generic data, such as user-defined fields.

```php
$item = new Item();
```

Set fields onto the item:

```php
$fields = [
    'key' => 'item1',
    'value' => 'Item'
];
$item->setFields($fields);
$item->setField('custom', 'ABC123');
$item->removeField('value');
print_r($item->getFields());
```

Output is a standard class object of the fields:

```
stdClass Object (
    [key] => item1
    [custom] => ABC123
)
```

### Map

Map combines the values from one item with the keys of another item.
The result is a new item consisting of only the mapped keys and matching values.

```php
// Create the item
$fields = [
    'domain' => 'domain.com',
    'amount' => 100.0000,
    'override_amount' => 150.0000,
    'custom' => 'ABC123'
];
$item = new Item();
$item->setFields($fields);

// Create an item to use for field mapping
$mapFields = [
    'value' => 'domain',
    'price' => ['override_amount', 'amount']
    'type' => 'generic'
];
$mapItem = new Item();
$mapItem->setFields($mapFields);

$map = new Map();
$newItem = $map->combine($item, $mapItem);
print_r($newItem->getFields());
```

The fields set on the new item are only those keys from $mapItem that exist in
$item after performing the mapping:

```
stdClass Object (
    [value] => domain.com
    [price] => 150.0000
)
```

### ItemCollection
```
$collection = new ItemCollection();

$item1 = new Item();
$item2 = new Item();
$collection->append($item1)->append($item2);
$total = $collection->count(); // 2

$collection->remove($item1);
$total = $collection->count(); // 1

foreach ($collection as $item) {
    print_r($item->getFields()); // stdClass object of fields
}
```
