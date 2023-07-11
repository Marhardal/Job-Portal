<x-layouts>
    <div class="max-w-3xl p-4 mx-auto ">
        @foreach ($letters as $letter)
            <div class="flex flex-col gap-y-2">
                <div class="flex-col flex items-end text-start">
                    <div class="text-start">
                        <p>{{ $letter->user->first_name . ' ' . $letter->user->surname }}</p>
                        <p>{{ $letter->user->address->postal_code }}</p>
                        <p>{{ $letter->user->address->city }}</p>
                        <p>{{ $letter->user->address->country }}</p>
                        <p>{{ $letter->user->phone }}</p>
                        <p>{{ $letter->user->email }}</p>
                    </div>
                </div>
                <div class="flex-col flex items-start text-start">
                    <p>{{ $letter->user->first_name . ' ' . $letter->user->surname }}</p>
                    <p>{{ $letter->user->address->postal_code }}</p>
                    <p>{{ $letter->user->address->city }}</p>
                    <p>{{ $letter->user->address->country }}</p>
                </div>
                <div class="flex-col">
                    <p>{{ now()->todatestring() }}</p>
                </div>
                <div class="flex-col">
                    <p>Dear {{ $letter->salutation }},</p>
                </div>
                <div class="flex-col">
                    <h3>{{ $letter->title }}</h3>
                </div>
                <div class="flex-col">
                    <p>{{ $letter->introduction }}</p>
                </div>
                <div class="flex-col">
                    <p>{{ $letter->body }}</p>
                </div>
                <div class="flex-col">
                    <p>{{ $letter->conclusion }}</p>
                </div>
                <div class="flex-col">
                    <p>{{ $letter->closing_salutation }}</p>
                </div>
                <div class="flex-col">
                    <p>{{ $letter->user->first_name . ' ' . $letter->user->surname }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layouts>
