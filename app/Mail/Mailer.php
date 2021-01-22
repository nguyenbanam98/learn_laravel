<?php


namespace App\Mail;


class Mailer
{
    /**
     * @var MailTransport
     */
    private  $transport;

    public function __construct(MailTransport $transport)
    {

        $this->transport = $transport;
    }

    public function send($to, string $template, array  $data)
    {
        $composed = $this->compose($template, $data);

        $this->transport->send($to, $composed);
    }

    public function compose(string $template, array $data)
    {
        return "Hello {$data['user']->name}";
    }

}
