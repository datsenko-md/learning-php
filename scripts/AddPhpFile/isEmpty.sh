#! /bin/bash

function isEmpty {
if [ -z $1 ]
  then
    echo 'true'
  else
    echo 'false'
fi
}
