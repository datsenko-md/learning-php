#! /bin/bash

function inArray {
local value=$1
shift
local arr=$@
local exists='false'

for item in $arr
do
  if [[ $value = $item ]]
    then
      exists='true'
  fi
done

echo $exists
}