<?php

namespace app\models;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{


    abstract protected function getTableName();


    public function getOne($id) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";

        //return DB::getInstance()->queryOne($sql, ['id' => $id]);
        return DB::getInstance()->queryOneObject($sql, ['id' => $id], static::class);
    }
    public function getAll() {
        $sql = "SELECT * FROM {$this->getTableName()}";

        return DB::getInstance()->queryAll($sql);
    }

    public function insert() {
        $params = [];
        $keys = [];

        foreach ($this as $key => $value) {
            if ($key == 'id') continue;
            $params [":{$key}"] =$value;
            $keys [] = $key;




        }
        $value= implode(',',array_keys($params));
        $keys= implode(',', $keys);
        $tableName = static::getTableName();

        $sql = "INSERT INTO `{$tableName}`({$keys})VALUES({$value})";

        DB::getInstance()->execute($sql, $params);
        $this->id = DB::getInstance()->lastInsertId();

       return $this;
    }

    public function update() {

    }

    public function delete() {

    }

}