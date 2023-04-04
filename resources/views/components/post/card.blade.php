<a href="{{ route('blog.show', $post->id) }}">
    <h2 class="h6">
        {{ $post->title }}
    </h2>
</a>
<div class="small text-muted">
    {{ now()->format('d.m.Y H:i:s') }}
</div>
