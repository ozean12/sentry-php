<?php

/**
 * Class Raven_ObjectSerializer.
 */
class Raven_ObjectSerializer
{
    /**
     * @var Raven_ObjectSerializerInterface[]
     */
    private $serializers;

    /**
     * @param mixed $value
     */
    public function serialize($value)
    {
        $strings = [];

        foreach ($this->serializers as $serializer) {
            if ($serializer->supports($value)) {
                $strings[] = $serializer->serialize($value);
            }
        }

        return implode("\n", $strings);
    }

    /**
     * @param Raven_ObjectSerializerInterface $serializer
     */
    public function addSerializer(Raven_ObjectSerializerInterface $serializer)
    {
        $this->serializers[] = $serializer;
    }
}
