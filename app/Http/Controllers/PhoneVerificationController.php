<?php

namespace App\Http\Controllers;

use App\Services\SendSmsService;
use Illuminate\Http\Request;

class PhoneVerificationController extends Controller
{
    public function create()
    {
        return view('auth.verify-otp');
    }
    public function store(Request $request)
    {
        \Log::info('OTP Verification Request:', $request->all());

        $request->validate([
            'code' => 'required|string'
        ]);

        $user = auth()->user();
        $smsService = new SendSmsService();

        try {
            $isVerified = $smsService->verifyCode(
                $user->phone,
                $user->verification_id,
                $request->code
            );

            if ($isVerified) {
                $user->update([
                    'phone_verified_at' => now(),
                    'verification_id' => null,
                    'verification_code' => null
                ]);

                return response()->json(['message' => 'Phone verified successfully']);
            }

            return response()->json([
                'message' => 'Invalid verification code'
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Verification failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
