#! /bin/bash
#Заметки для себя будущего
#Определяем, пришли ли аргументы
if [ ! -n "$1" ]
then
	echo "Arguments not found"
	exit
fi

#Здесь хранятся шаблоны
composer='composer.json'
srcTemp='templates/srcTemp.php'
testTemp='templates/testTemp.php'

#Парсим аргументы
#Получаем имя папки и файла
while [ -n "$1" ]
do
	case "$1" in
		-d) dir=$2 
			shift ;;
		-f) name=$2
			shift ;;
		-*) echo "$1 is not an option" 
			exit ;;
	esac
	
	shift
done

#Проверяем, установлены ли имена файлов и папок
#Защита от подобного запуска ./script -d '' -f ''
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
    while true; do
        read -p "Do you wish to create folders?[yes]" yn
        case $yn in
            [Yy]* ) echo "Creating folders $srcDir and $testsDir";
                    mkdir -p "$srcDir" "$testsDir";
                    break ;;
                    
            [Nn]* ) echo "Folders are not created" ;;
            
            '' )    echo "Creating folders $srcDir and $testsDir";
                    mkdir -p "$srcDir" "$testsDir";
                    break ;;
                    
            * )     echo "Please answer yes or no.";;
        esac
    done
fi

#Создаем имена файлов
srcName=$name".php"
testName=$name"Test.php"

#Имя функции и неймспейс
funcName="${name,}"
namespace=$(echo $dir | sed 's!\/!\\\\!g')

#Полные пути к файлам
srcFullName="$srcDir/$srcName"
testFullName="$testsDir/$testName"

if [[ -f $srcFullName || -f $testFullName ]]
then 
	echo "File $srcFullName or $testFullName is already exists"
	exit
fi

cp $srcTemp $srcFullName
echo "Create file: $srcFullName"
cp $testTemp $testFullName
echo "Create file: $testFullName"

#Изменение шаблонов тут
sed -i "s/#localNs#/$name/g; s/#funcName#/$funcName/g; s/#namespace#/$namespace/g" $srcFullName
sed -i "s/#localNs#/$name/g; s/#funcName#/$funcName/g; s/#namespace#/$namespace/g" $testFullName

#Добавление файла в composer
sed -i "17a\ \t\t\t\"$srcFullName\","  $composer

#Выполняем автозагрузку
make autoload