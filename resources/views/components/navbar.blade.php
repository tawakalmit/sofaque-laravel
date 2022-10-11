<nav class="fixed top-5 z-50 w-full h-16">

    <div class="w-10/12 h-16 mx-auto flex items-center justify-between">
        <p class="text-2xl text-white">Sofaque</p>
        <div class="w-10/12 md:w-[20rem] flex justify-end md:justify-between">
            <div class="w-[16rem] items-center justify-between hidden md:flex">
                <div class="border-b-[1px]">
                    <input id="search" name="search" type="text" class="focus:border-0 bg-[rgba(20,20,20,0)] border-0 rounded-xl">
                </div>
                <label for="search" class="cursor-pointer"><x-fas-search class="w-7 text-white" /></label>
            </div>
            <div>
                <x-ri-menu-line id="menu" class="w-10 text-white cursor-pointer" />
            </div>
        </div>
    </div>

    <div class="sidebar w-full fixed md:w-4/12 h-screen bg-[#2c3e50] z-20" id="sidebar">
            <div class="w-10/12 mx-auto flex justify-end mt-10">
                <x-zondicon-close class="w-6 text-white" id="close" />
            </div>
    </div>

</nav>