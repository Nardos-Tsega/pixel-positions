<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions">
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="/jobs">Jobs</a>
            <a href="/career">Careers</a>
            <a href="/companies">Companies</a>
            <a href="/salaries">Salaries</a>
        </div>
        <div>
            <a href="/login">Post job</a>
        </div>
    </nav>
    <main class="mt-10 mx-10">
        {{ $slot }}
    </main>
    </div>
</body>
</html>
