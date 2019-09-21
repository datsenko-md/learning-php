#! /bin/bash

function createDirectoryIfNotExists {
local dir=$1
if [[ ! -d "$dir" ]]
  then
    mkdir -p "$dir";
    echo "Directory $dir was created";
  else
    echo "Directory $dir is already exists."
fi
}