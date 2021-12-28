<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Helpers\AppHelper;
// use App\Soap\Request\GetConversionAmount;
// use App\Soap\Response\GetConversionAmountResponse;

class SoapController extends Controller
{
  /**
   * @var SoapWrapper
   */
  protected $soapWrapper;

  /**
   * SoapController constructor.
   *
   * @param SoapWrapper $soapWrapper
   */
  public function __construct(SoapWrapper $soapWrapper)
  {
    $this->soapWrapper = $soapWrapper;
  }

  /**
   * Use the SoapWrapper
   */
  public function show() 
  {
    
    $soapClientVar = new \SoapClient(env('LINK_SINGLEWSDL')); 
    $Datedropoff=array('Day'=>8,'Hour'=>10,'Minutes'=>0,'Month'=>1,'Year'=>2022);
    $Datepickup=array('Day'=>5,'Hour'=>10,'Minutes'=>0,'Month'=>1,'Year'=>2022);
    $datos=[
    'In'=>array(
      'Credentials'=>array(
          'Password'=> env('PASSWORD'),
           'Username'=>env('USER_WIBER')
                          ),
       'Reservation'=>array(
                            'Datedropoff' => $Datedropoff,'Datepickup'=>$Datepickup,'Group'=>'','LocationID'=>'2'
                     )
    )
    ];
    $response = $soapClientVar->SearchCarExtendedRQ($datos);

    dd($response);

  }
   public function consult(Request $request) 
  {
     $data = $request->input();
     
     $tag = new AppHelper();
     $localidad=$tag->getLocation($data['location']);
     
     //Pickup date
     $PickupDay=$tag->getDay($data['Pickup_Dat']);
     $PickupMounth=$tag->getMounth($data['Pickup_Dat']);
     $PickupYear=$tag->getYear($data['Pickup_Dat']);
     $PickupHour=$tag->getHour($data['Pickup_Dat']);
     $PickupMinutes=$tag->getMinutes($data['Pickup_Dat']);
     //Datedropoff
     $DatedropoffDay=$tag->getDay($data['Drop_Date']);
     $DatedropoffMounth=$tag->getMounth($data['Drop_Date']);
     $DatedropoffYear=$tag->getYear($data['Drop_Date']);
     $DatedropoffHour=$tag->getHour($data['Drop_Date']);
     $DatedropoffMinutes=$tag->getMinutes($data['Drop_Date']);


    $soapClientVar = new \SoapClient(env('LINK_SINGLEWSDL'),['features' => SOAP_SINGLE_ELEMENT_ARRAYS,'exceptions'=> true]);

    $Datepickup=array('Day'=>$PickupDay,'Hour'=>$PickupHour,'Minutes'=>$PickupMinutes,'Month'=>$PickupMounth,'Year'=>$PickupYear);
    $Datedropoff=array('Day'=>$DatedropoffDay,'Hour'=>$DatedropoffHour,'Minutes'=>$DatedropoffMinutes,'Month'=>$DatedropoffMounth,'Year'=>$DatedropoffYear);   
    $datos=[
    'In'=>array(
      'Credentials'=>array(
          'Password'=> env('PASSWORD'),
           'Username'=>env('USER_WIBER')
                          ),
       'Reservation'=>array(
                            'Datedropoff' => $Datedropoff,'Datepickup'=>$Datepickup,'Group'=>'','LocationID'=>(int)$localidad
                     )
    )
    ];

$response = $soapClientVar->__soapCall("SearchCarExtendedRQ", array($datos));


    $dataFind =json_encode((array)$response);
    $yes = json_encode((array)$dataFind);
    $dataConsult = json_decode($yes);


    $dataConsul= json_decode($dataConsult[0],true);

    $dispo = $dataConsul['SearchCarExtendedRQResult']['ErrorCode'];
  
    if(isset($dispo) && $dispo > 0){
       $noDis =  $dataConsul['SearchCarExtendedRQResult']['ErrorMessage'];
       return \view('listed')->with(['noDis'=>$noDis]);
    }else{ 
       $senddataFind=$dataConsul['SearchCarExtendedRQResult']['Vehicles']['VehicleExtended']; 
       return \view('listed')->with(['sendData'=>$senddataFind]);
    }
  }
  function array_to_objecttree($array) {
  if (is_numeric(key($array))) { // Because Filters->Filter should be an array
    foreach ($array as $key => $value) {
      $array[$key] = array_to_objecttree($value);
    }
    return $array;
  }
  $Object = new \stdClass;
  foreach ($array as $key => $value) {
    if (is_array($value)) {
      $Object->$key = array_to_objecttree($value);
    }  else {
      $Object->$key = $value;
    }
  }
  return $Object;
}
}