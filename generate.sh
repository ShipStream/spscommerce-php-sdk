#!/bin/bash
set -e
cd "$(dirname "${BASH_SOURCE[0]}")"
versions=(v710 v777)
apis=(
"CarrierFreightDetails.json|CarrierFreightDetail"
"CarrierLoadTenderResponses.json|CarrierLoadTenderResponse"
"CarrierLoadTenders.json|CarrierLoadTender"
"CarrierStatusMessages.json|CarrierStatusMessage"
"Invoices.json|Invoice"
"ItemRegistries.json|ItemRegistry"
"OrderAcks.json|OrderAck"
"OrderChangeAcks.json|OrderChangeAck"
"OrderChanges.json|OrderChange"
"Orders.json|Order"
"OrganizationalRelationships.json|OrganizationalRelationship"
"PlanningSchedules.json|PlanningSchedule"
"ProductActivities.json|ProductActivity"
"Shipments.json|Shipment"
"WarehouseInventoryAdjustmentAdvices.json|WarehouseInventoryAdjustmentAdvice"
"WarehouseTransferReceiptAdvices.json|WarehouseTransferReceiptAdvice"
)
for version in "${versions[@]}"; do
  for api in "${apis[@]}"; do
    file=${api%%|*}
    class=${api##*|}
    name=${file%.json}
    [ ! -f "json-schema/$version/$file" ] && continue
    echo "Generating $class classes for $version/$file schema"
    mkdir -p src/RSX/$version/$name
    docker run --rm -v $PWD:/app --workdir /app \
      swaggest/json-cli \
      json-cli gen-php "json-schema/$version/$file" \
        --ptr-in-schema "#/definitions/$class" \
        --def-ptr "#/definitions" \
        --ns ShipStream\\SpsCommerce\\RSX\\$version\\$name \
        --ns-path src/RSX/$version/$name/
  done
done
