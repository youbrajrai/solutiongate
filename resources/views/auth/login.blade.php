<x-guest>
    <div class="container">
        <div class="row">
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="text-center">Log in</h2>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                               placeholder="jhon@gmail.com" name="email" value="{{old('email')}}" required="required">
                        @error('email')
                        <span class="text-danger" role="alert">
                            <p>{{ $message }}</p>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                               required="required">
                        @error('password')
                        <span class="text-danger" role="alert">
                            <p>{{ $message }}</p>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                    <div class="clearfix">
                        <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                        <a href="#" class="float-right">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest>
