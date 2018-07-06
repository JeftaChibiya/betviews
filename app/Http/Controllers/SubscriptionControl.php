<?php

namespace App\Http\Controllers;

use Auth;
use App\Plan;
use Braintree\ClientToken;
use Illuminate\Http\Request;

class SubscriptionControl extends Controller
{

    /** 
     *  Show options of Plans
     *  29.6.18, Fri
     * 
     */
    public function plans()
    {

      $plans = Plan::all();
      $clientToken = ClientToken::generate();
      $ends_at = now()->addDays(29);
      return view('plan.index', compact('clientToken', 'plans','ends_at'));

    }
    
    
    /** 
     *  New Subscription instance & Payment setup 
     *  29.6.18, Fri
     * 
     */
    public function payments(Plan $plan)
    {

      $clientToken = ClientToken::generate();
      return view('auth.payments', ['clientToken' => $clientToken ]);

    }


    /** 
     *  New Subscription instance
     *  29.6.18, Fri
     */    
	public function store() {
		//check that we have nonce and plan in the incoming HTTP request
		if( empty( Input::get( 'payment_method_nonce' ) ) || empty( Input::get( 'plan' ) ) ){
			return redirect( '/subscription?success=false&message=' . urlencode( 'Invalid request' ), 400 );
		}
		//set user
        $user = Auth::user();
        
		try {
			//Try to create subscription
            $subscription = $user->newSubscription('main', Input::get('plan') )
                                 ->create( Input::get( 'payment_method_nonce' ),
                                   [
                                    'email' => $user->email
                                   ]
                                );
		} catch ( \ Exception $e ) {
			//get message from caught error
			$message = $e->getMessage();
			//send back error message to view
			return redirect( '/subscription/join?success=false&message=' . urlencode( $message ) );
		}
		//Go to subscription manage view beacuse all is well
		return redirect( '/subscription/manage?success=true' );
		
    }  
    
    /** 
     *  Cancel Subscription
     * 
     */
	public function cancel()
	{
		$user = Auth::user();
		$subscription =  $useruser->subscription('main')->cancel();
		return redirect( '/subscription/manage?success=true' );
    }    
    

    /** 
     *  View and manage subscriptions
     * 
     */
	public function manage()
	{
		$user = Auth::user();
		$subscriptions = $user->getSubscription();
		return view('subscription-manage', ['subscriptions' => $subscriptions, ]);
    }


    
        
}
