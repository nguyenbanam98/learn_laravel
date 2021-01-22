<?php


namespace App\Mail;

interface  MailTransport
{
    public function send($to, $content);

//    public function compose(string $template, array $data);
}
