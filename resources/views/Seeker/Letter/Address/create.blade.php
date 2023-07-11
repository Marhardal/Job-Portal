<x-layouts>
    @auth
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                <form action="{{ URL::to('letter/address/') }}" method="post"  class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl md:max-w-2xl sm:mx-auto">
                    @csrf
                    <div>
                        <div class="bg-white px-4 py-2 sm:p-3 sm:pb-2">
                            <div class="sm:flex sm:items-start">
                                <div class="text-center sm:mx-auto sm:mt-0 sm:text-left w-full">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900 mb-3" id="modal-title">
                                        Profesional Summary</h3>
                                    <x-form.text name="postal_code" placeholder="Enter your Postal Code" class="my-4"/>
                                    <x-form.text name="addressing" placeholder="Who are you Addressing." class="my-4"/>
                                    <div class="mb-3">
                                        <div class="">
                                            <label for="address_type_id"
                                                class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Select
                                                an address type.</label>
                                            <select name="address_type_id" id="type"
                                                class="w-full border-2 rounded-md border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
                                                <option value="">Please Select an address type.</option>
                                                @foreach ($type as $item)
                                                    <option value="{{ $item['id'] }}" @selected(old('id') == $item['id'])>
                                                        {{ ucwords($item['type']) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <x-form.error name="address_type_id" />
                                    </div>
                                    <div class="flex gap-2">
                                        <div class="mb-3 flex-auto">
                                            <div class="">
                                                <label for="district"
                                                    class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Select
                                                    a district where the company is based</label>
                                                <select name="city" id="city"
                                                    class="w-full border-2 rounded-md border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
                                                    <option value="">Please Select the city you are in.</option>
                                                    @foreach ($district->data as $item)
                                                        <option value="{{ $item['name'] }}" @selected(old('city') == $item['name'])>
                                                            {{ ucwords($item['name']) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <x-form.error name="city" />
                                        </div>
                                        <div class="mb-3 flex-auto">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <x-form.button value="Next" class="inline-flex w-full justify-center bg-red-600 hover:bg-red-500 sm:ml-3 sm:w-auto h-10 sm:mt-3">Next</x-form.button>
                            <x-button-link href="{{ URL::to('resume') }}" class="py-2 px-4 inline-flex w-full justify-center bg-white  ring-1 ring-inset ring-gray-300 sm:mt-3 sm:w-auto">Cancel</x-button-link>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endauth
</x-layouts>
