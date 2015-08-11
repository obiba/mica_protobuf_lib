<?php

namespace StudyDrSlump\Protobuf\Codec\PhpArray;

class Unknown extends \StudyDrSlump\Protobuf\Unknown
{
    public function __construct($tag, $type, $data)
    {
        $this->tag = $tag;
        $this->type = $type;
        $this->data = $data;
    }
}
