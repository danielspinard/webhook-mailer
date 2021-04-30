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
     * @return array
     */
    private function content(): array
    {
        return [
            'username' => 'danielspinard/webhook-mailer',
            'content' => '@here new contact e-mail received!',
            'avatar_url' => null,
            'tts' => false,
            'embeds' => [[
                'title' => null,
                'description' => null,
                'timestamp' => (new Datetime)->format(DateTime::ATOM),
                'url' => null,
                'color' => hexdec('8F33FE'),
                'author' => [
                    'name' => null,
                    'url' => null,
                    'icon_url' => null,
                ],
                'image' => [
                    'url' => null,
                ],
                'thumbnail' => [
                    'url' => null,
                ],
                'fields' => $this->fields,
                'footer' => [
                    'text' => 'danielspinard/webhook-mailer',
                    'icon_url' => null,
                ],
            ]],
        ];
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
