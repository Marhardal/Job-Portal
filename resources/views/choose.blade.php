<x-Customer-Layouts>
    @include('Layouts.Customer-Nav')
    <div class="mx-auto text-black justify-center items-center h-screen w-screen text-center">
        <h1 class="text-2xl font-bold">Let's Get you Started.</h1>
        <h3 class="mt-4 mb-6 text-xl font-semibold">Do you already an account.</h3>
        <a href="{{ URL::to('login') }}" class="text-white bg-blue-500 py-2 px-4 rounded-md">Login</a>
        <h3 class="mt-4 mb-6 text-xl font-semibold">Or not yet.</h3>
        <a href="{{ URL::to('register') }}" class="text-white bg-blue-500 py-2 px-4 rounded-md">Register</a>
        <h3 class="mt-4 mb-6 text-xl font-semibold">Or let's get you started with </h3>
    </div>
</x-Customer-Layouts>
