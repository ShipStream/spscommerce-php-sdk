<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrganizationalRelationships;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsItemQuantityItems extends ClassStructure
{
    /** @var string Qualifier used to define the type of quantity to follow */
    public $quantityQualifier;

    /** @var float Numeric value specified in association with the QuantityQualifier */
    public $quantity1;

    /** @var string Unit of measure of the quantity specified */
    public $qtyUOM;

    /** @var string */
    public $freeFormMessage;

    /** @var string */
    public $totalAmountType;

    /** @var float Total amount of the transaction. Sum of the item qty * price +/- the charges, allowances, and taxes, if sent */
    public $totalAmount;

    /** @var string */
    public $creditDebitFlag;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->quantityQualifier = Schema::string();
        $properties->quantityQualifier->description = "Qualifier used to define the type of quantity to follow";
        $ownerSchema->addPropertyMapping('QuantityQualifier', self::names()->quantityQualifier);
        $properties->quantity1 = Schema::number();
        $properties->quantity1->description = "Numeric value specified in association with the QuantityQualifier";
        $ownerSchema->addPropertyMapping('Quantity1', self::names()->quantity1);
        $properties->qtyUOM = Schema::string();
        $properties->qtyUOM->description = "Unit of measure of the quantity specified";
        $ownerSchema->addPropertyMapping('QtyUOM', self::names()->qtyUOM);
        $properties->freeFormMessage = Schema::string();
        $ownerSchema->addPropertyMapping('FreeFormMessage', self::names()->freeFormMessage);
        $properties->totalAmountType = Schema::string();
        $ownerSchema->addPropertyMapping('TotalAmountType', self::names()->totalAmountType);
        $properties->totalAmount = Schema::number();
        $properties->totalAmount->description = "Total amount of the transaction. Sum of the item qty * price +/- the charges, allowances, and taxes, if sent";
        $ownerSchema->addPropertyMapping('TotalAmount', self::names()->totalAmount);
        $properties->creditDebitFlag = Schema::string();
        $ownerSchema->addPropertyMapping('CreditDebitFlag', self::names()->creditDebitFlag);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}