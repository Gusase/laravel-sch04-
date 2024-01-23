<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800 font-mona100">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a href="#"
                class="hover:underline">{{ env('APP_NAME') }}</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Dashboard</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Data Siswa</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Data Guru</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>


{{-- <div class="m-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0 font-semibold">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div> --}}
</body>

</html>
