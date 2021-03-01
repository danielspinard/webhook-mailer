<?php

namespace WebhookMailer;

interface MailerInterface
{
    /**
     * @param MailerAbstract $mailer
     * @return void
     */
    public function request(MailerAbstract $message): void;
}
