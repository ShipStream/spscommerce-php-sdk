<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsOrderHeader extends ClassStructure
{
    /** @var string Identifying number for a warehouse shipping order assigned by the depositor */
    public $depositorOrderNumber;

    /** @var string ERP generated number assigned as unique identifier for each incoming order */
    public $internalOrderNumber;

    /** @var string ERP generated internal date for each incoming order */
    public $internalOrderDate;

    /** @var string Unique identifier assigned by the billing party */
    public $invoiceNumber;

    /** @var string Date Invoice was created */
    public $invoiceDate;

    /** @var string Identifying number for the purchase order assigned by the buying organization */
    public $purchaseOrderNumber;

    /** @var string Identifying number for the purchase order relating back to the original blanket order */
    public $releaseNumber;

    /** @var string Date the purchase order was created */
    public $purchaseOrderDate;

    /** @var string Name or number identifying an area wherein merchandise is categorized within a store */
    public $department;

    /** @var string Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store */
    public $departmentDescription;

    /** @var string Number assigned by buyer that uniquely identifies the vendor */
    public $vendor;

    /** @var string Project number assigned to a standard reorder purchase order */
    public $jobNumber;

    /** @var string Different entities belonging to the same parent company */
    public $division;

    /** @var string End consumer's account number */
    public $customerAccountNumber;

    /** @var string End consumer's order number */
    public $customerOrderNumber;

    /** @var string */
    public $deliveryDate;

    /** @var string */
    public $deliveryTime;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->depositorOrderNumber = Schema::string();
        $properties->depositorOrderNumber->description = "Identifying number for a warehouse shipping order assigned by the depositor";
        $ownerSchema->addPropertyMapping('DepositorOrderNumber', self::names()->depositorOrderNumber);
        $properties->internalOrderNumber = Schema::string();
        $properties->internalOrderNumber->description = "ERP generated number assigned as unique identifier for each incoming order";
        $ownerSchema->addPropertyMapping('InternalOrderNumber', self::names()->internalOrderNumber);
        $properties->internalOrderDate = Schema::string();
        $properties->internalOrderDate->description = "ERP generated internal date for each incoming order";
        $properties->internalOrderDate->format = "date";
        $ownerSchema->addPropertyMapping('InternalOrderDate', self::names()->internalOrderDate);
        $properties->invoiceNumber = Schema::string();
        $properties->invoiceNumber->description = "Unique identifier assigned by the billing party";
        $ownerSchema->addPropertyMapping('InvoiceNumber', self::names()->invoiceNumber);
        $properties->invoiceDate = Schema::string();
        $properties->invoiceDate->description = "Date Invoice was created";
        $properties->invoiceDate->format = "date";
        $ownerSchema->addPropertyMapping('InvoiceDate', self::names()->invoiceDate);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->description = "Identifying number for the purchase order assigned by the buying organization";
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->releaseNumber = Schema::string();
        $properties->releaseNumber->description = "Identifying number for the purchase order relating back to the original blanket order";
        $ownerSchema->addPropertyMapping('ReleaseNumber', self::names()->releaseNumber);
        $properties->purchaseOrderDate = Schema::string();
        $properties->purchaseOrderDate->description = "Date the purchase order was created";
        $properties->purchaseOrderDate->format = "date";
        $ownerSchema->addPropertyMapping('PurchaseOrderDate', self::names()->purchaseOrderDate);
        $properties->department = Schema::string();
        $properties->department->description = "Name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('Department', self::names()->department);
        $properties->departmentDescription = Schema::string();
        $properties->departmentDescription->description = "Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('DepartmentDescription', self::names()->departmentDescription);
        $properties->vendor = Schema::string();
        $properties->vendor->description = "Number assigned by buyer that uniquely identifies the vendor";
        $ownerSchema->addPropertyMapping('Vendor', self::names()->vendor);
        $properties->jobNumber = Schema::string();
        $properties->jobNumber->description = "Project number assigned to a standard reorder purchase order";
        $ownerSchema->addPropertyMapping('JobNumber', self::names()->jobNumber);
        $properties->division = Schema::string();
        $properties->division->description = "Different entities belonging to the same parent company";
        $ownerSchema->addPropertyMapping('Division', self::names()->division);
        $properties->customerAccountNumber = Schema::string();
        $properties->customerAccountNumber->description = "End consumer's account number";
        $ownerSchema->addPropertyMapping('CustomerAccountNumber', self::names()->customerAccountNumber);
        $properties->customerOrderNumber = Schema::string();
        $properties->customerOrderNumber->description = "End consumer's order number";
        $ownerSchema->addPropertyMapping('CustomerOrderNumber', self::names()->customerOrderNumber);
        $properties->deliveryDate = Schema::string();
        $properties->deliveryDate->format = "date";
        $ownerSchema->addPropertyMapping('DeliveryDate', self::names()->deliveryDate);
        $properties->deliveryTime = Schema::string();
        $properties->deliveryTime->format = "time";
        $ownerSchema->addPropertyMapping('DeliveryTime', self::names()->deliveryTime);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}