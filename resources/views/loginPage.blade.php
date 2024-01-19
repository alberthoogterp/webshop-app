@extends("layouts.shoplayout")

@section("content")
    <div class="w3-container" style="display:flex; justify-content: center; align-items:center; text-align:center; height:100vh; width:100vw" >
        <div id="loginform" class="w3-container w3-border">
            <div>
                <h3>Login Page</h3>
            </div>
            <div class="w3-container">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <input type="submit" value="Login" class="w3-button w3-border">
                </form>
                <button class="w3-button" onmousedown="replaceLoginForm()">Create account</button>
            </div>
            @if ($errors->has('login'))
                <div class="loginfailure"><strong>{{ $errors->first('login') }}</strong></div>
            @endif
        </div>
        <div id="accountcreationform" class="w3-container w3-border" style="display: none;">
            <div>
                <p>New Account</p>
            </div>
            <div class="w3-container">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Username"><br>
                    <input type="text" name="email" placeholder="E-mail"><br>
                    <input type="text" name="password" placeholder="Password"><br>
                    <input type="text" name="passwordconfirm" placeholder="Password"><br>
                    <input type="submit" value="Create" class="w3-button w3-border">
                </form>
            </div>
        </div>
    </div>
@endsection
<script>
    function replaceLoginform(){
        console.log("hallo");
        document.getElementById("loginform").style.display = "none";
        document.getElementById("accountcreationform").style.display = "block";
    }
</script>
