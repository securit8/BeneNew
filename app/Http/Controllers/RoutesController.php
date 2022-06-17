<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Redirect;
use App\Models\ticket;
use App\Mail\BeneMail;
use Mail;

class RoutesController extends Controller
{
    public function payzepost(Request $request){

        $client = new \GuzzleHttp\Client();
 // generating id wich changes tickets status after
           $today=date('YmdHi');
        
       //adding this data into request, to feed database
         $request->request->add(['given_id' => $today]);
        $request->request->add(['status' => 'pending']);
        
       if($request->transfer=="tbilisi1"){
        $price=$request->raodenoba*50;
        $trans="&#4311;&#4305;&#4312;&#4314;&#4312;&#4321;&#4312; - Black Sea Arena (&#4308;&#4320;&#4311;&#4312; &#4306;&#4310;&#4304;)";
       }
       if($request->transfer=="tbilisi2"){
        $price=$request->raodenoba*80;
        $trans="&#4311;&#4305;&#4312;&#4314;&#4312;&#4321;&#4312; - Black Sea Arena (&#4308;&#4320;&#4311;&#4312; &#4306;&#4310;&#4304;)";
       }
       if($request->transfer=="kutais1"){
        $price=$request->raodenoba*30;
        $trans="&#4325;&#4323;&#4311;&#4304;&#4312;&#4321;&#4312; - Black Sea Arena (&#4308;&#4320;&#4311;&#4312; &#4306;&#4310;&#4304;)";
       }
       if($request->transfer=="kutais2"){
        $price=$request->raodenoba*50;
        $trans="&#4325;&#4323;&#4311;&#4304;&#4312;&#4321;&#4312; - Black Sea Arena (&#4308;&#4320;&#4311;&#4312; &#4306;&#4310;&#4304;)";
       }
       if($request->transfer=="batum1"){
        $price=$request->raodenoba*25;
        $trans="&#4305;&#4304;&#4311;&#4323;&#4315;&#4312; - Black Sea Arena (&#4308;&#4320;&#4311;&#4312; &#4306;&#4310;&#4304;)";
       }
       if($request->transfer=="batum2"){
        $price=$request->raodenoba*40;
        $trans="&#4305;&#4304;&#4311;&#4323;&#4315;&#4312; - Black Sea Arena (&#4317;&#4320;&#4312; &#4306;&#4310;&#4304;)";
       }
       dd($price);
       $request->request->add(['Price' => $price]);
       $Name=$request->Name;
       $Name=str_replace(' ', '', $Name);
       $LastName=$request->LastName;
       $LastName=str_replace(' ', '', $LastName);
       $Email=$request->Email;
       $Email=str_replace(' ', '', $Email);
       $Phone=$request->Phone;
       $Phone=str_replace(' ', '', $Phone);
       $raodenoba=$request->raodenoba;
       $transfer=$request->transfer;
       $qr=$today;
        $response = $client->request('POST', 'https://payze.io/api/v1', [
          'body' => '{"method":"justPay","apiKey":"D385FD3954F640A4860478B47C3FC418",
            "apiSecret":"3C37E0F457FC4482B67EED4356B1AF3A","data":{"amount":'.$price.',
                "currency":"GEL","callback":"https://bene-exclusive.com/events/LImperatrice/ok/'.$today.'?Name='.$Name.'&LastName='.$LastName.'&Email='.$Email.'&Phone='.$Phone.'&transfer='.$transfer.'&Price='.$Price.'&raodenoba='.$raodenoba.'&qr='.$qr.'",
                "callbackError":"https://bene-exclusive.com/events/LImperatrice/fail/'.$today.'?Name='.$Name.'&LastName='.$LastName.'&Email='.$Email.'&Phone='.$Phone.'&transfer='.$transfer.'&Price='.$Price.'&raodenoba='.$raodenoba.'&qr='.$qr.'","preauthorize":false,
                "lang":"GE","hookUrl":"https://corp.com/payze_hook?authorization_token=token"}}',
          'headers' => [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
          ],
        ]);  
        $input = $request->except('_token');
        $ticket = new ticket();
        $ticket->fill($input);
        $ticket->unguard();
		$ticket->save();

          $json = $response->getBody();
         $json = json_decode($json, true);
         $trurl=$json['response'];
        $redirUrl=$trurl['transactionUrl'];
        

     
     
      

            return Redirect::intended($redirUrl);
        }

  public function okcallback($id){

        $ticket = ticket::where('given_id', $id)->first();
       
          $ticket->status="success";
       $ticket->save();
       $tstatus='success';
       $data = [
           'Name'=>$request->Name,
           'LastName'=>$request->Lastname,
           'Email'=>$request->Email,
           'Phone'=>$request->Phone,
           'transfer'=>$request->transfer,
           'Price'=>$request->Price,
           'raodenoba'=>$request->raodenoba,
           'qr'=>$id,
           'status'=>$tstatus,
       ];
    $toEmail=$request->Email;
    
        Mail::send('frontend.ticket', $data, function($message) use ($toEmail) 
        {
             $message->to($toEmail, 'Black Sea Tickets')->subject ('Black Sea Tickets');                
             $message->from('info@bene-exclusive.com' , 'Bene Exclusive' );
      
     
        });
       return view('frontend.blacksea')->with('success', 'payment success'); 
  }

  public function failcallback(Request $request, $id){
 $ticket = ticket::where('given_id', $id)->first();

   $ticket->status="fail";
$ticket->save();
$tstatus='fail';
$data = [
    'Name'=>$request->Name,
    'LastName'=>$request->Lastname,
    'Email'=>$request->Email,
    'Phone'=>$request->Phone,
    'transfer'=>$request->transfer,
    'Price'=>$request->Price,
    'raodenoba'=>$request->raodenoba,
    'qr'=>$id,
    'status'=>$tstatus,
];
$toEmail=$request->Email;

    Mail::send('frontend.ticket', $data, function($message) use ($toEmail) 
    {
         $message->to($toEmail, 'Black Sea Tickets')->subject ('Black Sea Tickets');                
         $message->from('info@bene-exclusive.com' , 'Bene Exclusive' );
  
 
    });
return view('frontend.blacksea')->withErrors(['msg' => 'payment has declined']);

  }
   public function index() {
        return view('frontend.home');
    }

    public function about() {
        return view('frontend.about');
    }

    public function news() {
        return view('frontend.news');
    }

    public function fleet(){
        return view('frontend.fleet');
    }

    public function rent(){
        return view('frontend.car-rent');
    }
    
    public function academy(){
        return view('frontend.academy');
    }

    public function taxi(){
        return view('frontend.taxi');
    }

    public function partners(){
        return view('frontend.partners');
    }

    public function  motors(){
        return view('frontend.motors');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function electric(){
        return view('frontend.electric');
    }
    
    public function events(){
        return view('frontend.events');
    }

    public function article1(){
        return view('frontend.news-article1');
    }

    public function Sclass(){
        return view('frontend.S-class');
    }

    public function Sclass2019(){
        return view('frontend.S-class2019');
    }

    public function sprinter(){
        return view('frontend.sprinter');
    }

    public function camry(){
        return view('frontend.camry');
    }

    public function tesla(){
        return view('frontend.tesla');
    }

    public function tourismo(){
        return view('frontend.tourismo');
    }

    public function temsa(){
        return view('frontend.temsa');
    }

    public function eclass(){
        return view('frontend.e-class');
    }

    public function land(){
        return view('frontend.land');
    }

    public function land200(){
        return view('frontend.land200');
    }

    public function vclass(){
        return view('frontend.v-class');
    }

    public function brands(){
        return view('frontend.brands');
    }

  

    public function prado(){
        return view('frontend.prado');
    }

    public function rav4(){
        return view('frontend.rav4');
    }

    public function moiare(){
        return view('frontend.event-moiare');
    }

    public function week(){
        return view('frontend.week');
    }

    public function event(){
        return view('frontend.mercedes-event');
    }

    public function blacksea() {



        return view('frontend.blacksea');
    }

    public function distribution(){
        return view('frontend.distribution');
    }

    public function networking(){
        return view('frontend.networking');
    }

    
    
}

