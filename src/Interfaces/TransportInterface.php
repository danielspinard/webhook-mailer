<?php

namespace WebhookMailer\Interfaces;

interface TransportInterface
{
    /**
     * @param string $name
     * @param string $value
     * @return TransportInterface
     */
    public function addField(string $name, string $value): TransportInterface;

    /**
     * @return int
     */
    public function send(): int;
}
