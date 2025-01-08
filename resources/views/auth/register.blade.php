<form action="{{ route('register') }}" method="POST">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div>
        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
        @error('birth_date')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
        @error('phone_number')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="address">Address:</label>
        <textarea id="address" name="address">{{ old('address') }}</textarea>
        @error('address')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio">{{ old('bio') }}</textarea>
        @error('bio')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Register</button>
</form>
