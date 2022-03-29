<?php

namespace App;

abstract class Posts
{
    public $id;

    public static function findAll(): ?array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;

        return $db->query($sql, static::class);
    }

    public static function findOne(string $rowName = null, string $getParam = null): ?Posts
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE ' . $rowName . '=:getParam';

        $posts = $db->query($sql, static::class, [':getParam' => $getParam]);

        return $posts[0] ?? null;
    }

    public static function findNearest(Posts $post, string $step): ?Posts
    {
        $id = $post->id;
        $db = new Db();

        if ('prev' === $step) {
            $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id<:getId' . ' ORDER BY ' . static::TABLE . '.id' . ' DESC LIMIT 1';
        } else if ('next' === $step) {
            $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id>:getId' . ' LIMIT 1';
        } else {
            die('Неверно задан параметр сортировки');
        }
        $posts = $db->query($sql, static::class, [':getId' => $id]);

        return $posts[0] ?? null;
    }

    public static function pivotFindByTagId(string $getId): ?array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ', ' . static::PIVOTTABLE .
            ' WHERE ' . static::TABLE . '.id=' . static::PIVOTTABLE . '.' . static::PIVOTROW . '
            AND ' . static::PIVOTTABLE . '.' . static::PIVOTROWTWO . '=:getId';

        return $db->query($sql, static::class, [':getId' => $getId]);
    }

    public static function singleFindByTagId(string $getId): ?array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE .
            ' WHERE ' . static::TABLE . '.' . 'attachment=:getId';

        return $db->query($sql, static::class, [':getId' => $getId]);
    }

    public static function append(array $rowsArr): array
    {
        $db = new Db();
        $keys = '';
        $values = '';

        foreach ($rowsArr as $key => $value) {
            $separator = $value === end($rowsArr) ? '' : ', ';
                $keys .= $key . $separator;
                $values .= "'" . $value . "'" . $separator;
        }

        $sql = "INSERT INTO " . static::TABLE . " (" . $keys . ") 
                VALUES (" . $values . ")";

        return $db->query($sql, static::class);
    }
}
