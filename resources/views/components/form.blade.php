@props(['method' => 'GET'])
<form {{ $attributes }} method="{{ strtoupper($method) }}">
    @csrf
    {{ $slot }}
</form>
