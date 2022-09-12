<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Details the conditions or requirements of a sale or product substitution
 */
class OrderChangeLineItemItemsConditionOfSaleItems extends ClassStructure
{
    const AB = 'AB';

    const B = 'B';

    const BK = 'BK';

    const C = 'C';

    const FT = 'FT';

    const IS = 'IS';

    const N = 'N';

    const NS = 'NS';

    const O = 'O';

    const P2 = 'P2';

    const P3 = 'P3';

    const P4 = 'P4';

    const SC = 'SC';

    const SP = 'SP';

    const SS = 'SS';

    const SW = 'SW';

    const Y = 'Y';

    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    const CONST_13 = '13';

    const AX = 'AX';

    const BI = 'BI';

    const DD = 'DD';

    const FA = 'FA';

    const FC = 'FC';

    const NEMA = 'NEMA';

    const ST = 'ST';

    const SZAU = 'SZAU';

    const VI = 'VI';

    /** @var string For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction. */
    public $lineSequenceNumber;

    /** @var string Used to indicate a specific requirement of the sale */
    public $salesRequirementCode;

    /** @var string Code indicating the type of action */
    public $actionCode;

    /** @var float A quantity */
    public $amount;

    /** @var string ID associated with purchase charges or substitution charges */
    public $accountNumber;

    /** @var string A specific day */
    public $date;

    /** @var string Identifies the agency from which code values are sourced */
    public $agencyQualifierCode;

    /** @var string Code for determining substitution conditions */
    public $substitutionCode;

    /** @var string ERP generated code to uniquely identify the item */
    public $applicationId;

    /** @var string Buyer's primary product identifier */
    public $buyerPartNumber;

    /** @var string Vendor's primary product identifier */
    public $vendorPartNumber;

    /** @var string Consumer level or customer unit product identification number */
    public $consumerPackageCode;

    /** @var string International Article Number, aka European Article Number, which is the European equivalent of the United States UPC[Universal Product Code] */
    public $eAN;

    /** @var string Global Trade Item Number which is an item identifier that encompasses all product identification numbers such as UPC, EAN, ITF, etc. and can be assigned at various packing levels */
    public $gTIN;

    /** @var string Package or case level product identification number */
    public $uPCCaseCode;

    /** @var string National Drug Code or NDC is a unique, universal product identifier for drugs. Primarily used in the pharmaceutical industry */
    public $natlDrugCode;

    /** @var string ISBN is a unique number assigned to every book before publication */
    public $internationalStandardBookNumber;

    /** @var OrderChangeLineItemItemsConditionOfSaleItemsProductIDItems[]|array */
    public $productID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->lineSequenceNumber = Schema::string();
        $properties->lineSequenceNumber->description = "For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction.";
        $ownerSchema->addPropertyMapping('LineSequenceNumber', self::names()->lineSequenceNumber);
        $properties->salesRequirementCode = Schema::string();
        $properties->salesRequirementCode->enum = array(
            self::AB,
            self::B,
            self::BK,
            self::C,
            self::FT,
            self::IS,
            self::N,
            self::NS,
            self::O,
            self::P2,
            self::P3,
            self::P4,
            self::SC,
            self::SP,
            self::SS,
            self::SW,
            self::Y,
        );
        $properties->salesRequirementCode->description = "Used to indicate a specific requirement of the sale";
        $ownerSchema->addPropertyMapping('SalesRequirementCode', self::names()->salesRequirementCode);
        $properties->actionCode = Schema::string();
        $properties->actionCode->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
        );
        $properties->actionCode->description = "Code indicating the type of action";
        $ownerSchema->addPropertyMapping('ActionCode', self::names()->actionCode);
        $properties->amount = Schema::number();
        $properties->amount->description = "A quantity";
        $ownerSchema->addPropertyMapping('Amount', self::names()->amount);
        $properties->accountNumber = Schema::string();
        $properties->accountNumber->description = "ID associated with purchase charges or substitution charges";
        $ownerSchema->addPropertyMapping('AccountNumber', self::names()->accountNumber);
        $properties->date = Schema::string();
        $properties->date->description = "A specific day";
        $properties->date->format = "date";
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->agencyQualifierCode = Schema::string();
        $properties->agencyQualifierCode->enum = array(
            self::CONST_13,
            self::AX,
            self::BI,
            self::DD,
            self::FA,
            self::FC,
            self::NEMA,
            self::ST,
            self::SZAU,
            self::VI,
        );
        $properties->agencyQualifierCode->description = "Identifies the agency from which code values are sourced";
        $ownerSchema->addPropertyMapping('AgencyQualifierCode', self::names()->agencyQualifierCode);
        $properties->substitutionCode = Schema::string();
        $properties->substitutionCode->description = "Code for determining substitution conditions";
        $ownerSchema->addPropertyMapping('SubstitutionCode', self::names()->substitutionCode);
        $properties->applicationId = Schema::string();
        $properties->applicationId->description = "ERP generated code to uniquely identify the item";
        $ownerSchema->addPropertyMapping('ApplicationId', self::names()->applicationId);
        $properties->buyerPartNumber = Schema::string();
        $properties->buyerPartNumber->description = "Buyer's primary product identifier";
        $ownerSchema->addPropertyMapping('BuyerPartNumber', self::names()->buyerPartNumber);
        $properties->vendorPartNumber = Schema::string();
        $properties->vendorPartNumber->description = "Vendor's primary product identifier";
        $ownerSchema->addPropertyMapping('VendorPartNumber', self::names()->vendorPartNumber);
        $properties->consumerPackageCode = Schema::string();
        $properties->consumerPackageCode->description = "Consumer level or customer unit product identification number";
        $ownerSchema->addPropertyMapping('ConsumerPackageCode', self::names()->consumerPackageCode);
        $properties->eAN = Schema::string();
        $properties->eAN->description = "International Article Number, aka European Article Number, which is the European equivalent of the United States UPC[Universal Product Code]";
        $ownerSchema->addPropertyMapping('EAN', self::names()->eAN);
        $properties->gTIN = Schema::string();
        $properties->gTIN->description = "Global Trade Item Number which is an item identifier that encompasses all product identification numbers such as UPC, EAN, ITF, etc. and can be assigned at various packing levels";
        $ownerSchema->addPropertyMapping('GTIN', self::names()->gTIN);
        $properties->uPCCaseCode = Schema::string();
        $properties->uPCCaseCode->description = "Package or case level product identification number";
        $ownerSchema->addPropertyMapping('UPCCaseCode', self::names()->uPCCaseCode);
        $properties->natlDrugCode = Schema::string();
        $properties->natlDrugCode->description = "National Drug Code or NDC is a unique, universal product identifier for drugs. Primarily used in the pharmaceutical industry";
        $ownerSchema->addPropertyMapping('NatlDrugCode', self::names()->natlDrugCode);
        $properties->internationalStandardBookNumber = Schema::string();
        $properties->internationalStandardBookNumber->description = "ISBN is a unique number assigned to every book before publication";
        $ownerSchema->addPropertyMapping('InternationalStandardBookNumber', self::names()->internationalStandardBookNumber);
        $properties->productID = Schema::arr();
        $properties->productID->items = OrderChangeLineItemItemsConditionOfSaleItemsProductIDItems::schema();
        $ownerSchema->addPropertyMapping('ProductID', self::names()->productID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Details the conditions or requirements of a sale or product substitution";
        $ownerSchema->required = array(
        );
    }
}