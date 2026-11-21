<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-[#624b63]">
                    Dashboard
                </h2>

                <p class="mt-1 text-sm text-[#a4869b]">
                    Welcome back to your pastel POS workspace.
                </p>
            </div>

            <div class="rounded-2xl bg-[#f8c8dc] px-4 py-3 text-2xl">
                🌸
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-[#fff8fb] py-10">
        <div class="mx-auto max-w-7xl space-y-8 px-6 lg:px-8">

            <div class="rounded-3xl bg-gradient-to-r from-[#f8d9e6] to-[#e3dafa] p-8 shadow-sm">
                <p class="text-sm font-semibold uppercase tracking-wider text-[#a66788]">
                    Pastel POS overview
                </p>

                <h1 class="mt-3 text-3xl font-extrabold text-[#624b63]">
                    Manage your store beautifully.
                </h1>

                <p class="mt-3 max-w-2xl text-[#806c7c]">
                    Use the dashboard to manage customers, user accounts, and
                    important store information.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">

                <div class="rounded-3xl bg-[#fff1c9] p-6 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-[#8c7557]">Customers</p>
                        <span class="text-2xl">👥</span>
                    </div>

                    <p class="mt-5 text-4xl font-extrabold text-[#765d43]">
                        128
                    </p>

                    <p class="mt-2 text-sm text-[#a48670]">
                        Registered customers
                    </p>
                </div>

                <div class="rounded-3xl bg-[#dcecf4] p-6 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-[#668194]">Orders</p>
                        <span class="text-2xl">🛒</span>
                    </div>

                    <p class="mt-5 text-4xl font-extrabold text-[#526f80]">
                        246
                    </p>

                    <p class="mt-2 text-sm text-[#7895a5]">
                        Orders this month
                    </p>
                </div>

                <div class="rounded-3xl bg-[#d9f0e4] p-6 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-[#719982]">Sales</p>
                        <span class="text-2xl">💰</span>
                    </div>

                    <p class="mt-5 text-4xl font-extrabold text-[#51765f]">
                        ₱24,580
                    </p>

                    <p class="mt-2 text-sm text-[#719982]">
                        Total sales today
                    </p>
                </div>

            </div>

            <div class="grid gap-6 md:grid-cols-2">

                <a href="{{ route('customers.index') }}"
                   class="rounded-3xl bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="flex items-center gap-4">
                        <div class="rounded-2xl bg-[#f8c8dc] p-4 text-2xl">
                            👥
                        </div>

                        <div>
                            <h3 class="text-lg font-bold text-[#624b63]">
                                Customer Accounts
                            </h3>

                            <p class="mt-1 text-sm text-[#a4869b]">
                                Manage customer records and information.
                            </p>
                        </div>
                    </div>
                </a>

                <a href="{{ route('users.index') }}"
                   class="rounded-3xl bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="flex items-center gap-4">
                        <div class="rounded-2xl bg-[#c9b8e8] p-4 text-2xl">
                            🔐
                        </div>

                        <div>
                            <h3 class="text-lg font-bold text-[#624b63]">
                                User Accounts
                            </h3>

                            <p class="mt-1 text-sm text-[#a4869b]">
                                Manage registered system users.
                            </p>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>
</x-app-layout>