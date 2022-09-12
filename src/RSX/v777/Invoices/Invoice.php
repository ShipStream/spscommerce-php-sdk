<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Invoices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * A request for payment of goods or services. Typically, a response to an order
 * Built from Invoices.json#/definitions/Invoice
 */
class Invoice extends ClassStructure
{
    /** @var InvoiceMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var InvoiceHeader Encloses all document header elements */
    public $header;

    /** @var InvoiceLineItemItems[]|array */
    public $lineItem;

    /** @var InvoiceSummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = InvoiceMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = InvoiceHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = InvoiceLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->summary = InvoiceSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "A request for payment of goods or services. Typically, a response to an order";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('Invoices.json#/definitions/Invoice');
    }
}