<?php declare(strict_types=1);

namespace WebhookMailer;

use JsonSerializable;

abstract class MailerAbstract implements JsonSerializable
{
    /**
     * @return array
     */
    abstract function toArray(): array;

    /**
     * @return void
     */
    abstract function jsonSerialize();
}
