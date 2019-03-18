<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Textarea maxlength</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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

	<script src="{{ asset('js/jquery.min.js') }}" src="" type="text/javascript"></script>
	<script src="{{ asset('js/jQuery.maxlength.js') }}" src="" type="text/javascript"></script>
	<script>
	    $('.maxTextCountDown').maxlength();
	</script>
</body>
</html>