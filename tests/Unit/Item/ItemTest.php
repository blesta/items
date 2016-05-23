<?php
namespace Blesta\Items\Tests\Unit\Item;

use Blesta\Items\Item\Item;
use PHPUnit_Framework_TestCase;
use stdClass;

/**
 * @coversDefaultClass \Blesta\Items\Item\Item
 */
class ItemTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstruct()
    {
        $this->assertInstanceOf('\Blesta\Items\Item\Item', $this->item());
    }

    /**
     * @covers ::getFields
     * @covers ::setFields
     * @uses ::__construct
     * @dataProvider getFieldsProvider
     */
    public function testGetFields($fields, $expected)
    {
        $item = $this->item();

        $this->assertInstanceOf('stdClass', $item->getFields());
        $item->setFields($fields);
        $this->assertInstanceOf('stdClass', $item->getFields());

        $this->assertEquals($expected, $item->getFields());
    }

    /**
     * Data provider for getting item fields
     *
     * @return array
     */
    public function getFieldsProvider()
    {
        return [
            [
                [],
                (object)[]
            ],
            [
                [['key' => 'value']],
                (object)[['key' => 'value']]
            ]
        ];
    }

    /**
     * @covers ::setFields
     * @uses ::__construct
     */
    public function testSetFields()
    {

    }

    /**
     * @covers ::setField
     * @uses ::__construct
     */
    public function testSetField()
    {

    }

    /**
     * @covers ::removeField
     * @covers ::getFields
     * @uses ::__construct
     */
    public function testRemoveField()
    {

    }

    /**
     * @return Item An instance of Item
     */
    public function item()
    {
        return new Item();
    }
}
