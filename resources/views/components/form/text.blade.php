<div class="form-group">
  {{form::label($nombre, null, ['class' => 'control-label'])}}
  {{form::text($nombre, $value, array_merge(['class' => 'form-control'], $attributes))}}
</div>
