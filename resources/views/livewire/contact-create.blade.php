<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <ul>
        @foreach ($data as $contact)
        <li>{{ $contact->name }}</li>
        @endforeach
    </ul>
</div>
