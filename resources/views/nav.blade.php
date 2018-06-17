<div class="row">
    <div class="col-md-12">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
            <a href="/" type="button" class="btn btn-secondary btn-block">All</a>
            <a href="{{ route('available') }}" type="button" class="btn btn-secondary">Available</a>
            <a href="{{ route('notavailable') }}" type="button" class="btn btn-secondary">Not available</a>
            <a href="{{ route('morethan') }}" type="button" class="btn btn-secondary">More than 5</a>
        </div>
    </div>
</div>