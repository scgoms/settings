@extends('layouts.master')
@section('content')
<div>
    <form method="post" action="{{ route('settings.store') }}" role="form">
        {!! csrf_field() !!}
        @if(count(config('setting_fields', [])) )
            @foreach(config('setting_fields') as $section => $fields)
                <h1>{{ $fields['title'] }}</h1>
                <p>
                    {{ $fields['desc'] }}
                </p>
                @foreach($fields['elements'] as $field)
                    @includeIf('admin.settings.fields.' . $field['type'] )
                @endforeach
            <!-- end panel for {{ $fields['title'] }} -->
            @endforeach
        @endif
        <button class="bg-blue rounded my-1 p-2 font-semibold w-full text-grey-light">
        Save Settings
        </button>
    </form>
</div>
@endsection
