<div>
    @isset($link)
        <div class="mb-2">
            {{ $link }}
        </div>
    @endisset

    <div class="d-flex justify-content-between">
        <div>
            <h2 class="mb-4 pb-2 border-bottom">
                {{ $slot }}
            </h2>
        </div>
        @isset($right)
            <div>
                {{ $right }}
            </div>
        @endisset
    </div>

</div>
