<x-Layouts>
    @include('Layouts.seeker')
    <section class="">
        <div class="max-w-md mx-auto justify-center items-center align-middle h-screen flex flex-col">
            <h1 class="text-lg text-center font-bold order-1">Register your organisation.</h1>
            <p class="text-base mt-6 text-center order-2">Please fill in the below fields to continue.</p>
            <form action="{{ URL::to('organisation/register') }}" method="post" class="w-full order-3 mt-5">
                @csrf
                <x-form.text name="name" placeholder="Enter the organisation name."/>
                <x-form.text  name="email" type="email" placeholder="Enter the organisation email address." class="mt-5"/>
                <x-form.textarea name="about" placeholder="What does the organisation do." class="mt-5"/>
                <x-form.text  name="city" placeholder="Where is the organisation located." class="mt-5"/>
                <x-form.text  name="country" placeholder="In which country is it." class="mt-5"/>
                <x-form.text  name="link" placeholder="Does your organisation have a website." class="mt-5"/>
                <x-form.text  name="post_address" placeholder="enter your organisation postal address." class="mt-5"/>
                <x-form.button value="Login" class="bg-blue-500 mt-5 mx-auto  text-center">Register Organisation</x-form.button>
            </form>
        </div>
    </section>
</x-Layouts>
