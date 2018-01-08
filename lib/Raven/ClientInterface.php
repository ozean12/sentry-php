<?php

/**
 */
interface Raven_ClientInterface
{
    /**
     * Log an exception to sentry
     *
     * @param \Throwable|\Exception $exception The Throwable/Exception object.
     * @param array                 $data      Additional attributes to pass with this event (see Sentry docs).
     * @param mixed                 $logger
     * @param mixed                 $vars
     * @return string|null
     */
    public function captureException($exception, $data = null, $logger = null, $vars = null);

    /**
     * @return Raven_ReprSerializer
     */
    public function getReprSerializer();
}
