<x-layouts>
    @can('recruiter')
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                    <form action="{{ URL::to('vacancy') }}" method="post"
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl md:max-w-2xl sm:mx-auto">
                        @csrf
                        <div>
                            <div class="bg-white px-4 py-2 sm:p-3 sm:pb-2">
                                <div class="sm:flex sm:items-start">
                                    <div class="text-center sm:mx-auto sm:mt-0 sm:text-left w-full">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900 mb-3" id="modal-title">
                                            Create a Vacancy</h3>
                                        <div class="mb-3">
                                            <div class="">
                                                <label for="country"
                                                    class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Select
                                                    a country where the company is based</label>
                                                <select name="country" id="country"
                                                    class="w-full border-2 rounded-md border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
                                                    <option value="">Please Select the country you are in.</option>
                                                    @foreach ($countries->data as $item)
                                                        <option value="{{ $item['name'] }}" @selected(old('country') == $item['name'])>
                                                            {{ ucwords($item['name']) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <x-form.error name="country" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="">
                                                <label for="city"
                                                    class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Select
                                                    a city within the country.</label>
                                                <select name="city" id="city"
                                                    class="w-full border-2 rounded-md border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
                                                    <option value="">Please Select the city you are in.</option>
                                                    @foreach ($cities->data as $item)
                                                        <option value="{{ $item['name'] }}" @selected(old('city') == $item['name'])>
                                                            {{ $item['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <x-form.error name="city" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="">
                                                <label for="arrangement_id"
                                                    class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Select
                                                    a the arrengment type.</label>
                                                <select name="arrangement_id" id="city"
                                                    class="w-full border-2 rounded-md border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
                                                    <option value="">Please Select the work arrengement you are
                                                        seeking.</option>
                                                    @foreach ($arrangement as $item)
                                                        <option value="{{ $item->id }}" @selected(old('arrangement_id') == $item['id'])>
                                                            {{ $item->type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <x-form.error name="arrangement_id" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="">
                                                <label for="job_id"
                                                    class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Select
                                                    a job title you are seeking.</label>
                                                <select name="job_id" id="city" data-placeholder="Select a city..." data-allow-clear="false"
                                                title="Select city..."
                                                    class="selectpicker w-full border-2 rounded-md border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
                                                    <option value="">Please Select the job title you are seeking.
                                                    </option>
                                                    @foreach ($jobs as $item)
                                                        <option value="{{ $item->id }}" @selected(old('job_id') == $item['id'])>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <x-form.error name="job_id" />
                                        </div>
                                        <x-form.textarea name="description" placeholder=""/>
                                        {{-- <x-form.tinymce-editor name='description'/> --}}
                                        <x-form.date name="deactivated_at"
                                            placeholder="Enter the date this vacancy will be deleted."/>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <x-form.button
                                    class="mt-3 inline-flex w-full justify-center bg-blue-400 hover:bg-blue-500 sm:ml-3 sm:w-auto sm:mt-3">
                                    Next</x-form.button>
                                <x-button-link href="{{ URL::to('jobs') }}"
                                    class="mt-3 inline-flex w-full justify-center bg-white px-4 py-2 ring-1 ring-inset ring-gray-300 sm:mt-3 sm:w-auto">
                                    Cancel</x-button-link>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endcan
</x-layouts>
