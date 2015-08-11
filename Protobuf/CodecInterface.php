<?php

namespace StudyDrSlump\Protobuf;

interface CodecInterface
{
    public function encode(\StudyDrSlump\Protobuf\Message $message);
    public function decode(\StudyDrSlump\Protobuf\Message $message, $data);
}