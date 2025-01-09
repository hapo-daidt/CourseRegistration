<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Import header -->
    @include('includes.header')

    <form class="register-form" action="{{ route('register') }}" method="POST">
        @csrf

        <h2 class="register-title">Sign up to HapoLearn</h2>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
            <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
            <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            @error('password_confirmation')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required>
            @error('birth_date')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required placeholder="Enter your phone number">
            @error('phone_number')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" required placeholder="Enter your address">{{ old('address') }}</textarea>
            @error('address')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" placeholder="Tell us about yourself">{{ old('bio') }}</textarea>
            @error('bio')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button class="register-button" type="submit">Sign up</button>
    </form>

    @include('includes.footer')
</body>

</html>