<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Helpers\AppHelper;


class SoapController extends Controller
{

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
}
