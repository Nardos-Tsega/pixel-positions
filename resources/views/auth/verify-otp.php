<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center bg-gray-100"
         x-data="{
            otp: '',
            isSubmitting: false,
            error: '',


                    const data = await response.json()

                    if (data.success) {
                        window.location.href = '{{ route('registration.complete') }}'
                    } else {
                        this.error = data.message || 'Invalid OTP'
                    }
                } catch (err) {
                    this.error = 'Failed to verify OTP'
                } finally {
                    this.isSubmitting = false
                }
            }
         }">

        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-6 text-center">Verify Your Phone</h2>

            <p class="text-gray-600 text-center mb-6">
                Enter the 6-digit code sent to {{ $phone }}
            </p>

            <form @submit.prevent="submitOTP">
                <div class="mb-6">
                    <input
                        type="text"
                        x-model="otp"
                        maxlength="6"
                        placeholder="Enter 6-digit OTP"
                        class="w-full px-4 py-2 text-center text-lg tracking-widest border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                        pattern="[0-9]{6}"
                    >
                </div>

                <template x-if="error">
                    <div class="text-red-500 text-sm mb-4 text-center" x-text="error"></div>
                </template>

                <button
                    type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 disabled:opacity-50"
                    :disabled="isSubmitting || !otp || otp.length !== 6"
                >
                    <span x-show="!isSubmitting">Verify OTP</span>
                    <span x-show="isSubmitting">Verifying...</span>
                </button>
            </form>

            <div class="mt-4 text-center">
                <a href="{{ route('resend.otp') }}"
                   class="text-blue-500 hover:underline"
                   onclick="event.preventDefault(); document.getElementById('resend-form').submit();">
                    Resend Code
                </a>
            </div>

            <form id="resend-form" action="{{ route('resend.otp') }}" method="POST" class="hidden">
                @csrf
                <input type="hidden" name="phone" value="{{ $phone }}">
            </form>
        </div>
    </div>
</body>
</html>
