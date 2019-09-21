#! /bin/bash

function createFileIfNotExists {
local file=$1
local template=$2
if [[ ! -f "$file" ]]
  then
    cp $template $file;
    echo "File $file was created";
  else
    echo "File $file is already exists."
fi
}
