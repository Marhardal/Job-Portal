<x-layouts>
    @auth
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                <form action="{{ URL::to('letter/') }}" method="post"  class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl md:max-w-2xl sm:mx-auto">
                    @csrf
                    <div>
                        <div class="bg-white px-4 py-2 sm:p-3 sm:pb-2">
                            <div class="sm:flex sm:items-start">
                                <div class="text-center sm:mx-auto sm:mt-0 sm:text-left w-full">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900 mb-3" id="modal-title">
                                        Profesional Summary</h3>
                                    <x-form.text name="salutation" placeholder="Who are you addressing" class="my-4"/>
                                    <x-form.text name="title" placeholder="Enter a title." class="my-4"/>
                                    <x-form.text name="closing_salutation" placeholder="Enter Closing salutation." class="my-4"/>
                                    <x-form.textarea name="introduction" placeholder="Enter an introduction." class="my-4"/>
                                    <x-form.textarea name="body" placeholder="Enter the body." class="my-4"/>
                                    <x-form.textarea name="conclusion" placeholder="Enter the conclusion." class="my-4"/>

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