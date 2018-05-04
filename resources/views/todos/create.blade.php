@extends("layout.app")
@section('content')
      <h1>Create todo</h1>
<div class="form-group">
      {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}

      {{ Form::bsText('text') }}
      {{ Form::bsTextArea('body') }}
 	  {{ Form::bsText('due') }}

      {{ Form::submit('Insert!', ['class' => 'btn btn-success'])}}
      {!! Form::close() !!}
</div>
@endsection
