<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-[#624b63]">
            Customer Details
        </h2>
    </x-slot>

    <div class="min-h-screen bg-[#fff8fb] py-10">
        <div class="mx-auto max-w-3xl px-6 lg:px-8">
            <div class="rounded-3xl bg-white p-8 shadow-sm">
                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#f8c8dc] text-3xl">
                        👤
                    </div>

                    <div>
                        <h1 class="text-2xl font-bold text-[#624b63]">
                            {{ $customer->name }}
                        </h1>

                        <p class="text-[#a4869b]">
                            Customer account information
                        </p>
                    </div>
                </div>

                <div class="space-y-5">
                    <div class="rounded-2xl bg-[#fff8fb] p-5">
                        <p class="text-sm text-[#a4869b]">Email</p>
                        <p class="mt-1 font-semibold text-[#624b63]">
                            {{ $customer->email }}
                        </p>
                    </div>

                    <div class="rounded-2xl bg-[#fff8fb] p-5">
                        <p class="text-sm text-[#a4869b]">Phone</p>
                        <p class="mt-1 font-semibold text-[#624b63]">
                            {{ $customer->phone ?? 'Not provided' }}
                        </p>
                    </div>

                    <div class="rounded-2xl bg-[#fff8fb] p-5">
                        <p class="text-sm text-[#a4869b]">Address</p>
                        <p class="mt-1 font-semibold text-[#624b63]">
                            {{ $customer->address ?? 'Not provided' }}
                        </p>
                    </div>
                </div>

                <div class="mt-8 flex gap-3">
                    <a
                        href="{{ route('customers.edit', $customer) }}"
                        class="rounded-full bg-[#c9b8e8] px-6 py-3 font-semibold text-white hover:bg-[#b5a0dc]"
                    >
                        Edit Customer
                    </a>

                    <a
                        href="{{ route('customers.index') }}"
                        class="rounded-full bg-[#fce3ed] px-6 py-3 font-semibold text-[#a66788] hover:bg-[#f8d5e4]"
                    >
                        Back to Customers
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>