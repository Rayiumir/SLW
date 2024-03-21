<x-AuthLayout>
    <div class="col-md-5 offset-md-3">
        <div class="card rounded-4 mt-5">
            <div class="card-body">
                <div class="text-center mb-4">
                    <i class="fa-duotone fa-user fa-5x"></i>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="mb-2">ایمیل</label>
                        <input id="email" class="form-control rounded-5" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="mb-2">رمز عبور</label>
                        <input id="password" class="form-control rounded-5"
                               type="password"
                               name="password"
                               required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">مرا به خاطر بسپار</label>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-sign-in"></i> ورود </button>
                </form>
            </div>
        </div>
    </div>
</x-AuthLayout>
