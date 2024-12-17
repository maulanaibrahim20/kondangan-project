@extends('auth.index')
@section('login-content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="../assets/images/login/1.jpg" alt="looginpage">
            </div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                    <form class="theme-form login-form" method="post" action="{{ asset('/register') }}">
                        @csrf
                        <h4>Create your account</h4>
                        <h6>Enter your personal details to create account</h6>
                        <div class="form-group">
                            <label>Your Name</label>
                            <div class="small-group">
                                <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                                    <input class="form-control" type="text" required placeholder="First Name"
                                        name="first_name" maxlength="50">
                                </div>
                                <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                                    <input class="form-control" type="text" required placeholder="Last Name"
                                        name="last_name" maxlength="50">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                                <input class="form-control" type="text" required name="username" placeholder="Ex. asep24"
                                    maxlength="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input class="form-control" type="password" name="password" required placeholder="*********"
                                    maxlength="255">
                                <div class="show-hide"><span class="show"> </span></div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox" required name="acception">
                                <label class="text-muted" for="checkbox1">Agree with <span>Privacy Policy
                                    </span></label>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                        </div>
                        <p>Already have an account?<a class="ms-2" href="{{ url('/login') }}">Sign in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(function() {
            $("form").on("submit", function(e) {
                e.preventDefault()

                $.ajax({
                    url: $(this).attr("action"),
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.code == "000") {
                            window.location.href = "/login"
                        } else {
                            alert(response.messages)
                        }
                    },
                    error: function(error) {
                        alert("Something went wrong!")
                    }
                })
            })
        })
    </script>
@endpush
