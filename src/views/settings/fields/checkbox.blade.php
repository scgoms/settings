<div class="flex flex-col py-2">
    <label class="font-semibold text-grey-darker text-sm pb-1" for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <input type="{{ $field['type'] }}"
           name="{{ $field['name'] }}"
           {{ \setting($field['name']) == 1 ? 'checked' : '' }}
           class="bg-grey-lighter rounded p-2 {{ array_get( $field, 'class') }}"
           id="{{ $field['name'] }}"
    >
</div>

@if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
