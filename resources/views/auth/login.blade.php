<x-auth-layout>

 
                <form class="theme-form" method="POST" action="{{ route('login') }}">
                    @csrf
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <div class="form-input position-relative">
                        <input class="form-control" id="password" class="block mt-1 w-full" type="password" name="password"
                        required autocomplete="current-password">
                        <div class="show-hide"><span class="show"></span></div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group mb-0">
                        <div class="checkbox p-0">
                        <input id="checkbox1" type="checkbox" name="remember">
                        <label class="text-muted" for="checkbox1" >Remember password</label>
                        </div><a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                        <div class="text-end mt-3">
                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                        </div>
                    </div>
                </form>
   
</x-auth-layout> 
