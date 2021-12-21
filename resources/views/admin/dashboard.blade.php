<x-admin-layout>
    <x-slot name="title">
        Admin | Dashboard
    </x-slot>


    <div class="container">
        <h1 class="text-3xl font-bold tracking-wider text-center my-auto pt-20">Hai Admin, Bagaimana Harimu?</h1>
        <div class="button-answer flex justify-center space-x-5 pt-10">
            <button class="px-10 py-2 bg-gray-800 text-gray-200 font-semibold tracking-wide rounded-xl" onclick="return confirm('Wahh, Kamu Perlu Istirahat sekarang!!!')">Kurang</button>
            <button class="px-10 py-2 bg-gray-800 text-gray-200 font-semibold tracking-wide rounded-xl" onclick="return alert('Okayy, Semoga Besok Akan Menjadi Hari Yang Baik')">Biasa Aja</button>
            <button class="px-10 py-2 bg-gray-800 text-gray-200 font-semibold tracking-wide rounded-xl" onclick="return alert('Baguss, Terus Pertahankan Mood Mu!!!')">Baik</button>
            <button class="px-10 py-2 bg-gray-800 text-gray-200 font-semibold tracking-wide rounded-xl" onclick="return alert('Heii, Tidak Ada Yang Sempurna Di Dunia Ini Kecuali Allah SWT!!!')">Sempurna</button>
        </div>
    </div>


</x-admin-layout>
