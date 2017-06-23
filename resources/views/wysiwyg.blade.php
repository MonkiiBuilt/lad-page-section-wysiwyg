<?php
/**
 * @author Jonathon Wallen
 * @date 23/6/17
 * @time 2:34 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */
?>

<div class="panel  panel__full">
    <div class="panel__inner">
        <div class="panel__row">
            <div class="panel__full">
                <h4>{{ $section->label }}</h4>
            </div>
            <div class="panel__full">
                <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.content') ? 'error' : '' }}">
                    {!! Form::textarea( 'sections[' . $section->id . '][data][content]', $section->data['content'], ['class' => 'ckeditor-oembed']) !!}
                    <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.content') }}</div>
                </fieldset>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent

    <script src="/vendor/laravel-administrator/js/build/vendor/ckeditor_4.6.2/ckeditor.js?v=7"></script>

    <script type="text/javascript">
        $(window).load(function() {
            CKEDITOR.replace('sections[{{ $section->id }}][data][content]');
        });
    </script>
@endsection
