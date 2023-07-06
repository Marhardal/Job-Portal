<x-layouts>
    @include('Layouts.seeker')
    @auth
        <section>
            <div class="container mx-auto">

                @if ($resumes)
                    @foreach ($resumes as $resume)
                        <div
                            class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-8 ">
                            <div class="col-span-1 space-y-6">
                                <div class="w-full bg-gray-600 rounded-md">
                                    <div class="p-1">
                                        <div class="shadow rounded h-10 flex p-1 relative items-center bg-gray-400">
                                            <div class="w-full flex justify-center">
                                                <x-button-link href="" class="bg-none hover:bg-none">Resume
                                                </x-button-link>
                                            </div>
                                            <div class="w-full flex justify-center">
                                                <x-button-link href="" class="bg-none hover:bg-none">Letter
                                                </x-button-link>
                                            </div>
                                            <span
                                                class="elSwitch bg-white shadow text-gray-800 flex items-center justify-center w-1/2 rounded h-8 transition-all top-[4px] absolute left-1 ">
                                                Text
                                            </span>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-5">
                                        <div class="p-3">
                                            <img src="{{ asset('images/car.jpeg') }}" alt=""
                                                class="h-full rounded-md">
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
                                                        <x-button-link href="{{ URL::to('resume/download') }}"
                                                            class="p-2 bg-blue-600 peer">
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
                                    <div class="p-1">
                                        <div class="shadow rounded h-10 flex p-1 relative items-center bg-gray-400">
                                            <div class="w-full flex justify-center">
                                                <x-button-link href="" class="bg-none hover:bg-none">Template
                                                </x-button-link>
                                            </div>
                                            <div class="w-full flex justify-center">
                                                <x-button-link href="" class="bg-none hover:bg-none">Section
                                                </x-button-link>
                                            </div>
                                            <span
                                                class="elSwitch bg-white shadow text-gray-800 flex items-center justify-center w-1/2 rounded h-8 transition-all top-[4px] absolute left-1 ">
                                                Text
                                            </span>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-0.5">
                                        <div class="col-span-1 text-center m-1">
                                            <x-button-link href="{{ URL::to('resume') }}"
                                                class="bg-blue-500 hover:bg-blue-400 rounded flex">
                                                <div class="mx-auto p-2">
                                                    <div class="">
                                                        <span class="text-base text-white ">Contact</span>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                        class="w-14 h-14 fill-white peer-hover:black">
                                                        <path
                                                            d="M39.5,8c2.485,0,4.5,2.015,4.5,4.5v23.009c0,2.485-2.015,4.5-4.5,4.5h-31c-2.485,0-4.5-2.015-4.5-4.5V12.5 C4,10.015,6.015,8,8.5,8H39.5z M18.5,25h-7c-0.759,0-1.387,0.564-1.486,1.296L10,26.5v0.984l0.016,0.217 c0.325,2.227,2.189,3.302,4.984,3.302c2.662,0,4.479-0.974,4.928-2.989l0.057-0.31L20,27.485V26.5c0-0.759-0.564-1.387-1.296-1.486 L18.5,25z M36.5,25.992h-8.995l-0.204,0.014c-0.732,0.099-1.296,0.727-1.296,1.486c0,0.759,0.564,1.387,1.296,1.486l0.204,0.014 H36.5l0.204-0.014C37.436,28.879,38,28.252,38,27.492c0-0.759-0.564-1.387-1.296-1.486L36.5,25.992z M15,17.004 c-1.657,0-3,1.343-3,3c0,1.657,1.343,3,3,3s3-1.343,3-3C18,18.347,16.657,17.004,15,17.004z M36.5,19h-8.995l-0.204,0.014 c-0.732,0.099-1.296,0.727-1.296,1.486s0.564,1.387,1.296,1.486L27.505,22H36.5l0.204-0.014C37.436,21.887,38,21.259,38,20.5 s-0.564-1.387-1.296-1.486L36.5,19z" />
                                                    </svg>
                                                </div>
                                            </x-button-link>
                                        </div>
                                        <div class="col-span-1 text-center m-1">
                                            <x-button-link href="{{ URL::to('resume/create') }}"
                                                class="bg-blue-500 hover:bg-blue-400 rounded flex">
                                                <div class="mx-auto p-2">
                                                    <div class="">
                                                        <span class="text-base text-white ">Summary</span>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white h-14 mx-auto"
                                                        viewBox="0 0 32 32">
                                                        <path
                                                            d="M12 5C8.699219 5 6 7.699219 6 11C6 14.300781 8.699219 17 12 17L16 17L16 27L18 27L18 7L20 7L20 27L22 27L22 7L24 7L24 5 Z M 12 7L16 7L16 15L12 15C9.78125 15 8 13.21875 8 11C8 8.78125 9.78125 7 12 7Z" />
                                                    </svg>
                                                </div>
                                            </x-button-link>
                                        </div>
                                        <div class="col-span-1 text-center m-1">
                                            <x-button-link href="{{ URL::to('resume/experience/' . $resume->id . '/show') }}"
                                                class="bg-blue-500 hover:bg-blue-400 rounded flex">
                                                <div class="mx-auto p-2">
                                                    <div class="">
                                                        <span class="text-base text-white ">Experience</span>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                        class="fill-white h-14 w-14 mx-auto">
                                                        <path
                                                            d="M12.5 5C10.019 5 8 7.019 8 9.5L8 33L6.5 33C5.672 33 5 33.671 5 34.5L5 36.5C5 40.084 7.916 43 11.5 43L25.474609 43C24.985609 42.062 24.611328 41.055 24.361328 40L11.5 40C9.57 40 8 38.43 8 36.5L8 36L24.050781 36C24.286781 32.902 25.604812 30.111 27.632812 28L21.5 28C20.671 28 20 27.329 20 26.5C20 25.671 20.671 25 21.5 25L31.5 25C31.63 25 31.754 25.021734 31.875 25.052734C33.448 24.376734 35.179 24 37 24C38.034 24 39.035 24.133328 40 24.361328L40 9.5C40 7.019 37.981 5 35.5 5L12.5 5 z M 16.5 13C17.328 13 18 13.672 18 14.5C18 15.328 17.328 16 16.5 16C15.672 16 15 15.328 15 14.5C15 13.672 15.672 13 16.5 13 z M 21.5 13L31.5 13C32.329 13 33 13.671 33 14.5C33 15.329 32.329 16 31.5 16L21.5 16C20.671 16 20 15.329 20 14.5C20 13.671 20.671 13 21.5 13 z M 16.5 19C17.328 19 18 19.672 18 20.5C18 21.328 17.328 22 16.5 22C15.672 22 15 21.328 15 20.5C15 19.672 15.672 19 16.5 19 z M 21.5 19L31.5 19C32.329 19 33 19.671 33 20.5C33 21.329 32.329 22 31.5 22L21.5 22C20.671 22 20 21.329 20 20.5C20 19.671 20.671 19 21.5 19 z M 16.5 25C17.328 25 18 25.672 18 26.5C18 27.328 17.328 28 16.5 28C15.672 28 15 27.328 15 26.5C15 25.672 15.672 25 16.5 25 z M 37 26C30.925 26 26 30.925 26 37C26 43.075 30.925 48 37 48C43.075 48 48 43.075 48 37C48 30.925 43.075 26 37 26 z M 33 30L41 30C41.553 30 42 30.448 42 31C42 31.552 41.553 32 41 32L41 34C41 35.2 40.457187 36.266 39.617188 37C40.457188 37.734 41 38.8 41 40L41 42C41.553 42 42 42.448 42 43C42 43.552 41.553 44 41 44L40 44L34 44L33 44C32.447 44 32 43.552 32 43C32 42.448 32.447 42 33 42L33 40C33 38.8 33.542813 37.734 34.382812 37C33.542812 36.266 33 35.2 33 34L33 32C32.447 32 32 31.552 32 31C32 30.448 32.447 30 33 30 z M 35 32L35 34L39 34L39 32L35 32 z M 37 38C35.897 38 35 38.897 35 40L35 41.611328L36.683594 41.050781C36.888594 40.982781 37.111406 40.982781 37.316406 41.050781L39 41.611328L39 40C39 38.897 38.103 38 37 38 z" />
                                                    </svg>
                                                </div>
                                            </x-button-link>
                                        </div>
                                        <div class="col-span-1 text-center m-1">
                                            <x-button-link href="{{ URL::to('resume/education/' . $resume->id . '/show') }}"
                                                class="bg-blue-500 hover:bg-blue-400 rounded flex">
                                                <div class="mx-auto p-2">
                                                    <div class="">
                                                        <span class="text-base text-white ">Education</span>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
                                                        class="fill-white w-14 h14 mx-auto">
                                                        <path
                                                            d="M13 4.5C12.945313 4.5 12.894531 4.515625 12.84375 4.53125L0.84375 8.53125C0.640625 8.597656 0.5 8.785156 0.5 9C0.5 9.214844 0.640625 9.402344 0.84375 9.46875L3.59375 10.40625C3.566406 10.441406 3.527344 10.464844 3.5 10.5C2.902344 11.257813 2.59375 12.300781 2.46875 13.8125C2.019531 14.011719 1.71875 14.476563 1.71875 15C1.71875 15.523438 2.019531 15.988281 2.46875 16.1875C2.070313 19.574219 0.0625 20.710938 0.0625 21C0.0625 21.148438 1.625 22 2 22C2.578125 22 3.96875 21.03125 3.96875 18.90625C3.96875 17.636719 3.839844 16.703125 3.71875 16.03125C4.050781 15.800781 4.28125 15.4375 4.28125 15C4.28125 14.539063 4.019531 14.164063 3.65625 13.9375C3.769531 12.5625 4.03125 11.765625 4.4375 11.25C4.90625 10.652344 5.667969 10.289063 6.8125 9.8125C6.867188 9.789063 6.953125 9.75 7.03125 9.71875C7.046875 9.714844 7.046875 9.691406 7.0625 9.6875C7.261719 9.609375 7.46875 9.53125 7.625 9.46875C8.375 9.160156 8.992188 8.941406 9.5625 8.71875C9.734375 8.652344 9.839844 8.59375 10 8.53125C10.515625 8.332031 10.886719 8.195313 11.25 8.0625C11.386719 8.011719 11.472656 7.980469 11.59375 7.9375C12.417969 7.640625 12.769531 7.535156 12.78125 7.53125C13.089844 7.425781 13.425781 7.589844 13.53125 7.90625C13.636719 8.21875 13.472656 8.550781 13.15625 8.65625C13.132813 8.664063 11.746094 9.082031 8.09375 10.59375C7.859375 10.691406 7.621094 10.757813 7.40625 10.84375C6.972656 11.015625 6.613281 11.175781 6.3125 11.3125L12.84375 13.46875C12.894531 13.484375 12.945313 13.5 13 13.5C13.054688 13.5 13.105469 13.484375 13.15625 13.46875L25.15625 9.46875C25.359375 9.402344 25.5 9.214844 25.5 9C25.5 8.785156 25.359375 8.597656 25.15625 8.53125L13.15625 4.53125C13.105469 4.515625 13.054688 4.5 13 4.5 Z M 21 12.25L13.46875 14.75C13.3125 14.800781 13.160156 14.8125 13 14.8125C12.839844 14.8125 12.6875 14.800781 12.53125 14.75L5.25 12.3125C5.117188 12.65625 5.0625 13.105469 5.0625 13.75C5.539063 14.023438 6 14.578125 6 15.53125C6 16.117188 5.6875 16.535156 5.4375 16.8125C6.515625 18.066406 9.492188 18.96875 13 18.96875C17.417969 18.96875 21 17.542969 21 15.78125Z" />
                                                    </svg>
                                                </div>
                                            </x-button-link>
                                        </div>
                                        <div class="col-span-1 text-center m-1">
                                            <x-button-link href="{{ URL::to('resume/link/create') }}"
                                                class="bg-blue-500 hover:bg-blue-400 rounded flex">
                                                <div class="mx-auto p-2">
                                                    <div class="">
                                                        <span class="text-base text-white ">Links</span>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white h-14"
                                                        viewBox="0 0 32 32">
                                                        <path
                                                            d="M21.75 4C20.078125 4 18.492188 4.660156 17.3125 5.84375L15.84375 7.3125C14.660156 8.496094 14 10.078125 14 11.75C14 12.542969 14.152344 13.316406 14.4375 14.03125L16.0625 12.40625C15.859375 11.109375 16.253906 9.714844 17.25 8.71875L18.71875 7.25C19.523438 6.445313 20.613281 6 21.75 6C22.886719 6 23.945313 6.445313 24.75 7.25C26.410156 8.910156 26.410156 11.621094 24.75 13.28125L23.28125 14.75C22.476563 15.554688 21.386719 16 20.25 16C20.027344 16 19.808594 15.976563 19.59375 15.9375L17.96875 17.5625C18.683594 17.847656 19.457031 18 20.25 18C21.921875 18 23.507813 17.339844 24.6875 16.15625L26.15625 14.6875C27.339844 13.503906 28 11.921875 28 10.25C28 8.578125 27.339844 7.027344 26.15625 5.84375C24.976563 4.660156 23.421875 4 21.75 4 Z M 19.28125 11.28125L11.28125 19.28125L12.71875 20.71875L20.71875 12.71875 Z M 11.75 14C10.078125 14 8.492188 14.660156 7.3125 15.84375L5.84375 17.3125C4.660156 18.496094 4 20.078125 4 21.75C4 23.421875 4.660156 24.972656 5.84375 26.15625C7.023438 27.339844 8.578125 28 10.25 28C11.921875 28 13.507813 27.339844 14.6875 26.15625L16.15625 24.6875C17.339844 23.503906 18 21.921875 18 20.25C18 19.457031 17.847656 18.683594 17.5625 17.96875L15.9375 19.59375C16.140625 20.890625 15.746094 22.285156 14.75 23.28125L13.28125 24.75C12.476563 25.554688 11.386719 26 10.25 26C9.113281 26 8.054688 25.554688 7.25 24.75C5.589844 23.089844 5.589844 20.378906 7.25 18.71875L8.71875 17.25C9.523438 16.445313 10.613281 16 11.75 16C11.972656 16 12.191406 16.023438 12.40625 16.0625L14.03125 14.4375C13.316406 14.152344 12.542969 14 11.75 14Z" />
                                                    </svg>
                                                </div>
                                            </x-button-link>
                                        </div>
                                        <div class="col-span-1 text-center m-1">
                                            <x-button-link href="{{ URL::to('resume/skill/create') }}"
                                                class="bg-blue-500 hover:bg-blue-400 rounded flex">
                                                <div class="mx-auto p-2">
                                                    <div class="">
                                                        <span class="text-base text-white ">Skills</span>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white h-14 w-14"
                                                        viewBox="0 0 26 26">
                                                        <path
                                                            d="M1.3125 0L0 1.3125L2.3125 5.3125L3.8125 5.09375L12.96875 14.25L12.1875 15C11.789063 15.398438 11.789063 16.007813 12.1875 16.40625L12.59375 16.8125C12.992188 17.210938 13.605469 17.210938 13.90625 16.8125L15.09375 18C14.992188 18.601563 15.09375 19.3125 15.59375 19.8125L21 25.1875C22.101563 26.289063 23.898438 26.289063 25 25.1875C26.300781 23.988281 26.289063 22.195313 25.1875 21.09375L19.8125 15.6875C19.3125 15.1875 18.601563 14.988281 18 15.1875L16.6875 14C16.988281 13.601563 16.988281 12.988281 16.6875 12.6875L16.3125 12.3125C15.914063 11.914063 15.304688 11.914063 14.90625 12.3125L14.25 12.96875L5.09375 3.8125L5.3125 2.3125 Z M 20.8125 0.03125C18.839844 -0.132813 16.226563 1.175781 15 2.3125C13.496094 3.816406 13.738281 5.789063 14.9375 7.6875L12.8125 9.8125L14.3125 11.5C15.113281 10.800781 16.292969 10.800781 17.09375 11.5L17.59375 12L18.46875 11.125C20.277344 12.1875 22.160156 12.339844 23.59375 10.90625C24.992188 9.605469 26.511719 6.398438 25.8125 4.5L23 7.40625C22.601563 7.804688 21.992188 7.804688 21.59375 7.40625L18.6875 4.5C18.289063 4.101563 18.289063 3.492188 18.6875 3.09375L21.59375 0.1875C21.34375 0.101563 21.09375 0.0546875 20.8125 0.03125 Z M 9.8125 12.5L6.1875 16.125C5.8125 16.035156 5.40625 16 5 16C2.199219 16 0 18.199219 0 21C0 23.800781 2.199219 26 5 26C7.800781 26 10 23.800781 10 21C10 20.488281 9.917969 19.992188 9.78125 19.53125L11.90625 17.40625L11.59375 17C10.792969 16.199219 10.800781 14.988281 11.5 14.1875 Z M 17.5625 17.0625C17.6875 17.0625 17.804688 17.085938 17.90625 17.1875L23.8125 23.09375C24.011719 23.292969 24.011719 23.613281 23.8125 23.8125C23.613281 24.011719 23.292969 24.011719 23.09375 23.8125L17.1875 17.90625C16.988281 17.707031 16.988281 17.386719 17.1875 17.1875C17.289063 17.085938 17.4375 17.0625 17.5625 17.0625 Z M 5.6875 18.40625L7.59375 20.3125L6.90625 22.90625L4.3125 23.59375L2.40625 21.6875L3.09375 19.09375Z" />
                                                    </svg>
                                                </div>
                                            </x-button-link>
                                        </div>
                                        <div class="col-span-1 text-center m-1">
                                            <x-button-link href="{{ URL::to('resume/referral/' . $resume->id . '/show') }}"
                                                class="bg-blue-500 hover:bg-blue-400 rounded flex">
                                                <div class="mx-auto p-2">
                                                    <div class="">
                                                        <span class="text-base text-white ">Referral</span>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 fill-white"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 3 A 2 2 0 0 0 10 5 A 2 2 0 0 0 12 7 A 2 2 0 0 0 14 5 A 2 2 0 0 0 12 3 z M 11.984375 8.9863281 A 1.0001 1.0001 0 0 0 11 10L11 11.585938L9.2929688 13.292969 A 1.0001 1.0001 0 1 0 10.707031 14.707031L12 13.414062L13.292969 14.707031 A 1.0001 1.0001 0 1 0 14.707031 13.292969L13 11.585938L13 10 A 1.0001 1.0001 0 0 0 11.984375 8.9863281 z M 6 10 A 2 2 0 0 0 4 12 A 2 2 0 0 0 6 14 A 2 2 0 0 0 8 12 A 2 2 0 0 0 6 10 z M 18 10 A 2 2 0 0 0 16 12 A 2 2 0 0 0 18 14 A 2 2 0 0 0 20 12 A 2 2 0 0 0 18 10 z M 6 16C4.665 16 2 16.720781 2 18.050781L2 19C2 19.552 2.448 20 3 20L9 20C9.552 20 10 19.552 10 19L10 18.050781C10 16.720781 7.335 16 6 16 z M 18 16C16.665 16 14 16.720781 14 18.050781L14 19C14 19.552 14.448 20 15 20L21 20C21.552 20 22 19.552 22 19L22 18.050781C22 16.720781 19.335 16 18 16 z" />
                                                    </svg>
                                                </div>
                                            </x-button-link>
                                        </div>
                                        <div class="col-span-1 text-center m-1">
                                            <x-button-link href="{{ URL::to('resume') }}"
                                                class="bg-blue-500 hover:bg-blue-400 rounded flex">
                                                <div class="mx-auto p-2">
                                                    <div class="">
                                                        <span class="text-base text-white ">Add</span>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-14 h-14"
                                                        viewBox="0 0 30 30">
                                                        <path
                                                            d="M14.970703 2.9726562 A 2.0002 2.0002 0 0 0 13 5L13 13L5 13 A 2.0002 2.0002 0 1 0 5 17L13 17L13 25 A 2.0002 2.0002 0 1 0 17 25L17 17L25 17 A 2.0002 2.0002 0 1 0 25 13L17 13L17 5 A 2.0002 2.0002 0 0 0 14.970703 2.9726562 z" />
                                                    </svg>
                                                </div>
                                            </x-button-link>
                                        </div>
                                    </div>
                                    {{-- <div class="grid grid-col-2 gap-3">
                                        {{-- <div class="col-span-1">
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
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-span-2 bg-gray-100 rounded-lg">
                                <iframe src="{{ url('resume/show') }}" frameborder="0" class="w-full h-full">
                                </iframe>
                            </div>
                        </div>
                    @endforeach
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
        @if (session()->has('success'))
        @endif
    @endauth
</x-layouts>
