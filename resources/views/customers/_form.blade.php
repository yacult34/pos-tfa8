<div class="space-y-5">
    <div>
        <label for="name" class="block text-sm font-semibold text-[#624b63]">
            Full Name
        </label>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', $customer->name ?? '') }}"
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
            value="{{ old('email', $customer->email ?? '') }}"
            required
            class="mt-2 w-full rounded-2xl border-[#f3d6e2] bg-[#fffafd] focus:border-[#d989ad] focus:ring-[#f3d6e2]"
        >

        @error('email')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="phone" class="block text-sm font-semibold text-[#624b63]">
            Phone Number
        </label>

        <input
            type="text"
            id="phone"
            name="phone"
            value="{{ old('phone', $customer->phone ?? '') }}"
            class="mt-2 w-full rounded-2xl border-[#f3d6e2] bg-[#fffafd] focus:border-[#d989ad] focus:ring-[#f3d6e2]"
        >

        @error('phone')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="address" class="block text-sm font-semibold text-[#624b63]">
            Address
        </label>

        <textarea
            id="address"
            name="address"
            rows="4"
            class="mt-2 w-full rounded-2xl border-[#f3d6e2] bg-[#fffafd] focus:border-[#d989ad] focus:ring-[#f3d6e2]"
        >{{ old('address', $customer->address ?? '') }}</textarea>

        @error('address')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
</div>