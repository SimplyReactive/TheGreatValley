#!/usr/bin/env bash

mkdir -p ~/.thegreatvalley

thegreatvalleyRoot=~/.thegreatvalley

cp -i src/stubs/TheGreatValley.yaml "$thegreatvalleyRoot/TheGreatValley.yaml"
cp -i src/stubs/after.sh "$thegreatvalleyRoot/after.sh"
cp -i src/stubs/aliases "$thegreatvalleyRoot/aliases"

echo "The Great Valley initialized!"
