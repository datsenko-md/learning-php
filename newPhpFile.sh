#! /bin/bash

if [ ! -n "$1" ]
then
	echo "Arguments not found"
	exit
fi

srcTemp='templates/srcTemp.php'
testTemp='templates/testTemp.php'
#default dir
dir='Hexlet/Arrays'

while [ -n "$1" ]
do
	case "$1" in
		-d) dir=$2 
			shift ;;
		-f) name=$2
			shift ;;
		--) shift
			break ;;
		-*) echo "$1 is not an option" 
			exit ;;
		*) 	name=$1 ;;
	esac
	
	shift
done

if [[ ! -n "$name" || ! -n "$dir" ]]
then
	echo "FileName or DirName not set"
	echo "FileName => $name"
	echo "DirName => $dir"
	exit
fi

srcDir="src/$dir"
testsDir="tests/$dir"

if [[ ! -d "$srcDir" || ! -d "$testsDir" ]]
then
	echo "Directory $srcDir or $testsDir is not exists"
	exit
fi

#name=$1
srcName=$name".php"
testName=$name"Test.php"
funcName="${name,}"

srcFullName="$srcDir/$srcName"
testFullName="$testsDir/$testName"

if [[ -f $srcFullName || -f $testFullName ]]
then 
	echo "File $srcFullName or $testFullName is already exists"
	exit
fi

cp $srcTemp $srcName
echo "Create file: $srcName"
cp $testTemp $testName
echo "Create file: $testName"

sed -i "s/#nsName#/$name/g; s/#funcName#/$funcName/g" $srcName
sed -i "s/#nsName#/$name/g; s/#funcName#/$funcName/g" $testName

mv $srcName $srcDir
echo "Move $srcName to $srcDir"
mv $testName $testsDir
echo "Move $testName to $testsDir"