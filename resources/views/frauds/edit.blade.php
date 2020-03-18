@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Frauds
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($frauds, ['route' => ['frauds.update', $frauds->id], 'method' => 'patch']) !!}

                        @include('frauds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection