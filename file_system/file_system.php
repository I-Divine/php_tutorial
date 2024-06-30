<?php

$dir = scandir(__DIR__); //lists the files and directories in a specific path
var_dump($dir);
echo "<br/>";

var_dump(is_dir($dir[1]));
echo "<br/>";
var_dump(is_file($dir[1]));
echo "<br/>";

// create directory
// mkdir("newdir");

// remove directory
// rmdir("newdir");

if (file_exists("file.txt")){
    echo filesize("file.txt");
} else{
echo "FILE DOES NOT EXIST";
}

$file = fopen("file.txt",'r');
while(($line = fgets($file)) !== false){
    echo $line, "<br/>";
}
echo "<br/>";

$csv_file = fopen("csv_file.txt", "r");
echo "<pre>";
while(($line = fgetcsv($csv_file)) !== false){
    print_r($line);
}
echo "</pre>";

file_put_contents("new_file.txt","hello");
file_put_contents("new_file.txt","world",FILE_APPEND);

//deletes files
// unlink("new_file.txt");

//copy a files contents to another location
copy("new_file.txt", "copy.txt");

// renames a file
// rename("new_file.txt", "file_2.txt");

print_r(pathinfo("./copy.txt")) ;