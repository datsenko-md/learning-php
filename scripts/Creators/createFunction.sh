#! /bin/bash

composer="$baseDir/composer.json"

srcTemplate="$templatesDir/Function/srcFunctionTemp.php"
testTemplate="$templatesDir/Function/testFunctionTemp.php"

funcName=${basename,}
namespace=$(echo $dirname | sed 's!\/!\\\\!g')

createDirectoryIfNotExists "src/$dirname"
createDirectoryIfNotExists "tests/$dirname"

createFileIfNotExists $srcFile $srcTemplate
createFileIfNotExists $testFile $testTemplate

sed -i "s/#localNs#/$basename/g; s/#funcName#/$funcName/g; s/#namespace#/$namespace/g" $srcFile
sed -i "s/#localNs#/$basename/g; s/#funcName#/$funcName/g; s/#namespace#/$namespace/g" $testFile

sed -i "17a\ \t\t\t\"$srcFile\"," $composer

make autoload