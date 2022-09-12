<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierLoadTenders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Details relating to the process of loading a vessel with cargo
 */
class CarrierLoadTenderStopDetailsItemsLadingDetailsItems extends ClassStructure
{
    const CONST_01 = '01';

    const CONST_50 = '50';

    const AF = 'AF';

    const CD = 'CD';

    const CW = 'CW';

    const DG = 'DG';

    const GR = 'GR';

    const HK = 'HK';

    const KG = 'KG';

    const LB = 'LB';

    const LG = 'LG';

    const MC = 'MC';

    const ME = 'ME';

    const MP = 'MP';

    const NS = 'NS';

    const OZ = 'OZ';

    const QS = 'QS';

    const TO = 'TO';

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

    /** @var CarrierLoadTenderStopDetailsItemsLadingDetailsItemsProductIDItems[]|array */
    public $productID;

    /** @var float Numeric value of the weight in reference to the specified item */
    public $itemWeight;

    /** @var string Code specifying the units in which the ItemWeight is being measured by */
    public $itemWeightUOM;

    /** @var float Monetary value of the freight */
    public $ladingAmount;

    /** @var string Free form text relating to the LadingAmount */
    public $ladingAmountDescription;

    /** @var string ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $currency;

    /** @var CarrierLoadTenderStopDetailsItemsLadingDetailsItemsQuantityAndWeight This group contains the quantity of your PackingMedium and other related values such as weight and volume */
    public $quantityAndWeight;

    /** @var CarrierLoadTenderStopDetailsItemsLadingDetailsItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
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
        $properties->productID->items = CarrierLoadTenderStopDetailsItemsLadingDetailsItemsProductIDItems::schema();
        $ownerSchema->addPropertyMapping('ProductID', self::names()->productID);
        $properties->itemWeight = Schema::number();
        $properties->itemWeight->description = "Numeric value of the weight in reference to the specified item";
        $ownerSchema->addPropertyMapping('ItemWeight', self::names()->itemWeight);
        $properties->itemWeightUOM = Schema::string();
        $properties->itemWeightUOM->enum = array(
            self::CONST_01,
            self::CONST_50,
            self::AF,
            self::CD,
            self::CW,
            self::DG,
            self::GR,
            self::HK,
            self::KG,
            self::LB,
            self::LG,
            self::MC,
            self::ME,
            self::MP,
            self::NS,
            self::OZ,
            self::QS,
            self::TO,
        );
        $properties->itemWeightUOM->description = "Code specifying the units in which the ItemWeight is being measured by";
        $ownerSchema->addPropertyMapping('ItemWeightUOM', self::names()->itemWeightUOM);
        $properties->ladingAmount = Schema::number();
        $properties->ladingAmount->description = "Monetary value of the freight";
        $ownerSchema->addPropertyMapping('LadingAmount', self::names()->ladingAmount);
        $properties->ladingAmountDescription = Schema::string();
        $properties->ladingAmountDescription->description = "Free form text relating to the LadingAmount";
        $ownerSchema->addPropertyMapping('LadingAmountDescription', self::names()->ladingAmountDescription);
        $properties->currency = Schema::string();
        $properties->currency->description = "ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('Currency', self::names()->currency);
        $properties->quantityAndWeight = CarrierLoadTenderStopDetailsItemsLadingDetailsItemsQuantityAndWeight::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = CarrierLoadTenderStopDetailsItemsLadingDetailsItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Details relating to the process of loading a vessel with cargo";
        $ownerSchema->required = array(
        );
    }
}