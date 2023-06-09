<x-layouts>
    @auth
        <style>
            .top-100 {
                top: 100%
            }

            .bottom-100 {
                bottom: 100%
            }

            .max-h-select {
                max-height: 300px;
            }
        </style>
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                    <form action="{{ URL::to('resume/skill') }}" method="post"
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl md:max-w-2xl sm:mx-auto">
                        @csrf
                        <div>
                            <div class="bg-white px-4 py-2 sm:p-3 sm:pb-2">
                                <div class="sm:flex sm:items-start">
                                    <div class="text-center sm:mx-auto sm:mt-0 sm:text-left w-full">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900 mb-3" id="modal-title">
                                            Skills</h3>
                                        @if ($skills->count() > 0)
                                            <div class="mb-3">
                                                <div class="">
                                                    <label for="skill_id"
                                                        class="text-gray-500 text-sm focus:text-gray-500 focus:text-sm transition-all">Enter
                                                        the position you were in.</label>
                                                    <select choices-select="22" name="skill_id[]" id="skill_id" x-data="{ }" x-init="function() { choices($el) }"
                                                        class="w-full text-sm border-gray-400 rounded-md shadow-sm focus:border-blue-300 focus:ring-blue-200 focus:ring-opacity-50"
                                                        multiple>
                                                        @foreach ($skills as $item)
                                                            <option value="{{ $item->id }}">{{ ucwords($item->name) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <x-form.error name="skill_id" />
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="bg-gray-50 px-4 py-2 sm:flex sm:flex-row-reverse sm:px-6">
                                <x-form.button value="Next"
                                    class="inline-flex mt-3 justify-center bg-blue-400 hover:bg-blue-500  sm:ml-3 sm:mt-3">
                                    Done</x-form.button>
                                <x-button-link href="{{ URL::to('resume') }}"
                                    class="mt-3 inline-flex w-full justify-center bg-white px-4 py-2 ring-1 ring-inset ring-gray-300 sm:mt-3 sm:w-auto">
                                    Cancel</x-button-link>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endauth
</x-layouts>
