<div class="d-flex align-items-center">
    @if (!empty($showRoute))
        <a href="{{ $showRoute }}" class="btn btn-xs btn-info me-1"><i class="fas fa-eye"></i></a>
    @endif

    @if (!empty($editRoute))
        <a href="{{ $editRoute }}" class="btn btn-xs btn-primary me-1"><i class="fas fa-edit"></i></a>
    @endif

    @if (!empty($deleteRoute))
        <a href="{{ $deleteRoute }}" class="btn btn-xs btn-danger item-delete"><i class="fas fa-trash"></i></a>
    @endif
</div>

<style>
    .btn-xs i {
        font-size: 8pt;
    }
    .btn-xs {
        padding: 0.25rem 0.5rem;
        font-size: 8pt;
        line-height: 1.5;
        border-radius: 0.2rem;
    }
</style>
