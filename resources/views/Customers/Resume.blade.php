<x-Customer-Layouts>
    @include('Layouts.Customer-Nav')
    @auth
        <section>
            <div class="max-w-4xl mx-auto mt-20">
                @if ($resume->count() > 0)
                    <h3 class="text-lg font-semibold mb-2">Professional Summary</h3>
                    <hr class="">
                    <p class="my-2 text-base">{{ $resume->summary }}</p>
                    <div class="flex w-full text-base">
                        <h3 class="text-lg font-semibold my-2 flex-auto">Work History</h3>
                        <div class="flex-auto text-right">
                            <x-button-link href="{{ URL::to('resume/experience') }}" class="bg-blue-500 text-white">New Work History</x-button-link>
                        </div>
                    </div>
                    <hr>
                    <div class="flex flex-wrap gap-5 my-2">
                        <div class="w-xs">
                            <p class="text-base my-2">{{ $resume->seekerduties->experiences->start_date }} to
                                {{ $resume->seekerduties->experiences->leave_date }}</p>
                        </div>
                        <div class="flex-1">
                            <p class="text-base my-2">{{ $resume->seekerduties->job->name }}</p>
                            <p class="text-base my-2">
                                {{ $resume->seekerduties->experiences->employer . ' , ' . $resume->seekerduties->experiences->City . ' ' . $resume->seekerduties->experiences->country }}
                            </p>
                            <ul class="list-disc ml-4">
                                <li class="">
                                    {{ $resume->seekerduties->duties->name }}
                                    <div class="mt-1.5">
                                        <x-button-link
                                            href="{{ URL::to('resume/duties/' . $resume->seekerduties->duties->id . '/edit') }}"
                                            class="bg-green-500">Edit</x-button-link>
                                        <x-button-link
                                            href="{{ URL::to('resume/duties/' . $resume->seekerduties->duties->id . '/delete') }}"
                                            class="bg-red-600 text-white">Delete</x-button-link>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex w-full text-base mt-2 pt-4">
                        <h3 class="text-lg font-semibold my-2 flex-auto">Skills</h3>
                        <div class="flex-auto text-right">
                            <x-button-link href="{{ URL::to('resume/skill') }}" class="bg-blue-500 text-white">New Skill</x-button-link>
                        </div>
                    </div>
                    <hr>
                    <div class="flex w-full text-base mt-2 pt-4">
                        <h3 class="text-lg font-semibold my-2 flex-auto">Education</h3>
                        <div class="flex-auto text-right">
                            <x-button-link href="{{ URL::to('resume/education') }}" class="bg-blue-500 text-white">New Education</x-button-link>
                        </div>
                    </div>
                    <hr>
                    <div class="flex flex-wrap gap-5 my-2">
                        <div class="w-xs"></div>
                        <div class="flex-1">
                            <p class="text-base my-2">{{ $resume->skill->name }}</p>
                        </div>
                    </div>
                    <div class="flex w-full text-base mt-2 pt-4">
                        <h3 class="text-lg font-semibold my-2 flex-auto">Refarrals</h3>
                        <div class="flex-auto text-right">
                            <x-button-link href="{{ URL::to('resume/referral') }}" class="bg-blue-500 text-white">New Referral</x-button-link>
                        </div>
                    </div>
                    <hr>
                    <div class="flex gap-5 my-2">
                        <div class="w-xs"></div>
                        <div class="flex-1">
                            <p class="text-base my-2 bordder-gray-400">{{ $resume->skill->name }}</p>
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
