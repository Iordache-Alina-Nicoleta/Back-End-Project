<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
       <style>
        body{
            background: url(https://www.shethepeople.tv/wp-content/uploads/2017/03/Open-Book.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
       </style>
       <br/><br/>
        <div class = "container">
            <div class = "row">
                <div class = "col-12 text-center">
                    <div style= "color:#383522">
                        <h2 style= "text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white"><b>Library Management System</b></h2>
                    </div>
                </div>
            </div>
        <br /><br /><br/><br/><br/>
            <div class ="row">    
                <div class ="col-4 offset-1">
                    <div class="card-body">
                        <x-auth-session-status class="mb-3" :status="session('status')" />
                        <x-auth-validation-errors class="mb-3" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3 text-dark">
                                <x-label for="email" :value="__('Email')" />

                                <x-input style="background:#f5eee4" id="email" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                
                            <div class="mb-3 text-dark">
                                <x-label for="password" :value="__('Password')" />

                                <x-input style="background:#f5eee4" id="password" type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                            </div>

               
                            <div class="mb-3">
                                <div class="form-check text-black">
                                    <x-checkbox id="remember_me" name="remember" />

                                    <label class="form-check-label" for="remember_me">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="mb-0">
                                <div class="d-flex justify-content-end align-items-baseline">
                                        <a class="text-dark me-3" href="{{ route('register') }}">
                                            Register
                                        </a>
                                    
                                    <x-button style="background:#383522">
                                        {{ __('Log in') }}
                                    </x-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <div class ="col-2"></div>
            <div class ="col-4">
                <img src = "https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/themes/1072321/settings_images/q20lSu11RuTQTfsB2vCB_PBLLogo_med.png" width="400px" height="240px">
            </div>
            </div>
        </div>

    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>

