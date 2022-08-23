<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderAck;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderAckLineItemItems extends ClassStructure
{
    /** @var OrderAckLineItemItemsOrderLine */
    public $orderLine;

    /** @var OrderAckLineItemItemsLineItemAcknowledgementItems[]|array */
    public $lineItemAcknowledgement;

    /** @var OrderAckLineItemItemsDatesItems[]|array */
    public $dates;

    /** @var OrderAckLineItemItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var OrderAckLineItemItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var OrderAckLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var OrderAckLineItemItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var OrderAckLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var OrderAckLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var OrderAckLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var OrderAckLineItemItemsCommodityItems[]|array */
    public $commodity;

    /** @var OrderAckLineItemItemsAddressItems[]|array */
    public $address;

    /** @var OrderAckLineItemItemsSublineItems[]|array */
    public $subline;

    /** @var OrderAckLineItemItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /** @var OrderAckLineItemItemsTaxesItems[]|array */
    public $taxes;

    /** @var OrderAckLineItemItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderAckLineItemItemsFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var OrderAckLineItemItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var OrderAckLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderLine = OrderAckLineItemItemsOrderLine::schema();
        $ownerSchema->addPropertyMapping('OrderLine', self::names()->orderLine);
        $properties->lineItemAcknowledgement = Schema::arr();
        $properties->lineItemAcknowledgement->items = OrderAckLineItemItemsLineItemAcknowledgementItems::schema();
        $ownerSchema->addPropertyMapping('LineItemAcknowledgement', self::names()->lineItemAcknowledgement);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderAckLineItemItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = OrderAckLineItemItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = OrderAckLineItemItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = OrderAckLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = OrderAckLineItemItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = OrderAckLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = OrderAckLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderAckLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderAckLineItemItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->address = Schema::arr();
        $properties->address->items = OrderAckLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = OrderAckLineItemItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = OrderAckLineItemItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderAckLineItemItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderAckLineItemItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = OrderAckLineItemItemsFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = OrderAckLineItemItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderAckLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}