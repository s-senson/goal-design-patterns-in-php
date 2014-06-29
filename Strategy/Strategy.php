<?php

interface OutputInterface
{
    public function load($data);
}

class SerializedArrayOutput implements OutputInterface
{
    public function load($data)
    {
        return serialize($data);
    }
}

class JsonStringOutput implements OutputInterface
{
    public function load($data)
    {
        return json_encode($data);
    }
}

class ArrayOutput implements OutputInterface
{
    public function load($data)
    {
        return $data;
    }
}





 