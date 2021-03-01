<?php declare(strict_types=1);

namespace WebhookMailer;

class Mailer
{
    /**
     * @param MailerInterface $transport
     * @return void
     */
    public function make(MailerInterface $transport): MailerInterface
    {
        return $transport;
    }

    /**
     * @param MailerInterface $transport
     * @return boolean
     */
    public function send(MailerInterface $transport): bool
    {
        return false;
    }
}
