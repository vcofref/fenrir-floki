{{-- resources/views/excel/form.blade.php --}}
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
    <h3>Cargar archivo Excel</h3>

    @if(session('ok'))
        <div class="alert alert-success">{{ session('ok') }}</div>
    @endif

    <form action="{{ route('excel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Seleccione archivo (.xlsx)</label>
            <input type="file" name="archivo" class="form-control" required>
            @error('archivo') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button class="btn btn-primary" type="submit">Cargar</button>
    </form>
</div>
{{-- @endsection --}}
