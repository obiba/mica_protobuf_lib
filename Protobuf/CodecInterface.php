<?php

namespace ObibaDrSlump\Protobuf;

interface CodecInterface
{
    public function encode(\ObibaDrSlump\Protobuf\Message $message);
    public function decode(\ObibaDrSlump\Protobuf\Message $message, $data);
}