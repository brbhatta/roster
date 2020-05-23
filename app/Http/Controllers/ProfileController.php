<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController
{

    const PROFILE_IMAGE_WIDTH = 180;
    const PROFILE_IMAGE_HEIGHT = 180;

    public function getGeneralInfo(Guard $guard)
    {
        return view('profile.profile', ['user' => $guard->user()]);
    }

    public function postGeneralInfo(Request $request, Guard $guard)
    {
        $user = $guard->user();
        $user->fill($request->only(['bio', 'gender', 'dob']));

        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(self::PROFILE_IMAGE_WIDTH, self::PROFILE_IMAGE_HEIGHT, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->stream();
            Storage::disk('local')->put('public/profile-images/'. $fileName, $img, 'public');
            $user->image = url(Storage::disk('local')->url('public/profile-images/' . $fileName));
        }

        $user->save();




    }
}
