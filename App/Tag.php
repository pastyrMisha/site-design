<?php

namespace App;

abstract class Tag extends Posts

{
    public static function findByPostId(string $getId): ?array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' 
                WHERE ' . static::TABLE . '.id 
                IN (
                    SELECT ' . static::PIVOTROWTWO . ' FROM ' . static::PIVOTTABLE . ' 
                    WHERE ' . static::PIVOTROW . '=:getId
                   )';

        return $db->query($sql, static::class, [':getId' => $getId]);
    }
}