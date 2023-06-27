<x-layouts>
    @include('Layouts.seeker')
    <div class="justify-center items-center flex flex-col h-screen space-y-9">
        @if ($jobs->count() > 0)
            {{-- <div class="w-full flex justify-center py-12" id="button">
                <button
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm"
                    onclick="modalHandler(true)">Open Modal</button>
            </div> --}}
            <main class="flex h-screen w-full items-center justify-center lg:space-x-4">
                @foreach ($jobs as $item)
                    <!--👇 Copy code below 👇-->
                    <div>
                        <div
                            class="group bg-gray-900 p-4 transition-all duration-300 hover:rotate-1 lg:p-8 rounded-xl max-w-sm max-h-lg">
                            <div class="mb-3 text-right">
                                <button
                                    class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-6 w-6">
                                        <path
                                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                                    class="aspect-[2/2] w-16 fill-white">
                                    <path
                                        d="M8 2L8 6L4 6L4 48L15 48L15 39L19 39L19 48L30 48L30 6L26 6L26 2 Z M 10 10L12 10L12 12L10 12 Z M 14 10L16 10L16 12L14 12 Z M 18 10L20 10L20 12L18 12 Z M 22 10L24 10L24 12L22 12 Z M 32 14L32 18L34 18L34 20L32 20L32 22L34 22L34 24L32 24L32 26L34 26L34 28L32 28L32 30L34 30L34 32L32 32L32 34L34 34L34 36L32 36L32 38L34 38L34 40L32 40L32 42L34 42L34 44L32 44L32 48L46 48L46 14 Z M 10 15L12 15L12 19L10 19 Z M 14 15L16 15L16 19L14 19 Z M 18 15L20 15L20 19L18 19 Z M 22 15L24 15L24 19L22 19 Z M 36 18L38 18L38 20L36 20 Z M 40 18L42 18L42 20L40 20 Z M 10 21L12 21L12 25L10 25 Z M 14 21L16 21L16 25L14 25 Z M 18 21L20 21L20 25L18 25 Z M 22 21L24 21L24 25L22 25 Z M 36 22L38 22L38 24L36 24 Z M 40 22L42 22L42 24L40 24 Z M 36 26L38 26L38 28L36 28 Z M 40 26L42 26L42 28L40 28 Z M 10 27L12 27L12 31L10 31 Z M 14 27L16 27L16 31L14 31 Z M 18 27L20 27L20 31L18 31 Z M 22 27L24 27L24 31L22 31 Z M 36 30L38 30L38 32L36 32 Z M 40 30L42 30L42 32L40 32 Z M 10 33L12 33L12 37L10 37 Z M 14 33L16 33L16 37L14 37 Z M 18 33L20 33L20 37L18 37 Z M 22 33L24 33L24 37L22 37 Z M 36 34L38 34L38 36L36 36 Z M 40 34L42 34L42 36L40 36 Z M 36 38L38 38L38 40L36 40 Z M 40 38L42 38L42 40L40 40 Z M 10 39L12 39L12 44L10 44 Z M 22 39L24 39L24 44L22 44 Z M 36 42L38 42L38 44L36 44 Z M 40 42L42 42L42 44L40 44Z" />
                                </svg>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-50">{{ $item->organisation->name }}</h3>
                                    <span
                                        class="text-xs text-gray-300">{{ $item->organisation->city . ', ' . $item->organisation->country }}</span>
                                </div>
                            </div>
                            <div class="my-4">
                                <h3 class="text-2xl font-medium text-gray-200">{{ $item->job->name }}</h3>
                                {{-- <div class="text-sm font-medium">
                                        <span class="m-1 ml-0 inline-block text-blue-500">HTML</span>
                                        <span class="m-1 ml-0 inline-block text-yellow-500">CSS</span>
                                        <span class="m-1 ml-0 inline-block text-pink-500">FIGMA</span>
                                        <span class="m-1 ml-0 inline-block text-lime-500">Ad. XD</span>
                                        <span class="m-1 ml-0 inline-block text-blue-500">Illustrator</span>
                                    </div>
                                    <div class="mt-2 text-sm text-gray-400">$60K - $100K per year</div> --}}
                                <p class="text-base font-medium text-gray-200">
                                    {{ Str::limit($item->description, 100, '...') }}</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-50">{{ $item->arrangement->type }}</span>
                                {{-- <a
                                        class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80">Apply
                                        Now</a> --}}
                                <x-button-link href="{{ URL::To('vacancy-********************+/' . $item->id . '/edit') }}"
                                    class='py-2 font-medium text-white px-4 bg-blue-500 hover:bg-blue-300 hover:text-black'>
                                    Apply Now</x-button-link>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- **************** -->
            </main>
        @else
            <p class="text-xl text-center text-bold">No vacancy posted yet, Please check again later.</p>
            @can('recruiter')
                <p class="text-lg text-center">Would you like to create a resume.</p>
                <div class="text-center">
                    <x-button-link href="{{ URL::to('vacancy/create') }}"
                        class="bg-blue-500 text-white hover:bg-green-300 hover:text-black transition-all px-4 py-2">
                        Create Vacancy
                    </x-button-link>
                </div>
            @endcan
        @endif
    </div>
    <script>
        let modal = document.getElementById("modal");

        function modalHandler(val) {
            if (val) {
                fadeIn(modal);
            } else {
                fadeOut(modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>
</x-layouts>
