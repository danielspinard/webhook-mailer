<?php declare(strict_types=1);

namespace WebhookMailer;

class MailerLog
{
    /**
     * @var string
     */
    private $basePath;

    /**
     * @var MailerException
     */
    private $exception;

    /**
     * @var string
     */
    private $content;
    
    /**
     * @param string $basePath
     * @param MailerException $mailerException
     * @param string $content
     */
    public function __construct(string $basePath, MailerException $mailerException, string $content)
    {
        $this->basePath = $basePath;
        $this->exception = $mailerException;
        $this->content = $content;
        $this->logger($this);
    }

    /**
     * @param MailerLog $logger
     * @return void
     */
    private function logger(MailerLog $logger): void
    {
    }
}
