<x-Customer-Layouts>
        @include('Layouts.Customer-Nav')
        <section class="">
            <div class="max-w-md mx-auto justify-center items-center align-middle h-screen">
                <form action="" method="post" class="">
                    <x-form.input-area name="username" placeholder="Enter your Username." />
                    <x-form.input-area name="password" type="password" placeholder="Enter your Password" />
                    <x-form.button value="Login" />
                </form>
            </div>
        </section>
</x-Customer-Layouts>
