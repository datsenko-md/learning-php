#! /bin/bash
#Заметки для себя будущего
#Определяем, пришли ли аргументы
if [ ! -n "$1" ]
then
	echo "Arguments not found"
	exit
fi

#Здесь хранятся шаблоны
temp='templates/Interface/InterfaceTemp.php'

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

if [[ ! -d "$srcDir" ]]
then
	echo "Directory $srcDir is not exists"
    while true; do
        read -p "Do you wish to create folder?[yes]" yn
        case $yn in
            [Yy]* ) echo "Creating folder $srcDir";
                    mkdir -p "$srcDir";
                    break ;;
                    
            [Nn]* ) echo "Folder is not created";
                    exit ;;
            
            '' )    echo "Creating folder $srcDir";
                    mkdir -p "$srcDir";
                    break ;;
                    
            * )     echo "Please answer yes or no.";;
        esac
    done
fi

#Создаем имена файлов
srcName=$name".php"

#Имя функции и неймспейс
interfaceName=$name
namespace=$(echo $dir | sed 's!\/!\\\\!g')

#Полные пути к файлам
fullName="$srcDir/$srcName"

if [[ -f $fullName ]]
then 
	echo "File $fullName is already exists"
	exit
fi

cp $temp $fullName
echo "Creating file: $fullName"

#Изменение шаблонов тут
sed -i "s/#interfaceName#/$interfaceName/g; s/#namespace#/$namespace/g" $fullName
