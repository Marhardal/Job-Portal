<x-Customer-Layouts>
    @include('Layouts.Customer-Nav')
    <section class="">
        <div class="flex items-center justify-center h-screen w-screen">
            <div class="max-w-lg border">
                <form action="" method="post" class="">
                    <div class="relative">
                        <input type="text" name="username" class="border-b focus:outline-blue-500"
                            id="">
                        <label for="" class="absolute left-0">Username</label>
                    </div>
                    {{-- <x-form.input-area name="username" placeholder="Enter your Username."/>
                <x-form.input-area name="password" type="password" placeholder="Enter your Password"/>
                <x-form.button value="Login" /> --}}
                </form>
            </div>
        </div>
    </section>
</x-Customer-Layouts>
