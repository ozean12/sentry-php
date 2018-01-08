<?php

/**
 * Interface Raven_ObjectSerializerInterface
 */
interface Raven_ObjectSerializerInterface
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function supports($value);

    /**
     * @return string
     */
    public function serialize($value);
}
