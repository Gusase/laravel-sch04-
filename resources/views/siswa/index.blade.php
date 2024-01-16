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
    <div class="mx-auto max-w-3xl py-32 sm:py-48 lg:py-56">
      <div class="text-center">
        <h1
          class="text-slate-900 font-extrabold text-4xl sm:text-5xl lg:text-7xl font-mona100 tracking-tight text-center dark:text-white">
          Semua siswa👻</h1>

        <div class="grid grid-cols-4 gap-5 p-4 w-full font-mona100 mt-5">

          @foreach ($data as $siswa)
          <div
            class="max-w-sm bg-white p-8 text-sm leading-6 text-slate-700 shadow-xl dark:bg-slate-800 dark:text-slate-400 sm:text-base sm:leading-7">
            <p class="mb-px text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">{{ $siswa['class'] }}</p>
            <a href="{{ route('user',['name'=> $siswa['name']]) }}"
              class="text-gray-900 text-xl hover:underline underline-offset-4 dark:hover:text-gray-300 hover:text-gray-700 duration-150 dark:text-white">{{
              $siswa['name']
              }}</a>
            <p class="text-gray-700 dark:text-gray-300 text-base">...</p>
          </div>
          @endforeach

        </div>

        <a href="/" class="mt-6 text-lg leading-8 text-gray-600 font-mona100 inline-block hover:underline">back</a>
      </div>
    </div>
  </div>

  {{-- <div class="m-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0 font-semibold">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
  </div> --}}
</body>

</html>