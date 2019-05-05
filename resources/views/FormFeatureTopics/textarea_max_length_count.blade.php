@extends('layout.master')
@section('contents')
	<div class="container">
		<div class="card">
			<div class="card-header bg-primary text-light" style="padding: 2px 5px;">Text Limit plugin use</div>
				<div class="card-body">
			    {!! Form::open(array('url' => '','method' => 'post', 'id' => 'FormId','enctype'=>'multipart/form-data','files' => true, 'role'=>'form')) !!}
				<div class="form-group">
		            <div class="form-group">
		            	<div class="col-md-12">
		            		{!! Form::label('clause','Present Address Type Here: ') !!}
		            	</div>
		                <div class="col-md-12 maxTextCountDown">
		                    {!! Form::textarea('clause', '', ['class' => 'form-control input-md bigInputField required', 'size' =>'5x5','data-rule-maxlength'=>'1000','maxlength'=>'1000','required' => 'required']) !!}
		                </div>
		            </div>
			    </div>
			    {!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
@section('footer-script')

	<script src="{{ asset('js/jquery.min.js') }}" src="" type="text/javascript"></script>
	<script src="{{ asset('js/jQuery.maxlength.js') }}" src="" type="text/javascript"></script>
	<script>
	    $('.maxTextCountDown').maxlength();
	</script>
@endsection