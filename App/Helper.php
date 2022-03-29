<?php

namespace App;

class Helper
{
    public static function scanDir(string $path): array
    {
        $res = [];
        $imgDir = scandir($path);
        foreach ($imgDir as $key => $image) {
            if ($image !== '.' && $image !== '..' && $image !== 'cont') {
                $res[] = $image;
            }
        }
        return $res;
    }

    public static function countFiles(string $path): int
    {
        $dir = opendir($path);
        $count = 0;
        while ($file = readdir($dir)) {
            if ($file === '.' || $file === '..' || $file === 'cont' || is_dir('path/to/dir' . $file)) {
                continue;
            }
            $count++;
        }
        return $count;
    }

    public static function getCutContent(string $content): string
    {
        return mb_substr($content, 0, 160) . '...';
    }

    public static function getCutUrl(string $path = null): string
    {
        $path_parts = pathinfo($path);
        return $path_parts['basename'];
    }

    public static function translitId(string $value): string
    {
        $converter = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
            'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
            'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'sch', 'ь' => '', 'ы' => 'y', 'ъ' => '',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

            'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D',
            'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I',
            'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N',
            'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
            'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch',
            'Ш' => 'Sh', 'Щ' => 'Sch', 'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
            'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
        ];

        $value = strtr($value, $converter);
        return mb_strtolower($value);
    }

    public static function mb_ucfirst($string, $encoding = 'UTF-8'){
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }

    public static function varDump($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
}