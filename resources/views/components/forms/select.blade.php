@props(['name', 
'type' => 'text' , 
'value' => '', ])

<select name="{{ $name }}">
    {{ $slot }}
 
</select>