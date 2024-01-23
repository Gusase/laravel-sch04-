@include('navigations.main-navigation')

<h1
    class="text-slate-900 font-extrabold text-4xl sm:text-5xl font-mona100 tracking-tight text-center dark:text-white mt-8">
    Galeri kami</h1>


<div class="grid grid-cols-2 md:grid-cols-3 gap-4 max-w-6xl mx-auto mt-12">
    <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition" src="{{ asset('img/image.jpg') }}" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition" src="{{ asset('img/image-1.jpg') }}"
            alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition" src="{{ asset('img/image-2.jpg') }}"
            alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition" src="{{ asset('img/image-3.jpg') }}"
            alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition" src="{{ asset('img/image-4.jpg') }}"
            alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition" src="{{ asset('img/image-4 (1).jpg') }}"
            alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition" src="{{ asset('img/image-5.jpg') }}"
            alt="">
    </div>
</div>

@include('navigations.footer')