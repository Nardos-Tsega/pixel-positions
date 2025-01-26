<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use App\Models\Student;
use App\Models\User;
use App\Services\SendSmsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = Client::create([
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type,
            ]);

            if ($request->user_type === 'student') {
                Student::create([
                    'client_id' => $user->id,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'institution' => $request->institution,
                    'field_of_study' => $request->field_of_study,
                    'education_level' => $request->education_level,
                    'phone' => $request->phone,
                    'bio' => $request->bio,
                    'location' => $request->location,
                    'skills' => $request->skills,
                ]);
            }

            $smsService = new SendSmsService();
            $verificationData = $smsService->sendVerificationCode($request->phone);

            $user->update([
                'verification_id' => $verificationData['verificationId'],
                'verification_code' => $verificationData['code'] // Store temporarily for testing
            ]);


            DB::commit();


            return response()->json([
                'message' => 'Registration successful. Please verify your phone number.',
                'verification_sent' => true
            ], 201);

        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Registration failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }


}
