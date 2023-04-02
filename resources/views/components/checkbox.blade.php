@php($id = \Illuminate\Support\Str::uuid())

<div class="form-check">
    <input {{ $attributes->merge([
    'value' => '1'
]) }} class="form-check-input" id={{ $id }}>
    <label class="form-check-label" for="{{ $id }}">
        {{ $slot }}
    </label>
</div>
