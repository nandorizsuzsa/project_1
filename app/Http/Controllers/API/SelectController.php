<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
   
class SelectController extends BaseController
{
    /**
     * select api 
     *
     * drawings - rajzok
     * shapes - alakzatok lekérdezése
     * 
     * parameters
     * - what (DRAW/SHAPE)
     * - parameter (ALL/sorszám)
     * - email
     * 
     * @return \Illuminate\Http\Response
     */
   
    public function select(Request $request): JsonResponse
    {  

        $message = 'Select successfully.';
        switch (strtoupper($request->what)){
            case "DRAW":
                $response = DB::select('call proc_draw (?, ?)', array( $request->email, $request->parameter ));
                break;
            
            case "SHAPE":
                $response = DB::select('call proc_shapes (?, ?)', array( $request->email, $request->parameter ));
                break;
            
            default:
                $response="";
                 $message = 'Select error/invalid parameter.';
        }
           
        return $this->sendResponse(json_encode($response), $message);
        
    }
}