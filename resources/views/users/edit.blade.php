<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-[#624b63]">
            Edit User Account
        </h2>
    </x-slot>

    <div class="min-h-screen bg-[#fff8fb] py-10">
        <div class="mx-auto max-w-3xl px-6 lg:px-8">
            <div class="rounded-3xl bg-white p-8 shadow-sm">
                <p class="mb-6 text-sm text-[#a4869b]">
                    Update this user's account information.
                </p>

                <form method="POST" action="{{ route('users.update', $user) }}">
                    @csrf
                    @method('PUT')

                    @include('users._form')

                    <div class="mt-8 flex gap-3">
                        <button
                            type="submit"
                            class="rounded-full bg-[#c9b8e8] px-6 py-3 font-semibold text-white hover:bg-[#b5a0dc]"
                        >
                            Update User
                        </button>

                        <a
                            href="{{ route('users.index') }}"
                            class="rounded-full bg-[#fce3ed] px-6 py-3 font-semibold text-[#a66788]"
                        >
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>