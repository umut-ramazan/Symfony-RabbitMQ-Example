<?php
namespace App\Controller;
use App\Message\OrderConfirmationEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends  AbstractController
{
    /**
     * @Route("/orderplace",name="placeorder")
     * @param MessageBusInterface $messageBus
     * @return Response
     */
    public function  placeOrder(MessageBusInterface $messageBus):Response
    {
        $messageBus->dispatch(new OrderConfirmationEmail(1));

        return new Response('Your Order has been placed');
    }
}


