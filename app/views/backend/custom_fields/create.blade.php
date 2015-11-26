@extends('backend/layouts/default')
@section('content')

<?= Form::open(['url' => '/custom_fieldsets']) ?>
  Name: {{Form::text("name",Input::old('name'))}}<span class="alert-msg"><?= $errors->first('name'); ?></span><br />
  <input type='submit'>
</form>
<br><a href='/custom_fieldsets'>Back to Custom Fieldset List</a>
@stop
