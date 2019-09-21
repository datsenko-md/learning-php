#! /bin/bash
. "$sourceDir/inArray.sh"
. "$sourceDir/isEmpty.sh"

function checkIsValidArguments {
local key=$1
local path=$2

if [[ $(inArray $key ${keys[*]}) = 'false' || $(isEmpty $path) = 'true' ]]
  then
    echo 'Invalid Arguments!'
    exit
fi
}