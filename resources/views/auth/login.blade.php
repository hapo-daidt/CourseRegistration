<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/register</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Import header -->
    @include('includes.header')
    <div class="login-container">
        <!-- Login Form Wrapper -->
        <div class="login-form">
            <div class="login-title">Sign in to HapoLearn</div>
            @if (session('error'))
            <div class="text-red-500 mb-4 bg-red-100 p-3 rounded-lg text-center">
                {{ session('error') }}
            </div>
            @endif
            <!-- Login Form -->
            <form method="POST" action="{{ route('auth.login') }}">
                @csrf
                <!-- Các trường nhập thông tin, ví dụ như email và password -->
                <div class="">
                    <div class="primary-text">
                        <label for="email">Username</label>
                        <input type="text" name="email" id="email" class="primary-input" placeholder="Enter your Username">
                    </div>

                    <div class="primary-text">
                        <label for="Password">Password</label>
                        <input type="text" name="password" id="Password" class="primary-input" placeholder="Enter your Password">
                    </div>
                </div>

                <div class="button-link-container">
                    <x-primary-button type="submit">
                        Sign in
                    </x-primary-button>

                    <div class="mt-2 text-center">
                        <a href="" class="link">Forgot password</a>
                    </div>
                </div>


            </form>

            <div class="divider">
                <span>Sign in with</span>
            </div>

            <div class="google-signin-button">
                <div class="Google">
                    <img src="{{ asset('images/Google.svg') }}" alt="Google">
                </div>
                <span class="text" style="margin-left: 10px;">Google</span>
            </div>

            <!-- Or New to HapoLearn -->
            <div class="divider">
                <span>or New to HapoLearn</span>
            </div>

            <a href="/register" class="signup-button">
                <span class="text">Create a new account</span>
            </a>

        </div>
    </div>

    @include('includes.footer')
</body>

</html>

<!-- resources/views/auth/login.blade.php -->