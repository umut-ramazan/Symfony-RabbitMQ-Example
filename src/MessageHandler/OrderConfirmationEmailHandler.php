<?php

namespace App\MessageHandler;

use App\Message\OrderConfirmationEmail;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class OrderConfirmationEmailHandler implements MessageHandlerInterface
{
    public function __invoke(OrderConfirmationEmail $orderConfirmationEmail)
    {
        //qurey order /customer details database
        // create email from template
        //send email
        dump(  'Sending email now..');
    }
}