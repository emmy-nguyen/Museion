<footer class="bg-black w-full text-brand-light mt-8 flex flex-col justify-center items-center">
    <div class="w-full max-w-7xl text-[#f7f6ec]">
        <div class="w-full grid md:grid-cols-2 grid-cols-1 gap-5 px-8 items-center">
            <div class="w-full flex md:justify-start justify-center items-center">
                <div class="w-[300px]">
                    <img src="/images/museion-logo-M-removebg.png" alt="museion-logo" class="w-full"/>
                </div>
            </div>
            <div class="w-full">
                <div class="grid grid-cols-2 gap-8 w-full text-[#f7f6ec]">
                    <div class="w-full flex flex-col space-y-3 md:items-end items-center">
                        <p class="text-xl text-brand-light font-semibold">Links</p>
                        <a href="{{ route('home') }}" class="uppercase text-secondary font-semibold cursor-pointer hover:text-[#c9a050]">Home</a>
                        <a href="{{ route('artworks') }}" class="uppercase text-secondary font-semibold cursor-pointer hover:text-[#c9a050]">Collections</a>
                        <a href="#" class="uppercase text-secondary font-semibold">Artists</a>
                    </div>
                    <div class="w-full flex flex-col space-y-3 md:items-end items-center">
                        <p class="text-xl text-brand-light font-semibold">Social</p>
                        <a href="#" class="uppercase text-secondary font-semibold">X</a>
                        <a href="#" class="uppercase text-secondary font-semibold">Instagram</a>
                        <a href="#" class="uppercase text-secondary font-semibold">Facebook</a>
                    </div>
                </div>
            </div>  
        </div>
        <div class="border-t border-brand-light/30 flex justify-end mt-4 md:mt-0 mx-8">
            <p class=" text-brand-light text-sm uppercase py-4">&copy; 2025 Museion. All rights reserved.</p>
        </div>
    </div>

</footer>