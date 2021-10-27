@if ($errors->any())
    <div class="text-warning text-center margin-top-15">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
