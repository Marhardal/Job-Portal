<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('../../../css/app.css') }}"> --}}
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-wrap w-full p-4">
        @foreach ($resumes as $resume)
            <div class="flex-1">
                <div class="text-center mx-auto">
                    <h3 class="my-3 text-2xl font-semibold w-full">
                        {{ auth()->user()->first_name . ' ' . auth()->user()->surname }}
                    </h3>
                    <div class="text-lg font-semibold gap-4 flex justify-center">
                        <h5>{{ $resume->district . ', ' . $resume->country }}</h5>
                        <h5>{{ auth()->user()->phone }}</h5>
                        <h5>{{ auth()->user()->email }}</h5>
                    </div>
                </div>
                <div class="flex w-full text-base my-2">
                    <h3 class="text-lg font-semibold flex-auto">Profesional Summary</h3>
                </div>
                <hr class="">
                <p class="my-2 text-base">{!! $resume->summary !!}</p>
                <div class="flex w-full text-base my-2">
                    <h3 class="text-lg font-semibold flex-auto">Work History</h3>
                </div>
                <hr>
                <div class="grid grid-cols-4 gap-5">
                    @foreach ($resume->experience as $item1)
                        <div class="col-span-1">
                            <p class="text-base my-2">{{ $item1->start_date }} to
                                {{ $item1->leave_date }}</p>
                        </div>
                        <div class="col-span-3">
                            <p class="text-base my-2">{{ $item1->job->name }}</p>
                            <p class="text-base my-2 cols-span-2">
                                {{ $item1->employer . ' , ' . $item1->City . ' ' . $item1->country }}
                            </p>
                            <ul class="list-disc ml-4">
                                @if ($item1->duties->count() > 0)
                                    @foreach ($item1->duties as $item)
                                        <li class="my-1.5">
                                            {{ $item->name }}
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            {{-- @endforeach --}}
                        </div>
                    @endforeach
                </div>
                <div class="flex w-full text-base my-2">
                    <h3 class="text-lg font-semibold flex-auto">Skills</h3>

                </div>
                <hr>
                @if ($resume->skill != '')
                    <ul
                        class="mx-auto grid max-w-6xl  grid-cols-1 gap-1 p-1 sm:grid-cols-2 md:grid-cols-5 lg:grid-cols-5">
                        @foreach ($resume->skill as $item)
                            <div class="text-base p-2 rounded text-black w-full bg-slate-400">
                                <li><span>{{ $item->name }}</span></li>
                            </div>
                        @endforeach
                    </ul>
                @endif
                <div class="flex w-full text-base my-2 pt-4">
                    <h3 class="text-lg font-semibold flex-auto">Education</h3>
                </div>
                <hr>
                @if ($resume->qualification != '')
                    <div class="gap-5 my-2 w-full grid grid-cols-3">
                        @foreach ($resume->qualification as $item)
                            <div class="">
                                <div class="col-span-1">
                                    <div class="text-base">
                                        <span>{{ $item->pivot->start_date . ' to ' }}</span>
                                        <span>{{ $item->pivot->graduation_date }}</span>
                                    </div>
                                    <br>
                                    <h3 class="text-base font-semibold">Institution</h3>
                                    <p class="text-base">{{ $item->pivot->school }}</p>
                                </div>
                                <div class="col-span-2">
                                    <div class="flex">
                                        <p class="text-base flex-auto">
                                            {{ $item->name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="flex w-full text-base my-2 pt-4">
                    <h3 class="text-lg font-semibold flex-auto">Refarrals</h3>
                </div>
                <hr>
                <div class="flex flex-row gap-8">
                    @if ($resume->referral->count() > 0)
                        @foreach ($resume->referral as $item)
                            <div class="max-w-sm rounded-sm overflow-hidden">
                                <div class="text-base flex flex-col">
                                    <span>{{ $item->first_name . ' ' . $item->Surname }}</span>
                                    <span>{{ $item->job_title }}</span>
                                    <span>{{ $item->employer }}</span>
                                    <span>{{ $item->district . ', ' . $item->country }}</span>
                                    <span>Phone: {{ $item->phone_number }}</span>
                                    <span>Email: {{ $item->email }}</span>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="trxt-base">Please Insert Referrals</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
