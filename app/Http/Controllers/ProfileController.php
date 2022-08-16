<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProfileRequest;
use App\Models\Profile;
use App\Models\User;
use App\Models\UserManag;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $users = User:: all();
        $profiles = Profile:: all();
        return view("profile", [
            "profile" => $profiles,
            "users" => $users
        ]);
    }
    public function add(Request $request, Profile $profile)
    {   $users = User:: all();
        $profile = Profile::all();
        return view('pages.user.index',[
            'profiles' => $profile,
            "users" =>$users,
           
        ]);
    }


    public function store(AddProfileRequest $request)
    {
        if($request->validated())
        {
            $args = $request->only([
                "user_id",
                'user_name',
                "password",
                "email_address",
                "user_address",
                "contact_no",
                
            ]);
            $profile = new Profile($args);
            if($profile->save())
            {
                $file = $request->file('file_upload');

                $file = $file->storeAs('public/profiles', 'profile_upload_'.$profile->id.'.'.$file->extension());

                $pathArray = explode('/',$file);

                $filePath = 'storage/'.$pathArray[1].'/'.$pathArray[2];

                $profile->file_upload = $filePath;

                if($profile->save())
                {
                    return redirect()->route('dashboard',$args['user_id'])->with('success','Profile stored successfully');
                }
            }
        }

        return redirect()->route('dashboard',$args['user_id'])->with('failed','Something went wrong!');
    }

  
    public function update (Request $request,Profile $profile)
    {      
        if($request ->validated()){
            $args = $request -> only([
                'file_upload',
                'user_name',
                "user_id",
                "password",
                "email_address",
                "user_address",
                "contact_no"
            ]);

        if ($profile ->update($args)) {
            return redirect()->route("dashboard", $profile->id) -> with("success", "Profile updated");
            }
        }
            else {
                return redirect()-> route("dashboard", $profile->id)->with("failed", "Oops, we have an error!"); 
        }
   
    }

    public function downloadProfileFile(Request $request)
    {
        $filepath = $request->get('filepath');

        return response()->download($filepath);
    }
}

