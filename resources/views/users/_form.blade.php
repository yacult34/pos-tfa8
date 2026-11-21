<div class="space-y-5">
    <div>
        <label for="name" class="block text-sm font-semibold text-[#624b63]">
            Full Name
        </label>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', $user->name ?? '') }}"
            required
            class="mt-2 w-full rounded-2xl border-[#f3d6e2] bg-[#fffafd] focus:border-[#d989ad] focus:ring-[#f3d6e2]"
        >

        @error('name')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="block text-sm font-semibold text-[#624b63]">
            Email Address
        </label>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email', $user->email ?? '') }}"
            required
            class="mt-2 w-full rounded-2xl border-[#f3d6e2] bg-[#fffafd] focus:border-[#d989ad] focus:ring-[#f3d6e2]"
        >

        @error('email')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password" class="block text-sm font-semibold text-[#624b63]">
            Password
        </label>

        <input
            type="password"
            id="password"
            name="password"
            {{ isset($user) ? '' : 'required' }}
            class="mt-2 w-full rounded-2xl border-[#f3d6e2] bg-[#fffafd] focus:border-[#d989ad] focus:ring-[#f3d6e2]"
        >

        @if (isset($user))
            <p class="mt-1 text-xs text-[#a4869b]">
                Leave blank if you do not want to change the password.
            </p>
        @endif

        @error('password')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password_confirmation" class="block text-sm font-semibold text-[#624b63]">
            Confirm Password
        </label>

        <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            {{ isset($user) ? '' : 'required' }}
            class="mt-2 w-full rounded-2xl border-[#f3d6e2] bg-[#fffafd] focus:border-[#d989ad] focus:ring-[#f3d6e2]"
        >
    </div>
</div>