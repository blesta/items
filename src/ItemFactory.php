<?php
namespace Blesta\Items;

use Blesta\Items\Item\Item;
use Blesta\Items\Item\Map;
use Blesta\Items\Collection\ItemCollection;

/**
 * ItemFactory for fetching newly-instantiated item objects
 */
class ItemFactory
{
    /**
     * Retrieves a new instance of Item
     *
     * @return Item An instance of Item
     */
    public function item()
    {
        return new Item();
    }

    /**
     * Retrieves a new instance of Map
     *
     * @return Map An instance of Map
     */
    public function map()
    {
        return new Map();
    }

    /**
     * Retrieves a new instance of ItemCollection
     *
     * @return ItemCollection An instance of ItemCollection
     */
    public function itemCollection()
    {
        return new ItemCollection();
    }
}
