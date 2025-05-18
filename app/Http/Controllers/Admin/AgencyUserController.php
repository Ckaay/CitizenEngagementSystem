<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgencyUserController extends Controller
{
    public function index()
    {
        $agencyUsers = User::where('role', 'AgencyUser')->get();
        return view('admin.agency_users.index', compact('agencyUsers'));
    }

    public function create()
    {
        return view('admin.agency_users.create');
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'AgencyUser',  // <-- Add this line here
    ]);

    return redirect()->route('admin.agency-users.index')->with('success', 'Agency user created.');
}



    public function edit(User $agencyUser)
    {
        return view('admin.agency_users.edit', compact('agencyUser'));
    }

   public function update(Request $request, User $agencyUser)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $agencyUser->id,
    ]);

    $agencyUser->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return redirect()->route('admin.agency-users.index')->with('success', 'Agency user updated.');
}


    public function destroy(User $agencyUser)
    {
        $agencyUser->delete();
        return redirect()->route('admin.agency-users.index')->with('success', 'Agency user deleted.');
    }
}
