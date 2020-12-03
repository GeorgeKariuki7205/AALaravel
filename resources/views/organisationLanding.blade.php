@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="text-align: center">All Organisations.</h3>
    <div style="text-align: right">
        
        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" type="button"> <i class="fa fa-plus"></i> Add Organisation.</button>               
</div>

<div role="dialog" tabindex="-1" id="exampleModal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p>The content of your modal.</p>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
        </div>
    </div>
</div>        
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This should be a start.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
