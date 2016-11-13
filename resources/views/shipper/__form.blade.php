<div class="form-group">
				{!!Form::label('name') !!}
				{!!Form::text('name', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('article') !!}
				{!!Form::text('article', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('city') !!}
				{!!Form::text('city', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('phone') !!}
				{!!Form::text('phone', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('contactPerson') !!}
				{!!Form::text('contactPerson', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('site_url') !!}
				{!!Form::text('site_url', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('email') !!}
				{!!Form::text('email', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('payment_method') !!}
				{!!Form::text('payment_method', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('access_into') !!}
				{!!Form::text('access_into', null, ['class'=>'form-control']) !!}
			</div>
			<div>
				{!!Form::label('currency') !!}
				{!!Form::text('currency', null, ['class'=>'form-control']) !!}
			</div class="form-group">
			<div>
				{!!Form::label('date_last_import') !!}
				{!!Form::input('date','date_last_import',date('Y-m-d'), ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('status') !!}
				{!!Form::checkbox('status', null, false) !!}
			</div>
			<div class="form-group">
				{!!Form::submit('create', ['class'=>'btn btn-info']) !!}
			</div>