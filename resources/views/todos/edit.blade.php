@extends("layout.app")
@section('content')
      <h1>Edit todo</h1>
<div class="form-group">
      {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}

      {{ Form::bsText('text', $todo->text) }}
      {{ Form::bsTextArea('body', $todo->body) }}
 	  {{ Form::bsText('due', $todo->due) }}
	  {{ Form::hidden('_method', 'PUT') }}
      {{ Form::submit('Insert!', ['class' => 'btn btn-success'])}}
      {!! Form::close() !!}
</div>
@endsection
