<x-layouts>
    <div class="max-w-3xl mx-auto mt-10 flex flex-col items-center h-screen">
        <div class="flex m-5 border-b w-full ">

                <div class="m-5"><h3>Qualifications</h3></div>
                <div class="m-5">
                    <x-button-link href="{{ URL::to('resume/education/create') }}" class="bg-blue-500 py-2 px-4 text-white hover:bg-blue-600">New
                    </x-button-link>
            </div>
        </div>
        @foreach ($resumes as $resume)
            <div class="mx-auto right-0 mt-2 w-60">
                <div class="bg-white rounded overflow-hidden shadow-lg">
                    <div class="text-center p-6 bg-gray-800 border-b">
                        <svg aria-hidden="true" role="img" class="h-24 w-24 text-white rounded-full mx-auto"
                            width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                d="M172 120a44 44 0 1 1-44-44a44 44 0 0 1 44 44Zm60 8A104 104 0 1 1 128 24a104.2 104.2 0 0 1 104 104Zm-16 0a88 88 0 1 0-153.8 58.4a81.3 81.3 0 0 1 24.5-23a59.7 59.7 0 0 0 82.6 0a81.3 81.3 0 0 1 24.5 23A87.6 87.6 0 0 0 216 128Z">
                            </path>
                        </svg>
                        <p class="pt-2 text-lg font-semibold text-gray-50">
                            {{ ucwords($resume->pivot->school) }}</p>
                        <p class="text-sm text-gray-100">{{ $resume->name }}</p>
                        <p class="text-sm text-gray-100">{{ $resume->pivot->start_date }}</p>
                        <p class="text-sm text-gray-100">{{ $resume->pivot->graduation_date }}</p>
                        {{-- <div class="mt-5">
                        <a class="border rounded-full py-2 px-4 text-xs font-semibold text-gray-100">
                            Manage your Account
                        </a>
                    </div> --}}
                    </div>
                    <div class="flex m-2 space-x-1">
                        <x-button-link href="{{ URL::to('resume/education/'.$resume->pivot->id.'/edit') }}" class="px-4 py-2 bg-green-600 hover:bg-green-500 text-white mx-auto text-center w-full">
                            {{-- <div class="text-green-600">
                            <svg fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                                strokeWidth="1" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div> --}}
                            Edit
                        </x-button-link>
                        <form action="{{ URL::to('resume/education/'.$resume->id) }}" method="post">
                            @method('Delete')
                            @csrf
                            <x-form.button class="hover:bg-rose-500 bg-rose-600 text-center text-white">
                                Delete
                            </x-form.button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layouts>
