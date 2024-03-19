<!-- Success Message -->
@if(session()->has('success'))
    <div class="message-success">
        {{ session()->get('success') }}
    </div>
@endif

<!-- Error Messages -->
@if($errors->any())
    <div class="message-error">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
