@if (count($projects))
    @foreach ($projects as $project)

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-image">
                    <a href="{{ $project->link() }}">
                        <img src="{{ $project->img }}"
                             alt="{{ $project->name }}">
                    </a>
                </div>
                <div class="card-body">
                    <a href="{{ $project->link() }}">
                        <h4 class="card-title">{{ $project->name }}</h4>
                    </a>
                    <p class="card-description">
                        {{ $project->summary }}
                    </p>
                    <div class="card-footer">
                        <span>{{ $project->user->name }}</span>
                    </div>
                </div>
            </div> <!-- end card -->
        </div>

    @endforeach
@else
    暂无数据
@endif