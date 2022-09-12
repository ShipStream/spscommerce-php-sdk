<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ItemRegistries;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Contains the commonly used fields in the header of the transaction
 */
class ItemRegistryHeaderHeaderReport extends ClassStructure
{
    const CONST_00 = '00';

    const CONST_01 = '01';

    const CONST_04 = '04';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_07 = '07';

    const CONST_20 = '20';

    const CN = 'CN';

    const MB = 'MB';

    const MC = 'MC';

    const PS = 'PS';

    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Unique number to the transaction */
    public $documentId;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string Code indicating the title or contents of a document, report, or supporting item */
    public $reportTypeCode;

    /** @var string Date the ItemRegistries was created */
    public $inventoryDate;

    /** @var string Time the ItemRegistries was created */
    public $inventoryTime;

    /** @var string Code indicating the type of action */
    public $actionCode;

    /** @var string Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $buyersCurrency;

    /** @var string Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $sellersCurrency;

    /** @var float The rate to be applied to convert one currency to another */
    public $exchangeRate;

    /** @var string Number assigned by buyer that uniquely identifies the vendor */
    public $vendor;

    /** @var string Different entities belonging to the same parent company */
    public $division;

    /** @var string Name or number identifying an area wherein merchandise is categorized within a store */
    public $department;

    /** @var string Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store */
    public $departmentDescription;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tradingPartnerId = Schema::string();
        $properties->tradingPartnerId->description = "Unique internal identifier defined by SPS Commerce which identifies the relationship";
        $properties->tradingPartnerId->maxLength = 15;
        $properties->tradingPartnerId->minLength = 1;
        $ownerSchema->addPropertyMapping('TradingPartnerId', self::names()->tradingPartnerId);
        $properties->documentId = Schema::string();
        $properties->documentId->description = "Unique number to the transaction";
        $ownerSchema->addPropertyMapping('DocumentId', self::names()->documentId);
        $properties->tsetPurposeCode = Schema::string();
        $properties->tsetPurposeCode->enum = array(
            self::CONST_00,
            self::CONST_01,
            self::CONST_04,
            self::CONST_05,
            self::CONST_06,
            self::CONST_07,
            self::CONST_20,
            self::CN,
        );
        $properties->tsetPurposeCode->description = "Code identifying purpose or function of the transmission";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->reportTypeCode = Schema::string();
        $properties->reportTypeCode->enum = array(
            self::MB,
            self::MC,
            self::PS,
        );
        $properties->reportTypeCode->description = "Code indicating the title or contents of a document, report, or supporting item";
        $ownerSchema->addPropertyMapping('ReportTypeCode', self::names()->reportTypeCode);
        $properties->inventoryDate = Schema::string();
        $properties->inventoryDate->description = "Date the ItemRegistries was created";
        $properties->inventoryDate->format = "date";
        $ownerSchema->addPropertyMapping('InventoryDate', self::names()->inventoryDate);
        $properties->inventoryTime = Schema::string();
        $properties->inventoryTime->description = "Time the ItemRegistries was created";
        $properties->inventoryTime->format = "time";
        $ownerSchema->addPropertyMapping('InventoryTime', self::names()->inventoryTime);
        $properties->actionCode = Schema::string();
        $properties->actionCode->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
        );
        $properties->actionCode->description = "Code indicating the type of action";
        $ownerSchema->addPropertyMapping('ActionCode', self::names()->actionCode);
        $properties->buyersCurrency = Schema::string();
        $properties->buyersCurrency->description = "Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('BuyersCurrency', self::names()->buyersCurrency);
        $properties->sellersCurrency = Schema::string();
        $properties->sellersCurrency->description = "Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('SellersCurrency', self::names()->sellersCurrency);
        $properties->exchangeRate = Schema::number();
        $properties->exchangeRate->description = "The rate to be applied to convert one currency to another";
        $ownerSchema->addPropertyMapping('ExchangeRate', self::names()->exchangeRate);
        $properties->vendor = Schema::string();
        $properties->vendor->description = "Number assigned by buyer that uniquely identifies the vendor";
        $ownerSchema->addPropertyMapping('Vendor', self::names()->vendor);
        $properties->division = Schema::string();
        $properties->division->description = "Different entities belonging to the same parent company";
        $ownerSchema->addPropertyMapping('Division', self::names()->division);
        $properties->department = Schema::string();
        $properties->department->description = "Name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('Department', self::names()->department);
        $properties->departmentDescription = Schema::string();
        $properties->departmentDescription->description = "Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('DepartmentDescription', self::names()->departmentDescription);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the header of the transaction";
        $ownerSchema->required = array(
            'TradingPartnerId',
            'DocumentId',
        );
    }
}