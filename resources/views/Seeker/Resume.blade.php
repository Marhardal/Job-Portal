<x-layouts>
    @include('Layouts.seeker')
    @auth
        <section>
            <div class="container mx-auto">

                @if ($resume)
                    <div
                        class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-8 ">
                        <div class="col-span-1 space-y-6">
                            <div class="w-full bg-gray-600 rounded-md">
                                <h3 class="text-base font-semibold text-center my-auto text-black">My Resume</h3>
                                <div class="grid grid-cols-2 gap-5">
                                    <div class="p-3">
                                        <img src="{{ asset('images/car.jpeg') }}" alt="" class="h-full rounded-md">
                                    </div>
                                    <div class="">
                                        <div class="grid grid-cols-2 my-2">
                                            <div class="col-span-2">
                                                <div class="text-base text-white text-center leading-none">
                                                    How would you like to export your resume.
                                                </div>
                                            </div>
                                            <div class="col-span-2 flex py-2">
                                                <div class="mx-auto flex">
                                                    <x-button-link href="{{ URL::to('resume/download') }}" class="p-2 bg-blue-600 peer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"
                                                            class="fill-white w-6 h-6">
                                                            <path
                                                                d="M64 20c-1.7 0-3 1.3-3 3v58.8L46.1 66.9c-1.2-1.2-3.1-1.2-4.2 0-1.2 1.2-1.2 3.1 0 4.2l20 20c.6.6 1.4.9 2.1.9s1.5-.3 2.1-.9l20-20c1.2-1.2 1.2-3.1 0-4.2-1.2-1.2-3.1-1.2-4.2 0L67 81.8V23C67 21.3 65.7 20 64 20zM98.2 113.8c0-1.7-1.3-3-3-3H32.8c-1.7 0-3 1.3-3 3s1.3 3 3 3h62.4C96.9 116.8 98.2 115.4 98.2 113.8z" />
                                                        </svg>
                                                    </x-button-link>
                                                </div>
                                                <div class="mx-auto flex">
                                                    <x-button-link href="" class="p-2 bg-blue-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
                                                            class="fill-black h-6 w-6">
                                                            <path
                                                                d="M23 4L3 4C1.300781 4 0 5.300781 0 7L0 19C0 20.699219 1.300781 22 3 22L23 22C24.699219 22 26 20.699219 26 19L26 7C26 5.300781 24.699219 4 23 4 Z M 23.800781 19.398438L16 13.800781L13 15.800781L9.898438 13.800781L2.199219 19.398438L8.5 12.898438L0.800781 6.898438L13 13.5L25.101563 7L17.5 13Z" />
                                                        </svg>
                                                    </x-button-link>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 my-2">
                                            <div class="col-span-2">
                                                <div class="text-base text-white text-center leading-none">
                                                    How would you like to export your resume.
                                                </div>
                                            </div>
                                            <div class="col-span-2 flex py-2">
                                                <div class="mx-auto flex">
                                                    <x-button-link href="" class="p-2 bg-blue-600 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"
                                                            class="fill-black w-6 h-6">
                                                            <path
                                                                d="M6 4C4.895 4 4 4.895 4 6L4 9C4 9.552 4.448 10 5 10L25 10C25.552 10 26 9.552 26 9L26 6C26 4.895 25.105 4 24 4L6 4 z M 5 12C4.448 12 4 12.448 4 13L4 17C4 17.552 4.448 18 5 18L15.517578 18C17.132578 15.589 19.88 14 23 14C24.054 14 25.06 14.190437 26 14.523438L26 13C26 12.448 25.552 12 25 12L5 12 z M 23 16.007812C21.20649 16.007812 19.413368 16.688194 18.050781 18.050781C15.325608 20.775955 15.325608 25.224045 18.050781 27.949219C20.739712 30.638148 25.10239 30.668188 27.835938 28.050781L29 29.304688L29.974609 24.041016L25 25L26.476562 26.587891C24.512189 28.492589 21.40684 28.477153 19.464844 26.535156C17.504017 24.57433 17.504017 21.42567 19.464844 19.464844C21.42567 17.504017 24.57433 17.504017 26.535156 19.464844 A 1.0001 1.0001 0 1 0 27.949219 18.050781C26.586585 16.688194 24.79351 16.007812 23 16.007812 z M 5 20C4.448 20 4 20.448 4 21L4 24C4 25.105 4.895 26 6 26L14.523438 26C14.190437 25.06 14 24.054 14 23C14 21.946 14.190437 20.94 14.523438 20L5 20 z"
                                                                fill="#0D0D0D" />
                                                        </svg>
                                                    </x-button-link>
                                                </div>
                                                <div class="mx-auto flex">
                                                    <x-button-link href="" class="p-2 bg-blue-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="fill-rose-500 h-6 w-6 hover:fill-white">
                                                            <path
                                                                d="M10 2L9 3L4 3L4 5L20 5L20 3L15 3L14 2L10 2 z M 5 7L5 20C5 21.1 5.9 22 7 22L17 22C18.1 22 19 21.1 19 20L19 7L5 7 z M 8 9L10 9L10 20L8 20L8 9 z M 14 9L16 9L16 20L14 20L14 9 z" />
                                                        </svg>
                                                    </x-button-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full bg-gray-600 rounded-md">
                                <div class="grid grid-col-2 gap-3">
                                    <div class="col-span-2 ">
                                        <h3 class="text-white text-center">Select a Template to use on your Resume.</h3>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="p-3">
                                            <img src="{{ asset('images/car.jpeg') }}" alt=""
                                                class="h-40 rounded-md">
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="p-3">
                                            <img src="{{ asset('images/car.jpeg') }}" alt=""
                                                class="h-40 rounded-md">
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="p-3">
                                            <img src="{{ asset('images/car.jpeg') }}" alt=""
                                                class="h-40 rounded-md">
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="p-3">
                                            <img src="{{ asset('images/car.jpeg') }}" alt=""
                                                class="h-40 rounded-md">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 bg-gray-100 rounded-lg">
                            <div class="flex flex-wrap w-full p-4">
                                <div class="flex-1">
                                    <div class="text-center mx-auto">
                                        <h3 class="my-3 text-2xl font-semibold w-full">
                                            {{ auth()->user()->first_name . ' ' . auth()->user()->surname }}
                                        </h3>
                                        <div class="text-lg font-semibold gap-4 flex justify-center">
                                            <h5>{{ $resume->city . ', ' . $resume->country }}</h5>
                                            <h5>{{ auth()->user()->phone }}</h5>
                                            <h5>{{ auth()->user()->email }}</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-full text-base my-2">
                                        <h3 class="text-lg font-semibold flex-auto">Profesional Summary</h3>
                                        <x-button-link href="{{ URL::to('resume/' . $resume->id . '/edit') }}"
                                            class="hover:bg-green-500 p-2 shadow-none hover:shadow-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="fill-green-500 hover:fill-white h-5 w-5">
                                                <path
                                                    d="M18.414062 2C18.158188 2 17.902031 2.0974687 17.707031 2.2929688L16 4L20 8L21.707031 6.2929688C22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062L19.121094 2.2929688C18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5L5 15C5 15 6.005 15.005 6.5 15.5C6.995 15.995 6.984375 16.984375 6.984375 16.984375C6.984375 16.984375 8.004 17.004 8.5 17.5C8.996 17.996 9 19 9 19L18.5 9.5L14.5 5.5 z M 3.6699219 17L3 21L7 20.330078L3.6699219 17 z" />
                                            </svg>
                                        </x-button-link>
                                    </div>
                                    <hr class="">
                                    <p class="my-2 text-base">{{ $resume->summary }}</p>
                                    <div class="flex w-full text-base my-2">
                                        <h3 class="text-lg font-semibold flex-auto">Work History</h3>
                                        <x-button-link href="{{ URL::to('resume/experience') }}"
                                            class="hover:bg-blue-600 p-2 shadow-none hover:shadow-none">
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
                                                <div class="flex gap-3">
                                                    <x-button-link
                                                        href="{{ URL::to('resume/experience/' . $item1->id) }}"
                                                        class="p-2 hover:bg-green-500 shadow-none hover:shadow-none hover:h-10">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="fill-green-500 hover:fill-white h-5 w-5">
                                                            <path
                                                                d="M18.414062 2C18.158188 2 17.902031 2.0974687 17.707031 2.2929688L16 4L20 8L21.707031 6.2929688C22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062L19.121094 2.2929688C18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5L5 15C5 15 6.005 15.005 6.5 15.5C6.995 15.995 6.984375 16.984375 6.984375 16.984375C6.984375 16.984375 8.004 17.004 8.5 17.5C8.996 17.996 9 19 9 19L18.5 9.5L14.5 5.5 z M 3.6699219 17L3 21L7 20.330078L3.6699219 17 z" />
                                                        </svg>
                                                    </x-button-link>
                                                    <x-button-link
                                                        href="{{ URL::to('resume/experience/' . $item1->id . '/delete') }}"
                                                        class=" hover:bg-red-500 shadow-none hover:shadow-none p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="fill-rose-500 h-5 w-5 hover:fill-white">
                                                            <path
                                                                d="M10 2L9 3L4 3L4 5L20 5L20 3L15 3L14 2L10 2 z M 5 7L5 20C5 21.1 5.9 22 7 22L17 22C18.1 22 19 21.1 19 20L19 7L5 7 z M 8 9L10 9L10 20L8 20L8 9 z M 14 9L16 9L16 20L14 20L14 9 z" />
                                                        </svg>
                                                    </x-button-link>
                                                </div>
                                            </div>
                                            <div class="col-span-3">
                                                <p class="text-base my-2">{{ $item1->job->name }}</p>
                                                <p class="text-base my-2 cols-span-2">
                                                    {{ $item1->employer . ' , ' . $item1->City . ' ' . $item1->country }}
                                                </p>
                                                <ul class="list-disc ml-4">
                                                    @if ($item1->duties->count() > 0)
                                                        @foreach ($item1->duties as $item)
                                                            <li class="my-1.5">
                                                                {{ $item->name }}
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                                {{-- @endforeach --}}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="flex w-full text-base my-2">
                                        <h3 class="text-lg font-semibold flex-auto">Skills</h3>
                                        <x-button-link href="{{ URL::to('resume/skill/create') }}"
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
                                        <div class="flex gap-5 my-2">
                                            @foreach ($resume->skill as $item)
                                                <div
                                                    class="text-base p-2 bg-blue-100 rounded-md text-black flex gap-2 justify-center w-full flex-wrap">
                                                    <span class="p-2">{{ $item->name }}</span>
                                                    <form action="{{ URL::to('resume/skill/' . $item->pivot->id) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <x-form.button
                                                            class="hover:bg-rose-600 p-2 shadow-none hover:shadow-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                class="fill-rose-600 h-5 w-5 hover:fill-white">
                                                                <path
                                                                    d="M3.726563 3.023438L3.023438 3.726563L7.292969 8L3.023438 12.269531L3.726563 12.980469L8 8.707031L12.269531 12.980469L12.980469 12.269531L8.707031 8L12.980469 3.726563L12.269531 3.023438L8 7.292969Z" />
                                                            </svg>
                                                        </x-form.button>
                                                    </form>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="flex w-full text-base my-2 pt-4">
                                        <h3 class="text-lg font-semibold flex-auto">Education</h3>
                                        <x-button-link href="{{ URL::to('resume/education/create') }}"
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
                                        <div class="gap-5 my-2 w-full grid grid-cols-3">
                                            @foreach ($resume->qualification as $item)
                                                <div class="">
                                                    <div class="col-span-1">
                                                        <div class="text-base">
                                                            <span>{{ $item->pivot->start_date . ' to ' }}</span>
                                                            <span>{{ $item->pivot->graduation_date }}</span>
                                                        </div>
                                                        <br>
                                                        <h3 class="text-base font-semibold">Institution</h3>
                                                        <p class="text-base">{{ $item->pivot->school }}</p>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class="flex">
                                                            <p class="text-base flex-auto">
                                                                {{ $item->name }}
                                                            </p>
                                                            <div class="flex">
                                                                <form
                                                                    action="{{ URL::to('resume/education/' . $item->pivot->id) }}"
                                                                    method="post">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <x-form.button
                                                                        class="hover:bg-rose-500 p-2 shadow-none hover:shadow-none overflow-hidden">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"
                                                                        class="fill-rose-500 h-5 w-5 hover:fill-white">
                                                                        <path
                                                                            d="M10 2L9 3L4 3L4 5L20 5L20 3L15 3L14 2L10 2 z M 5 7L5 20C5 21.1 5.9 22 7 22L17 22C18.1 22 19 21.1 19 20L19 7L5 7 z M 8 9L10 9L10 20L8 20L8 9 z M 14 9L16 9L16 20L14 20L14 9 z" />
                                                                    </svg>
                                                                    </x-form.button>
                                                                </form>
                                                                <x-button-link
                                                                    href="{{ URL::to('resume/education/' . $item->id . '/edit') }}"
                                                                    class="hover:bg-green-500 p-2 shadow-none hover:shadow-none">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="fill-green-500 w-5 h-5 hover:fill-white hover:overflow-hidden">
                                                                            <path
                                                                                d="M18.414062 2C18.158188 2 17.902031 2.0974687 17.707031 2.2929688L16 4L20 8L21.707031 6.2929688C22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062L19.121094 2.2929688C18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5L5 15C5 15 6.005 15.005 6.5 15.5C6.995 15.995 6.984375 16.984375 6.984375 16.984375C6.984375 16.984375 8.004 17.004 8.5 17.5C8.996 17.996 9 19 9 19L18.5 9.5L14.5 5.5 z M 3.6699219 17L3 21L7 20.330078L3.6699219 17 z" />
                                                                        </svg>
                                                                </x-button-link>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="flex w-full text-base my-2 pt-4">
                                        <h3 class="text-lg font-semibold flex-auto">Refarrals</h3>
                                        <x-button-link href="{{ URL::to('resume/referral/create') }}"
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

                                                    <div class="flex">
                                                        <form
                                                            action="{{ URL::to('resume/referral/' . $item->id) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <x-form.button
                                                                class="hover:bg-rose-500 p-2 shadow-none hover:shadow-none overflow-hidden">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24"
                                                                class="fill-rose-500 h-5 w-5 hover:fill-white">
                                                                <path
                                                                    d="M10 2L9 3L4 3L4 5L20 5L20 3L15 3L14 2L10 2 z M 5 7L5 20C5 21.1 5.9 22 7 22L17 22C18.1 22 19 21.1 19 20L19 7L5 7 z M 8 9L10 9L10 20L8 20L8 9 z M 14 9L16 9L16 20L14 20L14 9 z" />
                                                            </svg>
                                                            </x-form.button>
                                                        </form>
                                                        <x-button-link
                                                            href="{{ URL::to('resume/referral/' . $item->id . '/edit') }}"
                                                            class="hover:bg-green-500 p-2 shadow-none hover:shadow-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24"
                                                                    class="fill-green-500 w-5 h-5 hover:fill-white hover:overflow-hidden">
                                                                    <path
                                                                        d="M18.414062 2C18.158188 2 17.902031 2.0974687 17.707031 2.2929688L16 4L20 8L21.707031 6.2929688C22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062L19.121094 2.2929688C18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5L5 15C5 15 6.005 15.005 6.5 15.5C6.995 15.995 6.984375 16.984375 6.984375 16.984375C6.984375 16.984375 8.004 17.004 8.5 17.5C8.996 17.996 9 19 9 19L18.5 9.5L14.5 5.5 z M 3.6699219 17L3 21L7 20.330078L3.6699219 17 z" />
                                                                </svg>
                                                        </x-button-link>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <p class="trxt-base">Please Insert Referrals</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
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
</x-layouts>
