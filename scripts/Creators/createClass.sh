#! /bin/bash

srcTemplate="$templatesDir/Class/srcClassTemp.php"
testTemplate="$templatesDir/Class/testClassTemp.php"

className=$basename
namespace=$(echo $dirname | sed 's!\/!\\\\!g')

createDirectoryIfNotExists "src/$dirname"
createDirectoryIfNotExists "tests/$dirname"

createFileIfNotExists $srcFile $srcTemplate
createFileIfNotExists $testFile $testTemplate

#Изменение шаблонов тут
sed -i "s/#className#/$className/g; s/#namespace#/$namespace/g" $srcFile
sed -i "s/#className#/$className/g; s/#namespace#/$namespace/g" $testFile
