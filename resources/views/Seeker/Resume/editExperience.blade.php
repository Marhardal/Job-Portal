<x-Layouts>
    {{-- {{ dd(auth()->user()->role); }} --}}
    @auth
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                    <form action="{{ URL::to('resume/experience') }}" method="post"
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl md:max-w-2xl sm:mx-auto">
                        @csrf
                        <div>
                            <div class="bg-white px-4 py-2 sm:p-3 sm:pb-2">
                                <div class="sm:flex sm:items-start">
                                    <div class="text-center sm:mx-auto sm:mt-0 sm:text-left w-full">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900 mb-3" id="modal-title">
                                            Profesional Summary</h3>
                                        <hr class="mb-3 h-2">
                                        <div class="grid grid-cols-2 gap-3">
                                            <x-form.date name="start_date" id="month" placeholder="" type="month"
                                                label="MM/YYYY" value="{{ $experience->start_date }}" />
                                            <x-form.date name="leave_date" placeholder="" type="month" label="MM/YYYY"
                                                value="{{ $experience->leave_date }}" />
                                            <div class="mb-3 col-span-2">
                                                <div class="">
                                                    <label for="job_id"
                                                        class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Enter
                                                        the position you were in.</label>
                                                    <select name="job_id"
                                                        class="w-full border-2 rounded-md border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
                                                        @foreach ($jobs as $item)
                                                            {{-- <option value="{{ $item->id }}"
                                                                @selected($experience->job_id == $item->id)>{{ $item->name }}</option> --}}
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <x-form.error name="job" />
                                            </div>
                                            <x-form.text name="employer" placeholder="Name of your employer."
                                                class="mt-5 col-span-2" value="{{ $experience->employer }}" />
                                            <x-form.text name="city" placeholder="Name of the city." class="mt-5"
                                                value="{{ $experience->City }}" />
                                            <x-form.text name="country" placeholder="Name of the country." class="mt-5"
                                                value="{{ $experience->country }}" />
                                            <div class="relative col-span-2">
                                                {{-- <textarea name="duty_id" cols="30" rows="7"
                                                    class="peer w-full border-2 rounded-md py-2 border-gray-300 focus:border-blue-600 px-2 focus:outline-none transition-colors placeholder-transparent focus:top-3 resize-none"
                                                    placeholder="" id="duty_id">{{ old('duty_id', $experience->pivot->duty_id ) }}</textarea> --}}
                                                <x-form.error name="duty_id" />
                                            </div>
                                        </div>
                                        <x-form.radio name="status" label="Currently working there." class="mt-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <x-form.button value="Next"
                                    class="inline-flex w-full justify-center bg-blue-500 hover:bg-red-500 sm:ml-3 sm:w-auto sm:mt-3" />
                                <x-button-link href="{{ URL::to('resume') }}"
                                    class="py-2 px-4 inline-flex w-full justify-center bg-white  ring-1 ring-inset ring-gray-300 sm:mt-3 sm:w-auto">
                                    Cancel</x-button-link>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endauth
</x-Layouts>
