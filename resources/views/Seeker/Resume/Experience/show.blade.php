<x-layouts>
    <div class="max-w-3xl mx-auto mt-10 flex flex-col items-center h-screen">
        <div class="flex m-5 border-b w-full ">

            <div class="m-5">
                <h3>Experience</h3>
            </div>
            <div class="m-5">
                <x-button-link href="{{ URL::to('resume/experience/create') }}"
                    class="bg-blue-500 py-2 px-4 text-white hover:bg-blue-600">New
                </x-button-link>
            </div>
        </div>
        @foreach ($resumes as $resume)
            <article
                class="hover:bg-gray-300 border border-black border-opacity-0 hover:border-opacity-5 transition-colors duration-300 rounded-2xl">
                <div class="px-6 py-5 lg:flex">
                    <div class="lg:flex-1 mr-5 flex-col">
                        <img src="{{ asset('/Images/undraw_feeling_proud_qne1.png') }}" alt="illustration-1"
                            class="rounded-xl w-50 h-full">
                    </div>
                    <div class="flex-auto flex flex-col justify-between">
                        <header class="mt-2">
                            {{-- <div class="space-x-2">
                                <a href="{{ URL::to('/?category=' . $resume->category->slug) }}"
                                    class="px-3 py-1 uppercase border border-blue-300 rounded-full text-blue-500 font-semibold"
                                    style="font-size: 10px;">{{ $resume->category->name }}</a>
                            </div> --}}
                            <div class="mt-5">
                                <div class="flex">
                                    <div class="flex-auto">
                                        <h2 class="text-xl">{{ $resume->job->name }}</h2>
                                    </div>
                                    <div class="">
                                        <h2 class="text-xl">{{ $resume->employer }}</h2>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="block mt-2 text-gray-700 flex-auto">From
                                        <span>{{ $resume->start_date . ' to ' . $resume->leave_date }}</span>
                                    </div>
                                    <div class="block mt-2">
                                        <span>{{ $resume->City . ' ' . $resume->country }}</span>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="my-5 text-sm space-y-4">
                            <div class="flex border-b pb-2">
                                <h3 class="flex-auto py-2 font-semibold">Experience Duties</h3>
                                <x-button-link href="{{ URL::to('resume/duties/create') }}"
                                    class="py-2 px-4 bg-blue-500 text-white">Create Duty</x-button-link>
                            </div>
                            @if ($resume->duties->count() > 0)
                            @else
                                <p class="text-md ">Please add some duties to this work experience.</p>
                            @endif
                        </div>
                        <footer>
                            <div class="flex space-x-1">
                                <div class="flex">
                                    <x-button-link href="{{ URL::to('resume/experience/' . $resume->id . '/edit') }}"
                                        class="px-4 py-2 bg-green-600 hover:bg-green-500 text-white mx-auto text-center w-full">
                                        Edit
                                    </x-button-link>
                                </div>
                                <div class="flex">
                                    <form action="{{ URL::to('resume/experience/' . $resume->id) }}" method="post">
                                        @method('Delete')
                                        @csrf
                                        <x-form.button class="hover:bg-rose-500 bg-rose-600 text-center text-white">
                                            Delete
                                        </x-form.button>
                                    </form>
                                </div>
                            </div>
                        </footer>
                        {{-- <x-footer username="{{ $resume->user->username }}" name="{{ $resume->user->name }}"
                            slug="{{ $resume->slug }}" /> --}}
                    </div>
                </div>
            </article>
            {{-- <div class="mx-auto right-0 mt-2 w-60">
                <div class="bg-white rounded overflow-hidden shadow-lg">
                    <div class="text-center p-6 bg-gray-800 border-b">
                        <svg aria-hidden="true" role="img" class="h-24 w-24 text-white rounded-full mx-auto"
                            width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                d="M172 120a44 44 0 1 1-44-44a44 44 0 0 1 44 44Zm60 8A104 104 0 1 1 128 24a104.2 104.2 0 0 1 104 104Zm-16 0a88 88 0 1 0-153.8 58.4a81.3 81.3 0 0 1 24.5-23a59.7 59.7 0 0 0 82.6 0a81.3 81.3 0 0 1 24.5 23A87.6 87.6 0 0 0 216 128Z">
                            </path>
                        </svg>
                        <p class="pt-2 text-lg font-semibold text-gray-50">
                        <p class="text-sm text-gray-100">{{ $resume->job->name }}</p>
                        <p class="text-sm text-gray-100">From {{ $resume->start_date ." to ". $resume->leave_date }}</p>
                        <p class="text-sm text-gray-100">{{ $resume->employer }}</p>
                        <p class="text-sm text-gray-100">{{ $resume->City }}</p>
                        <p class="text-sm text-gray-100">{{ $resume->country }}</p>

                        <div class="mt-5">
                        <a class="border rounded-full py-2 px-4 text-xs font-semibold text-gray-100">
                            Manage your Account
                        </a>
                    </div>
                    </div>
                    <div class="flex m-2 space-x-1">
                        <x-button-link href="{{ URL::to('resume/experience/'.$resume->id.'/edit') }}" class="px-4 py-2 bg-green-600 hover:bg-green-500 text-white mx-auto text-center w-full">
                            <div class="text-green-600">
                            <svg fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                                strokeWidth="1" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                            Edit
                        </x-button-link>
                        <form action="{{ URL::to('resume/experience/'.$resume->id) }}" method="post">
                            @method('Delete')
                            @csrf
                            <x-form.button class="hover:bg-rose-500 bg-rose-600 text-center text-white">
                                Delete
                            </x-form.button>
                        </form>
                    </div>
                </div>
            </div> --}}
        @endforeach
    </div>
</x-layouts>
