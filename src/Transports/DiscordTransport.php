<?php

namespace WebhookMailer\Transports;

class DiscordTransport
{
    /**
     * @var string
     */
    private $webhook;

    /**
     * DiscordTransport constructor
     * 
     * @param string $webhook
     */
    public function __construct(string $webhook)
    {
        $this->webhook = 'https://discord.com/api/webhooks/' . $webhook;
    }
}
