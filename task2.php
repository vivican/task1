<?php

function createFileWithSum(string $pathToFiles): void {
    // Даны два текстовых файла 1.txt и 2.txt. Они находятся в директории $pathToFiles
    // Каждый файл содержит по n целых чисел, располагающихся на отдельных строках.
    // Необходимо вычислить суммы чисел из двух файлов на соответствующих строках и записать их в файл 3.txt.
    // Файл 3.txt необходимо создать в директории $pathToFiles

    //$x= fopen($pathToFiles.'/1.txt','r')or die("Нет директории");
    //fclose($x);
    //$y=fopen($pathToFiles.'/2.txt','r')or die("Нет директории");
    //fclose($y);

    if(!is_dir($pathToFiles)){
        return;
    }

    $arrayone = file($pathToFiles . '/1.txt');
    $arraytwo = file($pathToFiles . '/2.txt');

    foreach ($arrayone as $index => $numberOne) {
        $numberTwo = $arraytwo[$index];

        $arraythree[$index]= $numberOne + $numberTwo;
    }

    file_put_contents($pathToFiles . '/3.txt', implode("\n", $arraythree));
}
