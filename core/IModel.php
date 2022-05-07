<?php
interface IModel{
    public function insert():int;
    public function update():int;
    public function delete():int;
    public function findAll():array;
    public function findById():objet|null;
    public function findBy(string $sql,array $data=null,$single=false ):objet|null;

}