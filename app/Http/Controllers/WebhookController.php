<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\WebhookNotification;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierController;


class WebhookController extends CashierController
{

    /**
     * Handle a Stripe webhook.
     *
     * @param  array  $payload
     * @return Response
     */
    public function handleDisputeOpened(WebhookNotification $notification)
    {
        
        // Handle The Event
        
    }

}
