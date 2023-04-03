<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\Colors;
use App\Models\ShapeTypes;
use App\Models\Shapes;
use App\Models\Drawings;
use App\Models\DrawingShapes;

use Illuminate\Http\JsonResponse;

   
class InsertController extends BaseController
{
    /**
     * inseet api 
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
   
    public function insert(Request $request): JsonResponse
    {  
        $response = "";
        //email-ből ki vagyok
        $user_data = User::CheckUser('email',$request->email);

        if ($user_data ){

            switch (strtoupper($request->what)){
                case "DRAW":
                    //user alakzatainak katalóguse
                    $user_shape_data = Shapes::CheckUserShapes($user_data->id);
                    
                    if (count($user_shape_data) > 0){        //van a usernek eltárolt alakzata

                        $input_parameters = json_decode($request->parameter,true);
                        
                        //ellenőrzés - minden megadott alakzat létezik a userhez kötve
                        if ($this->ValidInputShape($input_parameters , $user_shape_data )){

                            $input['user_id']       = $user_data->id;
                            $input['drawing_name'] = $request->drawing_name;
                            
                            $new_drawing = Drawings::create($input);
                            
                            foreach($input_parameters as $input_parameter){
                                $input['drawing_id']    = $new_drawing->id;
                                $input['shape_id']      = $input_parameter['shape_id'];
                                $input['x_coordinate']  = $input_parameter['x'];
                                $input['y_coordinate']  = $input_parameter['y'];
                                        
                                $new_drawing_shape = DrawingShapes::create($input);
                                
                                $message ="Insert successfully.";
                            }
                                
                        }
                        else
                        {
                            $message ="Invalid shape in parameters.";
                        }
                    }
                    else
                    {
                        $message ="User has no shape.";
                    }
                    break;

                case "SHAPE":
                    //shape_types-ből
                    //  - milyen alakzat (circle/rectangle)
                    $shape_type_data = ShapeTypes::CheckShapeTypes(strtolower($request->shape_type));

                    if ($shape_type_data){           //valid a shape_type

                        //paraméterek elleőrzése
                        if ($this->ValidInputShapeParameter(json_decode($request->parameter,true), $shape_type_data )){

                            //colors-ból color_name alapjén id->színkód
                            $color_data = Colors::CheckColor(strtolower($request->color));

                            if ($color_data){
                                try{
                                    $input['user_id']       = $user_data->id;
                                    $input['shape_type_id'] = $shape_type_data->id;
                                    $input['color_id']      = $color_data->id;
                                    $input['parameters']    = $request->parameter;
    
                                    $new_shapes = Shapes::create($input);
                                    $response = $input;
                                    $message = 'Insert successfully.';
                                }
                                catch ( \Exception $e){
                                    $message = "Insert error";
                                }

                            }
                            else{
                                $message = "Invalid color";
                            }
                        }
                        else{
                            $message = "Invalid shape parameter";
                        }
                    }    
                    else{
                        $message = "Invalid shape";
                    }
                    break;

                default:

                     $message = 'Invalid parameter.';
            }
        }
        else { 
            $message = "Invalid user";
        }
        
        return $this->sendResponse($response, $message);
        
    }

    
    function ValidInputShapeParameter($input_parameter, $shape_type_data ){    
        
        //most csak a width, heigth, radius van benne, de bővülhet további oldalméretekkel, szögekkel stb
        $non_check_field=['id', 'name', 'code_name', 'created_at', 'updated_at'];
        
        $valid_parameter = true;
 
        //minden paraméter megvan, ami 1 a shape_types-ban
        foreach($shape_type_data as $key=>$shape_parameter){
            if (! in_array($key, $non_check_field)) {       // ellenőrizni kell
                if ($shape_parameter == 1){                 // kell az alakzathoz a paraméter
                    if (! array_key_exists($key, $input_parameter)) {      //nem szerepel az input paraméterekben
                            $valid_parameter = false;
                    }
                }        
            }
        }
        
        //nincs benne plusz paraméter
        if ($valid_parameter ){
            foreach($input_parameter as $key=>$input){
                if ($shape_type_data->$key == 0) {
                    $valid_parameter = false;
                }
            }
        }
        return $valid_parameter;
    }
    
    
    function ValidInputShape($input_parameters , $user_shape_data ){

        
        foreach($input_parameters as $row){
            $valid = false;
            foreach($user_shape_data as $user_shape){
                if ($row['shape_id'] == $user_shape->id){
                    $valid = true;
                    break;
                }
            }
            if (!$valid) {
                return false;
            }
        }
        return true;
    }
}   
                        
