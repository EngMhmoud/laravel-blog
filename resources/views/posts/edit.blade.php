@extends('main')
@section('title', '| Edit post')
@section('content')
	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}
		<div class="col-md-8">
			<div class="form-group">
				{{ Form::label('title', 'Title:')}}
				{{ Form::text('title', null, ['class' => 'form-control input-lg']) }}
			</div>
			<div class="form-group">
				{{ Form::label('slug', 'Slug:')}}
				{{ Form::text('slug', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('category_id', 'Category:')}}
				{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('body', 'Body:')}}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			</div>		
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created at:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Updated at:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<div class="row">
					<div class="col-md-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-md-6">
						{{ Form::submit('Sava Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
@endsection