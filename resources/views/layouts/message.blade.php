@section('styles')
    <style>
        .success-message{
            color: green;
            font-size: 1.5rem;
        }
        .error-message{
            color: red;
            font-size: 1.5rem;
        }
    </style>
@endsection
@section('message')
    @if (session()->has('success'))
        <p class="success-message">{{ session('success') }}</p>
    @elseif (session()->has('error'))
        <p class="error-message">{{ session('error') }}</p>
    @endif
@endsection