@props(['name', 
'type' => 'text' , 
'value' => '', ])

<label for="">{{ $name }}</label>
<input type="{{ $type }}" name="{{ $name }}" value="{{ old($name , $value) }}">
@error( $name )
<span style="display: block; color: red;">{{ $message }}</span>
@enderror