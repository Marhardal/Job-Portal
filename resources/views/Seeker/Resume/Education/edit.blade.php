<x-Layouts>
    @auth
<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
            <form action="{{ URL::to('resume/education/' . $education->id ) }}" method="post"  class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl md:max-w-2xl sm:mx-auto">
                @method('patch')
                @csrf
                <div>
                    <div class="bg-white px-4 py-2 sm:p-3 sm:pb-2">
                        <div class="sm:flex sm:items-start">
                            <div class="text-center sm:mx-auto sm:mt-0 sm:text-left w-full">
                                <h3 class="text-base font-semibold leading-6 text-gray-900 mb-3" id="modal-title">
                                Education BackGround</h3>
                                @if ($qualification->count() > 0)
                                <div class="mb-3">
                                    <div class="">
                                        <label for="qualification_id" class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Select The Qualification Name.</label>
                                        <select name="qualification_id" class="w-full border-2 rounded-md border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
                                            @foreach ($qualification as $item)
                                                <option value="{{ $item->id }}" @selected($education->qualification_id==$item->id)>{{ ucwords($item->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <x-form.error name="job"/>
                                </div>
                                @endif
                                <x-form.text name="school" placeholder="Enter The Name of the school You Attended." value="{{ $education->school }}"/>
                                <x-form.date name="start_date" type="month" placeholder="Enter the date you started schooling." value="{{ $education->start_date }}"/>
                                <x-form.date name="graduation_date" type="month" placeholder="Enter the date you graduated from the school." value="{{ $education->graduation_date }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <x-form.button class="mt-3 inline-flex w-full justify-center bg-green-600 hover:bg-green-500 sm:ml-3 sm:w-auto sm:mt-3">Update</x-form.button>
                        <x-button-link href="{{ URL::to('resume') }}" class="mt-3 inline-flex w-full justify-center bg-white px-4 py-2 ring-1 ring-inset ring-gray-300 sm:mt-3 sm:w-auto">Cancel</x-button-link>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endauth
</x-Layouts>
