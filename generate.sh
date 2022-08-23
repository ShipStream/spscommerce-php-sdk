#!/bin/bash
set -e
cd "$(dirname "${BASH_SOURCE[0]}")"

for file in json-schema/v770/*; do
  name="$(basename "$file")"
  name=${name%%.*}
  echo "Generating classes for $name"
  docker run --rm -v $PWD:/app --workdir /app \
    swaggest/json-cli \
    json-cli gen-php "$file" \
      --ptr-in-schema "#/definitions/$name" \
      --def-ptr "#/definitions" \
      --ns ShipStream\\SpsCommerce\\RSX\\v770\\$name \
      --ns-path src/RSX/v770/$name/
done