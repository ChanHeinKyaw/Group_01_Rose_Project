<?php

namespace App\Dao\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Contracts\Dao\User\UserDaoInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Data accessing object for post
 */
class UserDao implements UserDaoInterface
{
  /**
   * To show all userList data
   * 
   * @return array userList data
   */
  public function userList()
  {
    $userList = DB::table('users')
      ->orderBy('id', 'desc')
      ->get();
    return $userList;
  }

  /**
   * To update userRole
   * 
   * @return array user with updateRole
   */
  public function updateUserRole($id)
  {
    $userList = DB::table('users')
      ->orderby('id', 'desc')
      ->get();
    return $userList;
  }

  /**
   * To search by query
   * 
   * @return array serach data
   */
  public function searchUser(Request $request)
  {
    $search_text = $request->get('query');
    $userList = user::where('name', 'LIKE', '%' . $search_text . '%')
      ->orWhere('phone', 'LIKE', '%' . $search_text . '%')
      ->orWhere('email', 'LIKE', '%' . $search_text . '%')
      ->orWhere('age', 'LIKE', '%' . $search_text . '%')
      ->orWhere('gender', 'LIKE', '%' . $search_text . '%')
      ->orWhere('defender', 'LIKE', '%' . $search_text . '%')
      ->orWhere('address', 'LIKE', '%' . $search_text . '%')
      ->orWhere('type', 'LIKE', '%' . $search_text . '%')
      ->get();

    return $userList;
  }


  /**
   * To get auth userPrifile data
   * 
   * @return array userProfile data
   */
  public function userProfile()
  {
    $user = Auth::user();
    return $user;
  }

  /**
   * To update userProfile data
   * 
   * @return array update userProfile data
   */
  public function updateUserProfile(Request $request)
  {
    $user_id = Auth::user()->id;
    $user = User::find($user_id);
    
    // to delete old profile
    $imageName = $request->profile;
    if ($imageName != null) {
      if (Storage::exists('public/images/' . $user->profile)) {
        Storage::delete('public/images/' . $user->profile);
      }
    }

    // to update new profile
    if ($request->hasFile('profile')) {
      $filename = $request->profile->getClientOriginalName();
      $request->profile->storeAs('public/images', $filename);

      $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'age' => $request->age,
        'gender' => $request->gender,
        'defender' => $request->defender,
        'type' => $user->type,
        'address' => $request->address,
        'profile' => $filename,
        'updated_at' => now(),
      ]);
    } else {
      $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'age' => $request->age,
        'gender' => $request->gender,
        'defender' => $request->defender,
        'type' => $user->type,
        'address' => $request->address,
        'profile' => $user->profile,
        'updated_at' => now(),
      ]);
    }
    return $user;
  }

  /**
   * To get auth adminPrifile data
   * 
   * @return array adminProfile data
   */
  public function adminProfile()
  {
    $user = Auth::user();
    return $user;
  }

  /**
   * To update adminProfile data
   * 
   * @return array update adminProfile data
   */
  public function updateAdminProfile(Request $request)
  {
    $user_id = Auth::user()->id;
    $user = User::find($user_id);
    // to delete old profile
    $imageName = $request->profile;
    if (  $imageName != null ) {
      if (Storage::exists('public/images/' . $user->profile)) {
        Storage::delete('public/images/' . $user->profile);
      }
    }

    // to update new profile
    if ($request->hasFile('profile')) {
      $filename = $request->profile->getClientOriginalName();
      $request->profile->storeAs('public/images', $filename);

      $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'age' => $request->age,
        'gender' => $request->gender,
        'defender' => $request->defender,
        'type' => $user->type,
        'address' => $request->address,
        'profile' => $filename,
        'password' => $user->password,
        'updated_at' => now(),
      ]);
    } else {
      $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'age' => $request->age,
        'gender' => $request->gender,
        'defender' => $request->defender,
        'type' => $user->type,
        'address' => $request->address,
        'profile' => $user->profile,
        'password' => $user->password,
        'updated_at' => now(),
      ]);
    }
    return $user;
  }

  /**
   * To change  userPassowrd
   * 
   * @return object $user 
   */
  public function changeUserPassword()
  {
    $user = Auth::user();
    return $user;
  }

  /**
   * To user updateUserPassword data
   * @return Object $user update password data
  */
  public function updateUserPassword(Request $request)
  {
    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        // The passwords matches
        return redirect()->back()->with("error","လက်ရှိ စကားဝှက် မှားနေပါသည်။");
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        // Current password and new password same
        return redirect()->back()->with("error","စကားဝှက် အသစ်နှင့် အဟောင်းတူနေပါသည်။ မတူအောင်ရေးပါ။ ");
    }

    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();
   
    return  redirect()->route('logout')->with("success","စကားဝှက် အတည်ပြုခြင်း အောင်မြင်ပါသည်");
  }


  /**
   * To change  adminPassowrd
   * 
   * @return object $user 
   */
  public function changeAdminPassword()
  {
    $user = Auth::user();
    return $user;
  }


  /**
   * To update updateAdminPassword data
   * 
   * @return object $user 
   */
  public function updateAdminPassword(Request $request)
  {
    
    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
      // The passwords matches
      return redirect()->back()->with("error","လက်ရှိ စကားဝှက် မှားနေပါသည်။");
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
      // Current password and new password same
      return redirect()->back()->with("error","စကားဝှက် အသစ်နှင့် အဟောင်းတူနေပါသည်။ မတူအောင်ရေးပါ။ ");
    }

    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();
    
    return  redirect()->back()->with("success","Password successfully changed!");
  } 
}
