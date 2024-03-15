<x-layout>
    <!-- Well begun is half done. - Aristotle -->
    <h1 class="/login">Sign up</h1>


    <form action="/login"method="POST">

        @csrf
        <div>
            <x-input name="email" titulo='Email' tipo="text"/>
        </div>

        <div>
            <x-input name='password' titulo='Password' tipo="password"/>
        </div>

            <button type="submit">Log In</button></form>

    </form>
</x-layout>
