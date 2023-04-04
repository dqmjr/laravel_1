<div>
    @isset($link)
        <div class="mb-2">
            {{ $link }}
        </div>
    @endisset

    <h2 class="mb-5">
        {{ $slot }}
    </h2>
</div>
