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
          Nilai {{ $name }} 🐋</h1>

        <div class="divide-y divide-gray-300/50 space-y-3 mt-8">

          <div class="grid grid-cols-4 gap-5 p-4 w-full font-mona100">
            <div
              class="max-w-sm bg-white p-8 text-sm leading-6 text-slate-700 shadow-xl dark:bg-slate-800 dark:text-slate-400 sm:text-base sm:leading-7 space-y-2">
              <p class="mb-px text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Bahasa Inggris</p>
              <p class="text-gray-900 text-xl dark:text-white">90</p>
              <p class="text-gray-700 dark:text-gray-300 text-base">{{ ($nilai >= 80) ? 'Lulus' : 'Gagal' }}</p>
            </div>
          </div>

          <div class="grid grid-cols-4 gap-5 p-4 w-full font-mona100">
            @for ($i = 0; $i < 8; $i++) <div
              class="max-w-sm bg-white p-8 text-sm leading-6 text-slate-700 shadow-xl dark:bg-slate-800 dark:text-slate-400 sm:text-base sm:leading-7 space-y-2">
              <p class="mb-px text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Hobi</p>
              <p class="text-gray-900 text-xl dark:text-white">#{{ $i + 1 }}</p>
          </div>
          @endfor
        </div>

        <div class="grid grid-cols-4 gap-5 p-4 w-full font-mona100">
          @foreach ($data as $nilai => $huruf)
          {{-- @if ($nilai == 90)
          @break
          @endif

          @if ($nilai == 40)
          @continue
          @endif --}}

          <div
            class="max-w-sm bg-white p-8 text-sm leading-6 text-slate-700 shadow-xl dark:bg-slate-800 dark:text-slate-400 sm:text-base sm:leading-7 space-y-2">
            <p class="mb-px text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Nilai {{ $nilai }}</p>
            <p class="text-gray-900 text-xl dark:text-white">{{ $huruf }}</p>
            <p class="text-gray-700 dark:text-gray-300 text-base">Remaining: {{ $loop->remaining }}</p>
          </div>
          @endforeach
        </div>

      </div>

    </div>


    <a href="/" class="mt-6 text-lg leading-8 text-gray-600 font-mona100 inline-block hover:underline">back</a>
  </div>
  </div>
  </div>
</body>

</html>