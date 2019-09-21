#! /bin/bash

srcTemplate="$templatesDir/Interface/srcInterfaceTemp.php"

createDirectoryIfNotExists "src/$dirname"
createFileIfNotExists $srcFile $srcTemplate

interfaceName=$basename
namespace=$(echo $dirname | sed 's!\/!\\\\!g')

sed -i "s/#interfaceName#/$interfaceName/g; s/#namespace#/$namespace/g" $srcFile