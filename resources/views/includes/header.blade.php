


@php
    switch(request()->segment(1)){
        case 'home':
            $title = 'Home';
            break;
        case 'tasks':
            $title = 'My Task';
            break;
        case 'create_task':
            $title = 'Create Task';
            break;
        case 'view_task':
            $taskNumber = request()->segment(2);
            $title = 'View Task: ' . $taskNumber;
            break;
    }
@endphp


@section('title', $title)

@section('content_header')
    {{-- <h1>{{ $title }}</h1> --}}

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                {{ $title }}

              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#" onclick="history.back()"><i class="fas fa-arrow-alt-circle-left text-dark"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="fas fa-home text-dark"></i></a></li>
                <li class="breadcrumb-item active">
                    {{ $title }}
                </li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
@stop
