<?php

function rewriteJsonFile(string $pathToJsonFile, string $key, $value): void {
    // JSON файл лежит по пути $pathToJsonFile. Необходимо получить содержимое этого файла,
    // добавить в него поле $key со значением $value и перезаписать.

	$content=file_get_contents($pathToJsonFile);

	$array= json_decode($content, TRUE);

	$array[$key] =$value;

	$encoded=json_encode($array);

	file_put_contents($pathToJsonFile, $encoded);

}