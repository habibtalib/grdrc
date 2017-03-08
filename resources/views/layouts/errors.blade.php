@if (count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach ($error->all as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif