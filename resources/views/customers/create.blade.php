<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-[#624b63]">
            Add Customer
        </h2>
    </x-slot>

    <div class="min-h-screen bg-[#fff8fb] py-10">
        <div class="mx-auto max-w-3xl px-6 lg:px-8">
            <div class="rounded-3xl bg-white p-8 shadow-sm">
                <p class="mb-6 text-sm text-[#a4869b]">
                    Add a new customer to your POS records.
                </p>

                <form method="POST" action="{{ route('customers.store') }}">
                    @csrf

                    @include('customers._form')

                    <div class="mt-8 flex gap-3">
                        <button
                            type="submit"
                            class="rounded-full bg-[#c9b8e8] px-6 py-3 font-semibold text-white hover:bg-[#b5a0dc]"
                        >
                            Save Customer
                        </button>

                        <a
                            href="{{ route('customers.index') }}"
                            class="rounded-full bg-[#fce3ed] px-6 py-3 font-semibold text-[#a66788] hover:bg-[#f8d5e4]"
                        >
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>