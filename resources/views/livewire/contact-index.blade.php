<div>
    {{-- Be like water. --}}
    <ul>
        {{-- @foreach ($data as $contact) --}}
        @foreach ($contacts as $contact)
            <li>{{ $contact['name'] }}</li>
        @endforeach
    </ul>
</div>
