<x-Customer-Layouts>
    @include('Layouts.Customer-Nav')
    @auth
        <section>
            <div class="container max-w-4xl mx-auto">
                @if ($resume)
                    <h3 class="text-lg font-semibold mb-2">Professional Summary</h3>
                    <hr class="">
                    <p class="my-2 text-base">{{ $resume->summary }}</p>
                    <div class="flex w-full text-base my-2">
                        <h3 class="text-lg font-semibold flex-auto">Work History</h3>
                        <x-button-link href="{{ URL::to('resume/experience') }}"
                            class="hover:bg-blue-500 p-2 shadow-none hover:shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
                                class="w-5 h-5 fill-blue-500 transition-colors hover:fill-white">
                                <path
                                    d="M12 3C11.398438 3 11 3.398438 11 4L11 11L4 11C3.398438 11 3 11.398438 3 12L3 14C3 14.601563 3.398438 15 4 15L11 15L11 22C11 22.601563 11.398438 23 12 23L14 23C14.601563 23 15 22.601563 15 22L15 15L22 15C22.601563 15 23 14.601563 23 14L23 12C23 11.398438 22.601563 11 22 11L15 11L15 4C15 3.398438 14.601563 3 14 3Z" />
                            </svg>
                        </x-button-link>
                    </div>
                    <hr>
                    <div class="grid grid-cols-4 gap-5">
                        @foreach ($resume->experience as $item1)
                            <div class="col-span-1">
                                <p class="text-base my-2">{{ $item1->start_date }} to
                                    {{ $item1->leave_date }}</p>
                            </div>
                            <div class="col-span-3">
                                <p class="text-base my-2">{{ $item1->job->name }}</p>
                                <p class="text-base my-2">
                                    {{ $item1->employer . ' , ' . $item1->City . ' ' . $item1->country }}
                                </p>
                                <ul class="list-disc ml-4">
                                    @if ($item1->duties->count() > 0)
                                        @foreach ($item1->duties as $item)
                                            <li class="">
                                                {{ $item->name }}
                                                <div class="grid grid-cols-2 w-30 h-10 my-1.5">
                                                    <x-button-link
                                                        href="{{ URL::to('resume/duties/' . $item->id . '/edit') }}"
                                                        class=" w-12 h-10 px-2 py-1 bg-gray-700 hover:bg-green-500 shadow-none hover:shadow-none hover:h-10">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="fill-green-500 hover:fill-white h-8 w-8">
                                                            <path
                                                                d="M18.414062 2C18.158188 2 17.902031 2.0974687 17.707031 2.2929688L16 4L20 8L21.707031 6.2929688C22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062L19.121094 2.2929688C18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5L5 15C5 15 6.005 15.005 6.5 15.5C6.995 15.995 6.984375 16.984375 6.984375 16.984375C6.984375 16.984375 8.004 17.004 8.5 17.5C8.996 17.996 9 19 9 19L18.5 9.5L14.5 5.5 z M 3.6699219 17L3 21L7 20.330078L3.6699219 17 z" />
                                                        </svg>
                                                    </x-button-link>
                                                    <x-button-link
                                                        href="{{ URL::to('resume/duties/' . $item->id . '/delete') }}"
                                                        class=" hover:bg-red-500 shadow-none hover:shadow-none w-12 h-10 px-2 py-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="fill-rose-500 h-8 w-8 hover:fill-white">
                                                            <path
                                                                d="M10 2L9 3L4 3L4 5L20 5L20 3L15 3L14 2L10 2 z M 5 7L5 20C5 21.1 5.9 22 7 22L17 22C18.1 22 19 21.1 19 20L19 7L5 7 z M 8 9L10 9L10 20L8 20L8 9 z M 14 9L16 9L16 20L14 20L14 9 z" />
                                                        </svg>
                                                    </x-button-link>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                                {{-- @endforeach --}}
                            </div>
                        @endforeach
                    </div>

                    <hr>
                    <div class="flex w-full text-base my-2">
                        <h3 class="text-lg font-semibold flex-auto">Skills</h3>
                        <x-button-link href="{{ URL::to('resume/skill') }}"
                            class="hover:bg-blue-500 p-2 shadow-none hover:shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
                                class="w-5 h-5 fill-blue-500 transition-colors hover:fill-white">
                                <path
                                    d="M12 3C11.398438 3 11 3.398438 11 4L11 11L4 11C3.398438 11 3 11.398438 3 12L3 14C3 14.601563 3.398438 15 4 15L11 15L11 22C11 22.601563 11.398438 23 12 23L14 23C14.601563 23 15 22.601563 15 22L15 15L22 15C22.601563 15 23 14.601563 23 14L23 12C23 11.398438 22.601563 11 22 11L15 11L15 4C15 3.398438 14.601563 3 14 3Z" />
                            </svg>
                        </x-button-link>
                    </div>
                    <hr>
                    @if ($resume->skill != '')
                        <div class="flex flex-wrap gap-5 my-2">
                            @foreach ($resume->skill as $item)
                                <div class="text-base p-2 bg-blue-100 rounded-md text-black">
                                    {{ $item->name }}
                                    <span class="ml-1.5 text-lg pointer">&times;</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <div class="flex w-full text-base my-2 pt-4">
                        <h3 class="text-lg font-semibold flex-auto">Education</h3>
                        <x-button-link href="{{ URL::to('resume/education') }}"
                            class="hover:bg-blue-500 p-2 shadow-none hover:shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
                                class="w-5 h-5 fill-blue-500 hover:fill-white transition-colors">
                                <path
                                    d="M12 3C11.398438 3 11 3.398438 11 4L11 11L4 11C3.398438 11 3 11.398438 3 12L3 14C3 14.601563 3.398438 15 4 15L11 15L11 22C11 22.601563 11.398438 23 12 23L14 23C14.601563 23 15 22.601563 15 22L15 15L22 15C22.601563 15 23 14.601563 23 14L23 12C23 11.398438 22.601563 11 22 11L15 11L15 4C15 3.398438 14.601563 3 14 3Z" />
                            </svg>
                        </x-button-link>
                    </div>
                    <hr>
                    @if ($resume->qualification != '')
                        <div class="flex flex-col gap-5 my-2">
                            @foreach ($resume->qualification as $item)
                                <div class="w-xs">
                                    <div class="text-base">
                                        <span>{{ $item->pivot->start_date . ' to ' }}</span>
                                        <span>{{ $item->pivot->graduation_date }}</span>
                                    </div>
                                    <br>
                                    <h3 class="text-base font-semibold">Institution</h3>
                                    <p class="text-base">{{ $item->pivot->school }}</p>
                                </div>
                                <div class="flex-1">
                                    <div class="flex">
                                        <p class="text-base flex-auto">
                                            {{ $item->name }}
                                        </p>
                                        <div class="flex flex-row float-right">
                                            <x-button-link href="{{ URL::to('resume/education/' . $item->id . '/edit') }}"
                                                class="hover:bg-green-500 p-2 shadow-none hover:shadow-none overflow-hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="fill-green-500 w-8 h-8 hover:fill-white hover:overflow-hidden">
                                                    <path
                                                        d="M18.414062 2C18.158188 2 17.902031 2.0974687 17.707031 2.2929688L16 4L20 8L21.707031 6.2929688C22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062L19.121094 2.2929688C18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5L5 15C5 15 6.005 15.005 6.5 15.5C6.995 15.995 6.984375 16.984375 6.984375 16.984375C6.984375 16.984375 8.004 17.004 8.5 17.5C8.996 17.996 9 19 9 19L18.5 9.5L14.5 5.5 z M 3.6699219 17L3 21L7 20.330078L3.6699219 17 z" />
                                                </svg>
                                            </x-button-link>
                                            <x-button-link
                                                href="{{ URL::to('resume/education/' . $item->id . '/delete') }}"
                                                class="hover:bg-red-500 p-2 shadow-none hover:shadow-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="fill-rose-500 h-8 w-8 hover:fill-white">
                                                    <path
                                                        d="M10 2L9 3L4 3L4 5L20 5L20 3L15 3L14 2L10 2 z M 5 7L5 20C5 21.1 5.9 22 7 22L17 22C18.1 22 19 21.1 19 20L19 7L5 7 z M 8 9L10 9L10 20L8 20L8 9 z M 14 9L16 9L16 20L14 20L14 9 z" />
                                                </svg>
                                            </x-button-link>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <div class="flex w-full text-base my-2 pt-4">
                        <h3 class="text-lg font-semibold flex-auto">Refarrals</h3>
                        <x-button-link href="{{ URL::to('resume/referral') }}"
                            class="hover:bg-blue-500 p-2 shadow-none hover:shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
                                class="w-5 h-5 fill-blue-500 hover:fill-white transition-colors">
                                <path
                                    d="M12 3C11.398438 3 11 3.398438 11 4L11 11L4 11C3.398438 11 3 11.398438 3 12L3 14C3 14.601563 3.398438 15 4 15L11 15L11 22C11 22.601563 11.398438 23 12 23L14 23C14.601563 23 15 22.601563 15 22L15 15L22 15C22.601563 15 23 14.601563 23 14L23 12C23 11.398438 22.601563 11 22 11L15 11L15 4C15 3.398438 14.601563 3 14 3Z" />
                            </svg>
                        </x-button-link>
                    </div>
                    <hr>
                    <div class="flex flex-row gap-8">
                        @if ($resume->referral->count() > 0)
                            @foreach ($resume->referral as $item)
                                <div class="max-w-sm rounded-sm overflow-hidden">
                                    <div class="text-base flex flex-col">
                                        <span>{{ $item->first_name . ' ' . $item->Surname }}</span>
                                        <span>{{ $item->job_title }}</span>
                                        <span>{{ $item->employer }}</span>
                                        <span>{{ $item->city . ', ' . $item->country }}</span>
                                        <span>Phone: {{ $item->phone_number }}</span>
                                        <span>Email: {{ $item->email }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="trxt-base">Please Insert Referrals</p>
                        @endif
                    </div>
                @else
                    <div class="justify-center items-center flex flex-col h-screen space-y-9">
                        <p class="text-xl text-center text-bold">Seems like you don't have a resume yet.</p>
                        <p class="text-lg text-center">Would you like to create a resume.</p>
                        <div class="text-center">
                            <x-button-link href="{{ URL::to('resume/create') }}"
                                class="bg-blue-500 text-white hover:bg-green-300 hover:text-black transition-all px-4 py-2">
                                Create Resume
                            </x-button-link>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @endauth
</x-Customer-Layouts>
