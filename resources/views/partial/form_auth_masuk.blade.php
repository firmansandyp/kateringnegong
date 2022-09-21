@if (session()->has('daftarBerhasil'))
    <div class="alert alert-success alert-dismissable fade show">
        {{ session('daftarBerhasil') }}
        <button type="button" class="btn-close"></button>
    </div>
@endif

<h2>masuk</h2>
<form action="/auth/masuk" method="post">
    @csrf
    <label for="emailInput">Email: </label><br>
    <input type="text" id="emailInput" name="email" autofocus required><br>

    <label for="passwordInput">Password: </label><br>
    <input type="text" id="passwordInput" name="password" required></textarea><br>

    <input type="submit" value="Login">
</form>
