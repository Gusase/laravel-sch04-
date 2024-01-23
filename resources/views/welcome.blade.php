@include('navigations.main-navigation')
<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="text-center">
            <h1
                class="text-slate-900 font-extrabold text-4xl sm:text-5xl lg:text-6xl font-mona100 tracking-tight text-center dark:text-white">
                Welcome to {{ env('APP_NAME') }}.</h1>
            <dl
                class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700 mx-auto mt-6">
                <div class="flex flex-col pb-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nama</dt>
                    <dd class="text-lg font-semibold font-mona125">Gusesa</dd>
                </div>
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Kelas</dt>
                    <dd class="text-lg font-semibold font-mona125"><span class="slashed-zero">XII</span> RPL 2</dd>
                </div>
            </dl>
            <a href="/me" class="mt-6 text-lg leading-8 text-gray-600 font-mona100 inline-block hover:underline">wanna
                se?</a>
        </div>
    </div>
</div>

{{-- <div class="m-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0 font-semibold">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div> --}}
</body>

</html>