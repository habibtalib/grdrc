@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Sign In</h1>

        <form method="POST" action="/login">
            {{csrf_field()}}


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

                @include('layouts.errors')

        </form>


    </div><!-- /.blog-main -->
@endsection
