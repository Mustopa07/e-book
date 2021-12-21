
<dialog id="mymodaltop" class="bg-transparent z-0 relative w-screen h-screen">
    <div class="p-7 flex justify-center items-start overflow-x-hidden overflow-y-auto fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-lg w-1/2 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-center justify-between w-full">
                    <div class="text-gray-900 font-bold text-2xl">Add New {{ $title }}</div>
                    <div class="close-btn cursor-pointer text-2xl bg-gray-200 px-3 pb-2 rounded-full" onclick="modalClose('mymodaltop')">
                        x
                    </div>
                </div>

                <div class="form px-7 pb-5 pt-3 w-full">
                    {{ $slot }}
                </div>


            </div>
        </div>
    </div>
</dialog>
