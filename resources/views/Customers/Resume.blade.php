<x-Customer-Layouts>
    @include('Layouts.Customer-Nav')
    @auth
        <section>
            <div class="max-w-xl mx-auto mt-20">
                @if (Auth::user()->resume)
                    Resume Available
                @else
                    <p class="text-xl mb-6 text-center text-bold mt-20">Seems like you don't have a resume yet.</p>
                    <p class="text-lg text-center mb-6">Would you like to create a resume.</p>
                    <div class="text-center">
                        <x-anchor href="{{ URL::to('resume/create') }}">Create Resume</x-anchor>
                    </div>
                @endif
            </div>
        </section>
    @endauth
</x-Customer-Layouts>
