<x-layout title="Register user">

    <form action="/register" method="POST" class="max-w-md mx-auto">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Register</legend>
            <label class="label">Name</label>
            <input name="name" name="name" type="text" class="input" placeholder="Name" />
            <x-form.error name="name" />
            <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" />
            <x-form.error name="email" />
            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" />
            <x-form.error name="password" />
            <button type="submit" class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>

</x-layout>
