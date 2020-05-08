@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper">
    @if($dataTable)
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <div class="table-responsive" style="overflow: visible">
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
        @push('scripts')
            {!! $dataTable->scripts() !!}
        @endpush
    @endif
    <div class="clearfix"></div>
</div>
@endsection
