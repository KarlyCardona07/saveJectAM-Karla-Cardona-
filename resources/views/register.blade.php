<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1>Sing up</h1>
    <form action="/register" method="post">
        @csrf

        <label for="">Name</label>
        <input type="text" name="name">
        @error('name')
        <span>{{ $message }}</span>
        @enderror

        <label form="">Email</label>
        <input type="text" text="email">
        @error('email')
        <span>{{ $message }}</span>
        @enderror

        <label for="">Password</label>
        <input type="password" name="password">
        @error('password')
        <span>{{ $message }}</span>
        @enderror

        <label for="">Birthday</label>
        <input type="date" name="birthday">
        @error('date')
        <span>{{ $message }}</span>
        @enderror

        <button type="submit">Create Account</button>

    </form>
</div>
