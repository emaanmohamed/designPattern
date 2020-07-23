<?php


namespace Creational\ProtoType;


class ManualCarProtoType extends abstractCarProtoType
{
    protected $model = 'Manual';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

}