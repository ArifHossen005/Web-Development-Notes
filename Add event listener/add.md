====EVENTS=====
Commands
1.php artisan make:event NameEvent
2.php artisan make:listener NameListners --event=NameEvent
3.php artisan make:mail UserMail    //name dilam user mail 
4.mail er ektra blade lagbe mail.blade.php

Step:1
then ami joto gulai listener r event banai na keno amke 
provider er moddhe EventServiceProvider er modde declare korte 
hobe 

protected $listen = [
	Registered::class =>[
	SendEmailVerification::class,

],
\App\Events\NameEvent::class =>
	\App\Listeners\NameListeners ,




],

Steps:2
Controller er vitor theke eta ek call korte hobe 
and use kore nite hobe ;like use App\Events\NameEvent

$edata=[
'title'=>$request->title,
'date'=>date('d F Y',strtotime(time))]
event(new NameEvent($edata)) ;    //jodi ami data pass korte chay tahole upore declare korte hobe 



steps:3

app event e giye amr sob  kaj construct er vitore but 
agei amake public kore data jeta pass korte chay seta dhorate hobe 

public $variableName;

public function __construct($post)
{
    $this->variableName = $post; // Assign the $post parameter to the $variableName property
}


steps:4
mail er vitore giye 

public $post;
public $variableName;

public function __construct($post)
{
    $this->variableName = $post; // Assign the $post parameter to the $variableName property
}

public function build()
{
 return $this->view('mail',['post'=>$this->post]);
}




steps:5

then listener e giye  

public function handle(NameEvent $event)
{
Mail::to(Auth::user()->email)->send(new UserMail($event->post)); ekhane er event er variable er name dilam 

}


Steps:6


view er modde call kore dibo 





 