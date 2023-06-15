<div class="bg-blue-500">
    <div class="flex justify-between items-center px-6 p-4 container mx-auto text-white">
        <div class="text-lg font-bold px-6">HireNet</div>
        <input type="checkbox" name="peer-hamburger" id="hamburger" class="peer hidden">
        <label for="hamburger" class="peer-checked:hamburger block relative cursor-pointer border-2 border-white lg:hidden peer-checked:border-2 peer-checked:border-white p-3 rounded-md transition-all">
            <div class="m-auto w-6 h-1 rounded bg-white transition-all duration-300"></div>
            <div class="m-auto w-6 h-1 rounded bg-white mt-1 transition-all duration-300"></div>
            <div class="m-auto w-6 h-1 rounded bg-white mt-1 transition-all duration-300"></div>
        </label>
        <div class="-translate-y-full peer-checked:translate-y-0 lg:translate-y-0 inset-0 fixed lg:static pt-20 lg:pt-0 bg-white lg:bg-transparent -z-10 lg:z-10 lg:h-auto lg:w-auto transition-all duration-300 ease-in-out">
            <div class="bg-white shadow-md lg:bg-transparent lg:shadow-none py-10 lg:py-0 flex flex-col lg:items-center lg:flex-row px-6 space-y-4 lg:space-y-0 lg:space-x-12">
                <a href="{{ URL::to('/') }}">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
                <a href="#">Jobs</a>
                @guest
                    <x-button-link class="bg-green-300 hover:bg-green-500 px-4 py-2" href="{{ URL::to('choose') }}">Get Started</x-button-link>
                @endguest
                @auth
                    <a href="{{ URL::to('resume') }}">Resume</a>
                @endauth
            </div>
        </div>
    </div>
</div>
