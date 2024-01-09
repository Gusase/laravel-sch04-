<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ '/' . request()->path() . ' - ' . env('APP_NAME') }}</title>

  <!-- Fonts -->
  <link rel="preload" href="{{ asset('Mona-Sans.woff2') }}" as="font" type="font/woff2" crossorigin>

  <!-- Styles -->
  @vite('resources/css/app.css')
</head>

<body
  class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900 selection:bg-red-500 selection:text-white font-mona75">
  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="text-center">
        <h1
          class="text-slate-900 font-extrabold text-4xl sm:text-5xl lg:text-7xl font-mona100 tracking-tight text-center dark:text-white">
          Alo {{ $user_name }}</h1>
        <a href="/" class="mt-6 text-lg leading-8 text-gray-600 font-mona100 inline-block hover:underline">back</a>
      </div>
    </div>
  </div>

  {{-- <div class="m-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0 font-semibold">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
  </div> --}}
</body>

</html>