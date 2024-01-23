@include('navigations.main-navigation')

<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="py-32 sm:py-48 lg:py-56">
        <div class="text-center">
            <h1
                class="text-slate-900 font-extrabold text-4xl sm:text-5xl font-mona100 tracking-tight text-center dark:text-white">
                Semua guru 😘</h1>

            <div class="relative overflow-x-auto mt-12">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 font-mona100">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                NIS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gender
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jurusan
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $siswa)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="w-9 px-6 py-4  text-gray-700 dark:text-gray-300 text-base">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-base">
                                {{$siswa['nis'] }}
                            </td>
                            <td class="px-6 py-4">
                                <a href=""
                                    class="hover:underline underline-offset-4 text-sky-500 dark:text-sky-400 duration-150 text-base">
                                    {{$siswa['name'] }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-base">
                                {{$siswa['gender'] }}
                            </td>
                            <td class="px-6 py-4 leading-6 font-semibold text-sky-500 dark:text-sky-400">
                                {{$siswa['jurusan']}}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


            <a href="/" class="mt-6 text-lg leading-8 text-gray-600 font-mona100 inline-block hover:underline">back</a>
        </div>
    </div>
</div>

@include('navigations.footer')