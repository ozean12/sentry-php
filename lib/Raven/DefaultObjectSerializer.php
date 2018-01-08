<?php

/**
 * Class Raven_DefaultObjectSerializer.
 */
class Raven_DefaultObjectSerializer implements Raven_ObjectSerializerInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports($value)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($value)
    {
        return sprintf("Object %s", get_class($value));
    }
}
