@extends('layouts.app')
 
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $item->title }}
                </div>
                <div class="panel-body">
                    {{ $item->description }}

                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('item.index') }}"> Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection