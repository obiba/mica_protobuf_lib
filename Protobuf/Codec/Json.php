<?php

namespace StudyDrSlump\Protobuf\Codec;

use StudyDrSlump\Protobuf;

/**
 * This codec serializes and unserializes from/to Json strings
 * where the keys represent the field's name.
 *
 * It makes use of the PhpArray codec to do the heavy work to just
 * take care of converting the array to/from Json strings.
 */
class Json extends PhpArray
    implements Protobuf\CodecInterface
{
    /**
     * @param \StudyDrSlump\Protobuf\Message $message
     * @return string
     */
    public function encode(Protobuf\Message $message)
    {
        $data = $this->encodeMessage($message);
        return json_encode($data);
    }

    /**
     * @param \StudyDrSlump\Protobuf\Message $message
     * @param string $data
     * @return \StudyDrSlump\Protobuf\Message
     */
    public function decode(Protobuf\Message $message, $data)
    {
        $data = json_decode($data);
        return $this->decodeMessage($message, $data);
    }

}
