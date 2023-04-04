<div class="card-body border-bottom">
    <div class="d-flex justify-content-between">
        <div>
            {{ $slot }}
        </div>
        @isset($right)
            <div>
                <h4>
                    {{ $right }}
                </h4>
            </div>
        @endisset
    </div>
</div>
