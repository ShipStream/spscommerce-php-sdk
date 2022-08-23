#!/bin/bash
set -e
cd "$(dirname "${BASH_SOURCE[0]}")"

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
"WarehouseTransferReceiptAdvices.json|WarehouseTransferReceiptAdvice"
)
for api in "${apis[@]}"; do
  file=${api%%|*}
  class=${api##*|}
  name=${file%.json}
  echo "Generating $class classes for $file schema"
  mkdir -p src/RSX/v770/$name
  docker run --rm -v $PWD:/app --workdir /app \
    swaggest/json-cli \
    json-cli gen-php "json-schema/v770/$file" \
      --ptr-in-schema "#/definitions/$class" \
      --def-ptr "#/definitions" \
      --ns ShipStream\\SpsCommerce\\RSX\\v770\\$name \
      --ns-path src/RSX/v770/$name/
done