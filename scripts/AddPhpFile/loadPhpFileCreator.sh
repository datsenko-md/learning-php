#! /bin/bash

function loadPhpFileCreator {
local createFunction="$creatorsDir/createFunction.sh"
local createClass="$creatorsDir/createClass.sh"
local createInterface="$creatorsDir/createInterface.sh"

case "$key" in
  -f) . $createFunction ;;
  -c) . $createClass ;;
  -i) . $createInterface ;;
esac
}