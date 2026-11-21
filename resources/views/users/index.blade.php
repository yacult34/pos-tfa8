<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-[#624b63]">
                User Accounts
            </h2>

            <a
                href="{{ route('users.create') }}"
                class="rounded-full bg-[#c9b8e8] px-5 py-3 text-sm font-semibold text-white hover:bg-[#b5a0dc]"
            >
                + Add User
            </a>
        </div>
    </x-slot>

    <div class="min-h-screen bg-[#fff8fb] py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 rounded-2xl bg-[#d9f0e4] px-5 py-4 text-[#51765f]">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-6 rounded-2xl bg-[#f8d9e6] px-5 py-4 text-[#a66788]">
                    {{ session('error') }}
                </div>
            @endif

            <div class="overflow-hidden rounded-3xl bg-white shadow-sm">
                <div class="border-b border-[#f8e4ec] px-6 py-5">
                    <p class="text-sm text-[#a4869b]">
                        Manage registered POS system users.
                    </p>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-[#fff1f6] text-sm text-[#8d667d]">
                            <tr>
                                <th class="px-6 py-4">Name</th>
                                <th class="px-6 py-4">Email</th>
                                <th class="px-6 py-4">Created</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-[#f8e4ec]">
                            @forelse ($users as $user)
                                <tr class="hover:bg-[#fffafd]">
                                    <td class="px-6 py-4 font-semibold text-[#624b63]">
                                        {{ $user->name }}
                                    </td>

                                    <td class="px-6 py-4 text-[#806c7c]">
                                        {{ $user->email }}
                                    </td>

                                    <td class="px-6 py-4 text-[#806c7c]">
                                        {{ $user->created_at->format('M d, Y') }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="flex justify-end gap-2">
                                            <a
                                                href="{{ route('users.show', $user) }}"
                                                class="rounded-full bg-[#dcecf4] px-4 py-2 text-sm font-semibold text-[#668194]"
                                            >
                                                View
                                            </a>

                                            <a
                                                href="{{ route('users.edit', $user) }}"
                                                class="rounded-full bg-[#fff1c9] px-4 py-2 text-sm font-semibold text-[#866b54]"
                                            >
                                                Edit
                                            </a>

                                            <form
                                                method="POST"
                                                action="{{ route('users.destroy', $user) }}"
                                                onsubmit="return confirm('Delete this user account?')"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="rounded-full bg-[#f8d9e6] px-4 py-2 text-sm font-semibold text-[#a66788]"
                                                >
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-12 text-center text-[#a4869b]">
                                        No user accounts found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>