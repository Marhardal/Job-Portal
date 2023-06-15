<x-layouts>
    @include('Layouts.seeker')
    <div class="container max-w-2xl h-screen flex mx-auto">
        @if ($jobs->count() > 0)

        @else
            <div class="justify-center items-center flex flex-col space-y-6 w-full">
                <p class="text-base text-center w-full">We don't have vacancies for you yet, please wait.</p>
                @can('recruiter')
                    <span>Would you like to create a job.</span>
                    <x-button-link href="{{ URL::to('job/create') }}" class="py-2 px-4 bg-blue-500 text-white">Create Job</x-button-link>
                @endcan
            </div>
        @endif
    </div>
</x-layouts>
