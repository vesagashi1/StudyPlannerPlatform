<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AI Study Planner</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white min-h-screen">
<!-- Navbar -->
<header class="flex justify-between items-center p-6 max-w-7xl mx-auto">
    <div class="text-2xl font-bold text-blue-600">AI Study Planner</div>
    <nav class="space-x-4">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="hover:text-blue-600 font-medium">Dashboard</a>
{{--            @else--}}
{{--                <a href="{{ route('login') }}" class="hover:text-blue-600 font-medium">Login</a>--}}
{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition font-medium">--}}
{{--                        Register--}}
{{--                    </a>--}}
{{--                @endif--}}
            @endauth
        @endif
    </nav>
</header>

<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <div>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
            Plan Smart. <br><span class="text-blue-600">Study Better.</span>
        </h1>
        <p class="text-lg mb-6">Stay on top of your courses with AI-driven reminders, personalized schedules, and progress insights.</p>
        <div class="space-x-4">
            <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition font-medium">Get Started</a>
            <a href="{{ route('login') }}" class="px-6 py-3 border border-blue-600 text-blue-600 rounded hover:bg-blue-100 transition font-medium">Log In</a>
        </div>
    </div>
    <div class="flex justify-center">
        <img src="https://undraw.co/api/illustrations/studying?style=flat" alt="Study Illustration" class="w-full max-w-md">
    </div>
</section>

<!-- Features -->
<section class="bg-gray-100 dark:bg-gray-800 py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12">🎓 What You'll Get</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-left">
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                <img src="https://undraw.co/api/illustrations/schedule?style=flat" class="h-40 mx-auto mb-4" alt="Scheduling">
                <h3 class="text-xl font-semibold mb-2">🗓️ Smart Scheduling</h3>
                <p>We optimize your time based on deadlines, habits, and focus cycles.</p>
            </div>
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                <img src="https://undraw.co/api/illustrations/progress?style=flat" class="h-40 mx-auto mb-4" alt="Progress">
                <h3 class="text-xl font-semibold mb-2">📊 Progress Tracker</h3>
                <p>Visual dashboards to help you stay on track with subjects and tasks.</p>
            </div>
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                <img src="https://undraw.co/api/illustrations/reminder?style=flat" class="h-40 mx-auto mb-4" alt="Reminder">
                <h3 class="text-xl font-semibold mb-2">🔔 AI Reminders</h3>
                <p>Never forget a quiz or assignment with smart notifications built-in.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="mt-12 text-center text-sm text-gray-500 dark:text-gray-400 py-8">
    Made with 💙 for students | &copy; {{ date('Y') }} AI Study Planner
</footer>
</body>
</html>
