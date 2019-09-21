#! /bin/bash

files=`find ./tests -name '*.php'`

for file in $files
do
echo "Change namespace in $file"
sed -i "s/\\\\Tests//; s/namespace Php/namespace Tests/" $file
done
