<?php
namespace updu\Mylibraries;

class IndoDateConverter {
    
    public function convertHari($hari = 'Sun')
    {
        switch($hari){
            case 'Sun':
                $convertHari = "Minggu";
            break;
     
            case 'Mon':			
                $convertHari = "Senin";
            break;
     
            case 'Tue':
                $convertHari = "Selasa";
            break;
     
            case 'Wed':
                $convertHari = "Rabu";
            break;
     
            case 'Thu':
                $convertHari = "Kamis";
            break;
     
            case 'Fri':
                $convertHari = "Jumat";
            break;
     
            case 'Sat':
                $convertHari = "Sabtu";
            break;
            
            default:
                $convertHari = "Tidak di ketahui";		
            break;
        }
        return $convertHari;
    }

}