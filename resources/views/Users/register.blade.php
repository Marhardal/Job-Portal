<x-Customer-Layouts>
    @include('Layouts.Customer-Nav')
    <section class="container mt-10">
        <h1 class="mx-auto text-center text-xl text-bold">Create an account.</h1>
        <p class="mx-auto text-center text-lg max-w-2xl mt-4 mb-5">If you are a recruiter or recruiting team don't use this form for creating your account rather
            contact us using the contact form.</p>
        <div class="max-w-3xl mx-auto">
            <form action="{{ URL::to('register') }}" method="post" class="">
                @csrf
                <div class="grid grid-cols-2 gap-8 mx-auto">
                    <x-form.text name="first_name" placeholder="Enter First Name." />
                    <x-form.text name="surname" placeholder="Enter Surname." />
                    <x-form.date name="date_of_birth" placeholder="Enter your date of Birth" type="date" />
                    <div class="">
                        <label for="" class="pb-1 text-gray-500 text-md">Enter your Gender.</label>
                        <div class="grid grid-cols-3 my-3">
                            <x-form.radio name="gender" label="Male"/>
                            <x-form.radio name="gender" label="Female"/>
                        </div>
                        <x-form.error name="gender"/>
                    </div>
                    <div class="col-span-2">
                        <x-form.text name="email" placeholder="Enter your email address." type="email"/>
                    </div>
                    <x-form.text name="phone" type="tel" placeholder="Enter your Phone Number." />
                    <x-form.text name="username" placeholder="Enter your username." />
                    <x-form.text name="password" type="password" placeholder="Enter your Password Name." />
                    <x-form.text name="password_confirmation" type="password" placeholder="Confirm your password." />
                    <x-form.text name="type_id" name="1" placeholder="" class="hidden"/>
                    <div class="col-span-2 mx-auto">
                        <x-form.button value="Register" name="register" class="bg-blue-500 hover:bg-blue-400 transition-colors"/>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-Customer-Layouts>
