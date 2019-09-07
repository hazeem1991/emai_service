<?php

namespace App\Http\Libraries\EmailSenders\MailJet;

use App\Http\Libraries\EmailSenders\MailerResult;

class MailjetResult implements MailerResult
{
    private $statusCode;
    private $message;
    private $headers;
    private $rawResult;

    public function __construct(...$args)
    {
        $this->statusCode = (string)$args[0];
        $this->message = $args[1];
        $this->headers = $args[2];
        $this->rawResult = json_encode(end($args));
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getStatusCode(): string
    {
        return $this->statusCode;
    }

    public function getRaw(): string
    {
        return $this->rawResult;
    }
}