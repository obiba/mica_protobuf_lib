<?php

namespace ObibaDrSlump\Protobuf\Codec\PhpArray;

class Unknown extends \ObibaDrSlump\Protobuf\Unknown
{
    public function __construct($tag, $type, $data)
    {
        $this->tag = $tag;
        $this->type = $type;
        $this->data = $data;
    }
}
