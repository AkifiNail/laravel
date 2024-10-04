@props(['name', "value" => null, 'options' => []])

<span>
    @foreach ($options as $option_value => $option)
    <input type="checkbox" name="{{ $name }}[]" value="{{ $option_value }}" @if (in_array($option_value, old($name, $value ?? []))) checked @endif>{{ $option }}</input>
    @endforeach
</span>

@error($name)
    <span style="display: block; color: red;">{{ $message }}</span>
@enderror