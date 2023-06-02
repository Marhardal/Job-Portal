<x-Customer-Layouts>
        @include('Layouts.Customer-Nav')
        <section class="">
            <div class="max-w-md mx-auto justify-center items-center align-middle h-screen flex flex-col">
                <h1 class="text-lg text-center font-bold order-1">Welcome Back.</h1>
                <p class="text-base mt-6 text-center order-2">Please fill in the below fields to continue.</p>
                <form action="{{ URL::to('login') }}" method="post" class="w-full order-3 mt-5">
                    @csrf
                    <x-form.text name="username" placeholder="Enter your Username."/>
                    <x-form.text  name="password" type="password" placeholder="Enter your Password" class="mt-5"/>
                    <x-form.button value="Login" class="bg-blue-500 mt-5 mx-auto  text-center"/>
                </form>
            </div>
        </section>
</x-Customer-Layouts>
