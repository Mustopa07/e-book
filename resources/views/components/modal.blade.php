
<dialog id="mymodaltop" class="bg-transparent z-0 relative w-screen h-screen">
    <div class="p-7 flex justify-center items-start overflow-x-hidden overflow-y-auto fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-lg w-1/2 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-center justify-between w-full">
                    <div class="text-gray-900 font-bold text-2xl">judul Buku</div>
                    <div class="close-btn cursor-pointer text-2xl bg-gray-200 px-3 pb-2 rounded-full" onclick="modalClose('mymodaltop')">
                        x
                    </div>
                </div>

                <div class="px-7">
                    <div class="sinopsis">
                        <span class="text-lg font-bold">Sinopsis</span>
                        <p class="text-justify">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error corrupti soluta ducimus rerum quos quasi a modi laborum possimus voluptatem, quia ea voluptatibus maiores suscipit architecto qui vero similique aliquam repellat voluptate. Amet praesentium, repellendus ea inventore quaerat laborum accusamus quos velit vel dolorem soluta commodi veritatis facilis libero ut possimus consequuntur officiis porro quam aut explicabo omnis. Quidem fuga molestiae obcaecati voluptates quas. Harum illum, totam minus asperiores ducimus laboriosam velit, ea nostrum fuga quos iste unde eligendi molestiae aliquid illo? Odit ea nihil ullam, quis, ratione dolor modi voluptatem quia maiores animi dolores vitae tenetur accusantium nobis eveniet sunt architecto. Quibusdam asperiores nobis, cumque earum est deleniti magnam mollitia laudantium ullam. Aperiam dolor itaque, quisquam ut necessitatibus at architecto eaque obcaecati ipsa vero expedita! Aliquid temporibus adipisci libero, sunt architecto, cum excepturi quam laudantium eligendi tempora illum minima praesentium consequuntur vitae, quod est deleniti culpa quisquam cupiditate sapiente?
                        </p>
                    </div>
                </div>

                <div class="p-7 flex justify-end w-full">
                    <span class="text-xl font-bold py-2">Rp.20.000</span>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-10 rounded ml-3">
                        Buy
                    </button>
                </div>
            </div>
        </div>
    </div>
</dialog>
