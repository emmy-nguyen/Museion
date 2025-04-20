<footer class="bg-black w-full text-brand-light mt-8 flex flex-col justify-center items-center">
    
    <!-- newsletter -->
    <!-- <div class="flex flex-col justify-center items-center w-full py-12 px-4 bg-blue-200 h-[400px]">
        <p class="text-4xl font-semibold mb-4">Newsletter</p>
        <p class="text-xl font-primary mb-8 text-center max-w-2xl">Receive e-mail updates on our exhibitons, events, and more</p>
        <form class="flex items-center bg-[#111] rounded-full overflow-hidden mx-auto mb-4 max-w-2xl border-1 border-brand-light/30">
            <input type="email" class="flex-1 px-6 py-3 bg-transparent placeholder-muted focus:outline-none focus:border-brand-primary w-2xl" placeholder="Enter your email">
            <button type="submit" class="bg-[#111] px-6 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-10" fill="none" stroke="currentColor" viewBox="0 0 44 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M40 12H3m37 0l-4 4m4-4l-4-4"/>
                </svg>
            </button>
        </form>
    </div> -->

    <div class="w-full max-w-7xl text-[#f7f6ec]">
        <div class="w-full grid md:grid-cols-2 grid-cols-1 gap-5 px-8 items-center">
            <div class="w-full flex justify-start">
                <div class="w-[300px]">
                    <img src="/images/museion-logo-M-removebg.png" alt="museion-logo" class="w-full"/>
                </div>
            </div>
            <div class="w-full">
                <div class="grid grid-cols-2 gap-8 w-full text-[#f7f6ec]">
                    <div class="w-full flex flex-col space-y-3 items-end">
                        <p class="text-xl text-brand-light font-semibold">Links</p>
                        <a href="{{ route('home') }}" class="uppercase text-secondary font-semibold cursor-pointer hover:text-[#c9a050]">Home</a>
                        <a href="{{ route('artworks') }}" class="uppercase text-secondary font-semibold cursor-pointer hover:text-[#c9a050]">Collections</a>
                        <a href="#" class="uppercase text-secondary font-semibold">Artists</a>
                    </div>
                    <div class="w-full flex flex-col space-y-3 items-end">
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