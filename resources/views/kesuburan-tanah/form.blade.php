{{ csrf_field() }}
@if(isset($kesuburanTanah))
    {!! Form::hidden('id', $kesuburanTanah->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian_kesuburan_tanah', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Sangat Subur']) !!}
</div>
<div class="form-group">
    <label class="control-label">Luas (HA)</label>
        {!! Form::text('luas_ha', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 2,5']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_kesuburan_tanah', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Tadah Hujan']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>