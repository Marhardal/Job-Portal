<x-Customer-Layouts>
    @include('Layouts.Customer-Nav')
    @auth
        <section>
            <div class="max-w-4xl mx-auto mt-20">
                @if ($resume->count() > 0)
                    <h3 class="text-lg font-semibold mb-2">Professional Summary</h3>
                    <hr class="">
                    <p class="my-2 text-base">{{ $resume->summary }}</p>
                    <h3 class="text-lg font-semibold">Work History</h3>
                    <hr>
                    <div class="flex flex-wrap mt-2">
                        <div class="w-sm">
                            {{-- {{ $resume->seekerduties->experience->start_date }} --}}
                        </div>
                        <div class="flex-1">

                        </div>
                    </div>
                @else
                    <p class="text-xl mb-6 text-center text-bold mt-20">Seems like you don't have a resume yet.</p>
                    <p class="text-lg text-center mb-6">Would you like to create a resume.</p>
                    <div class="text-center">
                        <x-button-link href="{{ URL::to('resume/create') }}"
                            class="bg-blue-500 text-white hover:bg-green-300 hover:text-black transition-all">Create Resume
                        </x-button-link>
                    </div>
                @endif
            </div>
        </section>
    @endauth
</x-Customer-Layouts>
