<?php
namespace Blesta\Items\Tests\Unit;

use Blesta\Items\ItemFactory;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \Blesta\Items\ItemFactory
 */
class ItemFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::item
     */
    public function testItem()
    {
        $this->assertInstanceOf(
            '\Blesta\Items\Item\Item',
            $this->factory()->item()
        );
    }

    /**
     * @covers ::map
     */
    public function testMap()
    {
        $this->assertInstanceOf(
            '\Blesta\Items\Item\Map',
            $this->factory()->map()
        );
    }

    /**
     * @covers ::itemCollection
     */
    public function testItemCollection()
    {
        $this->assertInstanceOf(
            '\Blesta\Items\Collection\ItemCollection',
            $this->factory()->itemCollection()
        );
    }

    /**
     * @return ItemFactory An instance of the ItemFactory
     */
    public function factory()
    {
        return new ItemFactory();
    }
}
