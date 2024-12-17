<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3>{{ $title }}</h3>
            </div>
            <div class="col-12 col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="home-item" href="{{ $homeUrl }}">
                            <i data-feather="home"></i>
                        </a>
                    </li>
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if ($loop->last)
                            <li class="breadcrumb-item active">{{ $breadcrumb['label'] }}</li>
                        @else
                            <li class="breadcrumb-item">
                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
