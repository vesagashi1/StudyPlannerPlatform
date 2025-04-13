<x-guest-layout>
    <div class="relative flex items-center justify-center bg-gradient-to-br from-[#1b1f30] via-[#212437] to-[#2a2e45] px-4 overflow-hidden">

        <!-- Ambient glow blob -->
        <div class="absolute w-96 h-96 bg-indigo-600 opacity-20 blur-3xl rounded-full top-[-5rem] right-[-5rem] animate-pulse"></div>

        <div class="w-full max-w-md text-gray-200 rounded-2xl shadow-2xl p-8 z-10">
            <h2 class="text-3xl font-extrabold text-indigo-400 text-center mb-2">
                Create Your Account ✨
            </h2>
            <p class="text-center text-gray-400 mb-6">
                Join the AI-powered study revolution
            </p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm mb-1">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                           class="w-full px-4 py-2 rounded-lg bg-[#353a55] text-white border border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm mb-1">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-4 py-2 rounded-lg bg-[#353a55] text-white border border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm mb-1">Password</label>
                    <input id="password" type="password" name="password" required
                           class="w-full px-4 py-2 rounded-lg bg-[#353a55] text-white border border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm mb-1">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                           class="w-full px-4 py-2 rounded-lg bg-[#353a55] text-white border border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                </div>

                <!-- Submit -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-300 hover:underline">
                        Already registered?
                    </a>
                    <button type="submit"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white px-5 py-2 rounded-lg font-semibold transition">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
