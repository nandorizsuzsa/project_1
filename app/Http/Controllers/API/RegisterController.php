<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
   
class RegisterController extends BaseController
{
    /**
     * Register api 
     *
     * új user felvitele - ellenőrzés nélkül, duplikác
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        try {
            $user = User::create($input);
            $success['name'] =  $user->name;
            $success['password'] = $user->password;
   
            return $this->sendResponse($success, 'User saved.');
        }
        catch ( \Exception $e){
             $success['name'] =  $request->name;
             $success['email'] =  $request->email;
             $success['password'] =  $request->password;
             return $this->sendResponse($success, 'Error');
        }
    }

    
    public function token_for_user(Request $request): JsonResponse
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['name'] =  $request->name;
            $success['email'] =  $request->email;
            $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $message = 'User is valid.';
        }
        else{
            $success ['error']= 'Error';
            $message = 'User is not valid.';
        }
        
        $success['name'] =  $request->name;
        return $this->sendResponse($success, $message);
    }
   
}
