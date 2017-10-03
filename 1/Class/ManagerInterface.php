<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 26/09/17
 * Time: 11:34
 */

interface ManagerInterface
{
    public function create($object);
    public function update($object);
    public function delete($object);
    public function findById($id);
    public function findAll();

}