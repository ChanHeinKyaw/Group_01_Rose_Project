<?php

namespace App\Dao\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Contracts\Dao\User\UserDaoInterface;

/**
 * Data accessing object for post
 */
class UserDao implements UserDaoInterface
{
  public function userList()
  {
    $userList = DB::table('users')
      ->orderBy('id', 'desc')
      ->get();
    return $userList;
  }

  public function updateUserRole($id)
  {
    $user = User::find($id);
    if ($user->type == 1) {
      $user->update([
        'type' => $user->type = 0,
      ]);
    } elseif ($user->type == 0) {
      $user->update([
        'type' => $user->type = 1,
      ]);
    }
    $user->save();

    $userList = DB::table('users')
      ->orderby('id', 'desc')
      ->get();

    return $userList;
  }


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


  public function userProfile()
  {
    $user = Auth::user();
    return $user;
  }

  public function updateUserProfile(Request $request)
  {
    $user_id = Auth::user()->id;
    $user = User::find($user_id);

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
        'type' => $user->type = 0,
        'address' => $request->address,
        'profile' => $filename,
        'password' => $request->password,
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
        'type' => $user->type = 0,
        'address' => $request->address,
        'profile' => $user->profile,
        'password' => $request->password,
        'updated_at' => now(),
      ]);
    }

    $user->save();
    return $user;
  }


  public function adminProfile()
  {
    $user = Auth::user();
    return $user;
  }

  public function updateAdminProfile(Request $request)
  {
    $user_id = Auth::user()->id;
    $user = User::find($user_id);

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
        'type' => $user->type = 1,
        'address' => $request->address,
        'profile' => $filename,
        'password' => $request->password,
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
        'type' => $user->type = 1,
        'address' => $request->address,
        'profile' => $user->profile,
        'password' => $request->password,
        'updated_at' => now(),
      ]);
    }
    $user->save();
    return $user;

  }
}
