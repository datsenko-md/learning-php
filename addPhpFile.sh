#! /bin/bash

baseDir=`pwd`
scriptsDir="$baseDir/scripts/"
sourceDir="$scriptsDir/AddPhpFile"
templatesDir="$scriptsDir/Templates"
creatorsDir="$scriptsDir/Creators"
keys=('-f' '-c' '-i')

. "$sourceDir/checkIsValidArguments.sh"
. "$sourceDir/loadPhpFileCreator.sh"
. "$sourceDir/createDirectoryIfNotExists.sh"
. "$sourceDir/createFileIfNotExists.sh"

checkIsValidArguments $1 $2

key=$1
path=$2

srcFile="src/"$path".php"
testFile="tests/"$path"Test.php"

basename=`basename $path`
dirname=`dirname $path`

loadPhpFileCreator