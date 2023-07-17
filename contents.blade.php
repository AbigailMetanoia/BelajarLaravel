<div class="container py-5">
    @foreach ($articles as $article)
        <h5>{{ $article->title }}</h5>
        <p>{{ $article->body }}</p>
    @endforeach
    @if ($count < $total_articles)
        <button class="btn btn-primary" wire:click="loadmore">Load More</button>
    @endif
        <span wire:loading>Loading...</span>
</div>
