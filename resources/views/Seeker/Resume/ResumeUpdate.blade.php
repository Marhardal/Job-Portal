<x-Layouts>
    @auth
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                <form action="{{ URL::to('resume/'.$resume->id.'/update') }}" method="post"  class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl md:max-w-2xl sm:mx-auto">
                    @method('patch')
                    @csrf
                    <div>
                        <div class="bg-white px-4 py-2 sm:p-3 sm:pb-2">
                            <div class="sm:flex sm:items-start">
                                <div class="text-center sm:mx-auto sm:mt-0 sm:text-left w-full">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900 mb-3" id="modal-title">
                                        Profesional Summary</h3>
                                    <x-form.text name="postal" placeholder="Enter your Postal Address" class="my-4" value="{{ $resume->postal }}"/>
                                    <x-form.text name="phone" placeholder="Enter your Second Phone Number" class="my-4" value="{{ $resume->phone }}"/>
                                    <x-form.text name="city" placeholder="Enter your current district" class="my-4" value="{{ $resume->city }}"/>
                                    <x-form.text name="country" placeholder="Enter country you are in." class="my-4" value="{{ $resume->country }}"/>
                                    <x-form.textarea name="summary" placeholder="Enter your professional summary." value="{{ $resume->summary }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <x-form.button value="Update" class="inline-flex w-full justify-center bg-green-600 hover:bg-green-400 sm:ml-3 sm:w-auto h-10 sm:mt-3"/>
                            <x-button-link href="{{ URL::to('resume') }}" class="py-2 px-4 inline-flex w-full justify-center bg-white  ring-1 ring-inset ring-gray-300 sm:mt-3 sm:w-auto">Cancel</x-button-link>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endauth
</x-Layouts>
