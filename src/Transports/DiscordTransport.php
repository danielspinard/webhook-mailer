<?php

namespace WebhookMailer\Transports;

use WebhookMailer\Interfaces\TransportInterface;

class DiscordTransport implements TransportInterface
{
    /**
     * @var string
     */
    private $webhook;

    /**
     * @var array
     */
    private $fields = [];

    /**
     * DiscordTransport constructor
     * 
     * @param string $webhook
     */
    public function __construct(string $webhook)
    {
        $this->webhook = 'https://discord.com/api/webhooks/' . $webhook;
    }

    /**
     * @param string $name
     * @param string $value
     * @return TransportInterface
     */
    public function addField(string $name, string $value): TransportInterface
    {
        array_push($this->fields, [
            'name' => $name,
            'value' => $value,
            'inline' => false
        ]);

        return $this;
    }

    /**
     * @return int
     */
    public function send(): int
    {
        return 200;
    }
}
