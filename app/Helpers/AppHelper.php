<?php
namespace App\Helpers;

class AppHelper
{
      public function getLocation($city)
      {

          switch($city) {
            case('Alicante'):
                return '2';
                break;
            case('Mallorca'):
                return '3';
                break;
            case('Malaga'):
                return '4';
                break;
            case('Valencia'):
                return '5';
                break;
            default:
                $msg = 'Something went wrong.';
        }
      }
      public function getDay($day)
      {
       return  date('d',strtotime($day));
      }
      public function getMounth($mounth)
      {
            return  date('m',strtotime($mounth));
      }
      public function getYear($year)
      {
             return  date('Y',strtotime($year));
      }
      public function getHour($hour)
      {
             return  date('h',strtotime($hour));
      }
      public function getMinutes($minutes)
      {
             return  date('i',strtotime($minutes));
      }

}