<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;

class CustomUserController extends Controller
{
    //
    public function create()
    {
        return view('custom_user');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        // Get the uploaded image
        $image = $request->file('image');

        // Save the image to the file system
        $imagePath = $image->store('uploads');

        // Create the user record
        $user = new CustomUser();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->image_path = $imagePath;
        $user->save();

        // Return the success message
        return response()->json([
            'success' => true,
            'message' => 'User created successfully.'
        ]);
    }
}
