<?php

namespace App\Http\Controllers\Auth;

use App\Profile;
use App\User;
use Symfony\Component\Process\Process;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use Illuminate\Http\Request;
//use Request;
use Auth;
use Session;
use Socialite;
use DB;
use Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $user = Auth::user();
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['first_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
            // 'is_activated' => 1,
            // 'actived_code' => 'abcdeftghik',
        ]);
//         Profile::create([
//             'users_id' => $user->id,
//             'first_name' => $data['first_name'],
//             'last_name' => $data['last_name'],
//             'address' => $data['address'],
//             'phone' => $data['phone'],
// //            'status'=>1,
//         ]);
//         return $user;

//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
    }

   public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $socicalUser = Socialite::driver('facebook')->user();
            $user = User::where('facebook_id', $socicalUser->getId())->first();
            if(!$user) {
                $user = new User();
                $user->facebook_id = $socicalUser->getId();
                $user->name = $socicalUser->getName();
                $user->email = $socicalUser->getEmail();
                $user->thumbnai = $socicalUser->getAvatar();
                $user->is_activated = 1;
                $user->save();

                $profile = new Profile();
                $profile->users_id = $user['id'];
                $profile->first_name = $socicalUser->getName();
                $profile->last_name = $socicalUser->getName();
                $profile->address = "";
                $profile->phone = 0;
                $profile->status = 1;
                $profile->save();
            }
            
            Auth::login($user);

            return redirect('/');
        } catch (Exception $e) {
            return redirect('home');
        }
    }

    public function register(Request $request){
  
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password_confirmation',
           
        ]);
        $input = $request->all();
        if ($request->hasFile('thumbnai')) {
            $file = $request->file('thumbnai');
            $name = md5($file->getClientOriginalName().date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
            $input['thumbnai'] = $name;
            $file->move( public_path('uploads/user', $name) );
        }
        $input['name'] = $request->last_name.' '.$request->first_name;
        $input['password'] = Hash::make($input['password']);
        $input['actived_code'] = str_random(30);
        $input['is_activated'] = 0;
        $user = User::create($input)->toArray();

        $profile = new Profile();
        $profile->users_id = $user['id'];
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->status = 1;
        $profile->save();
       
        Mail::send('client.emails.active',$user , function($message) use ($user){
            $message->to($user['email']);
            $message->subject('Kích hoạt tài khoản');
        });

        Session::flash('success',
                       'Bạn đã đăng ký thành công hãy kích hoạt tài khỏan từ email của bạn.');

        return redirect('log');
       
    }

    public function userActive($actived_code){

        $userActive = User::where('is_deleted', 0)->where('actived_code', $actived_code)->first();
        if(!is_null($userActive) ){
            $user= User::findOrFail( $userActive->id );
            if($user->is_activated == 1){
                Session::flash('success', 'Bạn đã kích hoạt tài khoản.');

                return redirect('log');
            }
            $user->is_activated = 1;
            $user->actived_code = null;
            $user->save();

            Session::flash('success', 'Bạn đã kích hoạt tài khoản thành công.');
            
            return redirect('log');
        }

        Session::flash('warning', 'Mã kích hoạt không tồn tại !!!.');
            
        return redirect('log');
    }





    // public function userActivation($token) {
    //     $activate = UserActivate::where('token', $token)->first();

    //     if(!is_null($activate) ){
    //         $user = User::find($activate->user_id);
    //         if($user->is_activated == 1 ){
    //             Session::flash('success', 'user are ready actived ');

    //             return redirect('login');
    //         }

    //         $user->is_activated = 1;
    //         $user->save();

    //         UserActivate::where('token', $token)->delete();
    //         Session::flash('success', 'user active successfully .');
            
    //         return redirect('login');
    //     }

    //     Session::flash('warning', 'Your token is invalid !!! .');
            
    //     return redirect('login');
    // }

    // public function register(Request $request){
    //     $input = $request->all();
    //     $validator = $this->validator($input);

    //     if( $validator->passes() ){
    //         $user = $this->create($input)->toArray();
    //         $user['link'] = str_random(30);

    //         $userActivation = new UserActivate();
    //         $userActivation->user_id = $user['id'];
    //         $userActivation->token = $user['link'];
    //         $userActivation->save();

    //         Mail::send('emails.activation', $user, function($message) use ($user){
    //             $message->to($user['email']);
    //             $message->subject('HuyenDoan - Demo activation code');
    //         });

    //         Session::flash('success', 'You have been activated ');

    //         return redirect('login');
    //     }

    //         Session::flash('errors', 'You have not  activate !!! ');            
    //         return back();

    // }

}
