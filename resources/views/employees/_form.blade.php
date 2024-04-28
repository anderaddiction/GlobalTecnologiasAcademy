<div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
    <div class="col-md-6">
        <input type="text" class="form-control" id="last_name" name="last_name"
            value="{{ old('last_name', $employee->last_name) }}">
        <div class="pristine-error text-danger">
            {{ $errors->first('last_name') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    <div class="col-md-6">
        <input type="text" class="form-control" id="name" name="name"
            value="{{ old('name', $employee->name) }}">
        <div class="pristine-error text-danger">
            {{ $errors->first('name') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="other_name" class="col-md-4 col-form-label text-md-end">{{ __('Other Names') }}</label>
    <div class="col-md-6">
        <input type="text" class="form-control" id="other_name" name="other_name"
            value="{{ old('other_name', $employee->other_name) }}">
        <div class="pristine-error text-danger">
            {{ $errors->first('other_name') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
    <div class="col-md-6">
        <select type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
            <option value="">{{ __('Select an option') }}</option>
            <option value="0" {{ old('country', $employee->country) == '0' ? 'selected' : '' }}>
                {{ __('Colombia') }}</option>
            <option value="1" {{ old('country', $employee->country) == '1' ? 'selected' : '' }}s>
                {{ __('United States of America') }}</option>
        </select>
        <div class="pristine-error text-danger">
            {{ $errors->first('country') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="identification_type" class="col-md-4 col-form-label text-md-end">{{ __('Type of ID') }}</label>
    <div class="col-md-6">
        <select type="text" class="form-control" id="identification_type" name="identification_type">
            <option value="">{{ __('Select an option') }}</option>
            <option value="0"
                {{ old('identification_type', $employee->identification_type) == '0' ? 'selected' : '' }}>
                {{ __('Cédula de Ciudadanía') }}</option>
            <option value="1"
                {{ old('identification_type', $employee->identification_type) == '1' ? 'selected' : '' }}>
                {{ __('Cédula de Extranjería') }}</option>
            <option value="2"
                {{ old('identification_type', $employee->identification_type) == '2' ? 'selected' : '' }}>
                {{ __('Pasaporte') }}</option>
            <option value="3"
                {{ old('identification_type', $employee->identification_type) == '3' ? 'selected' : '' }}>
                {{ __('Permiso Especial') }}</option>
        </select>
        <div class="pristine-error text-danger">
            {{ $errors->first('identification_type') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="identification" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>
    <div class="col-md-6">
        <input type="text" class="form-control" id="identification" name="identification"
            value="{{ old('identification', $employee->identification) }}">
        <div class="pristine-error text-danger">
            {{ $errors->first('identification') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
    <div class="col-md-6">
        <input readonly="readonly" type="text" class="form-control" id="email" name="email"
            value="{{ old('email', $employee->email) }}" style="color: #787878;">
        <div class="pristine-error text-danger">
            {{ $errors->first('email') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="fecha_ingreso" class="col-md-4 col-form-label text-md-end">{{ __('Fecha Ingreso') }}</label>
    <div class="col-md-6">
        <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" placeholder="DD/MM/AAAA"
            value="{{ old('fecha_ingreso', $employee->fecha_ingreso) }}">
        <div class="pristine-error text-danger">
            {{ $errors->first('fecha_ingreso') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
    <div class="col-md-6">
        <input disabled type="text" class="form-control" id="status" name="status"
            value="{{ old('status', $employee->status) }}">
        <div class="pristine-error text-danger">
            {{ $errors->first('status') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="area" class="col-md-4 col-form-label text-md-end">{{ __('Area') }}</label>
    <div class="col-md-6">
        <select type="text" class="form-control" id="area" name="area" value="{{ old('area') }}">
            <option value="">{{ __('Select an option') }}</option>
            <option value="0" {{ old('area', $employee->area) == '0' ? 'selected' : '' }}>
                {{ __('Administración') }}</option>
            <option value="1" {{ old('area', $employee->area) == '1' ? 'selected' : '' }}>
                {{ __('Financiera') }}</option>
            <option value="2" {{ old('area', $employee->area) == '2' ? 'selected' : '' }}>
                {{ __('Compras') }}</option>
            <option value="3" {{ old('area', $employee->area) == '3' ? 'selected' : '' }}>
                {{ __('Infraestructura') }}</option>
            <option value="4" {{ old('area', $employee->area) == '4' ? 'selected' : '' }}>
                {{ __('Operación') }}</option>
            <option value="5" {{ old('area', $employee->area) == '5' ? 'selected' : '' }}>
                {{ __('Talento Humano') }}</option>
            <option value="6" {{ old('area', $employee->area) == '6' ? 'selected' : '' }}>
                {{ __('Servicios Varios') }}</option>
            <option value="7" {{ old('area', $employee->area) == '7' ? 'selected' : '' }}>
                {{ __('Otros') }}</option>
        </select>
        <div class="pristine-error text-danger">
            {{ $errors->first('area') }}</div>
    </div>
</div>

<div class="row mb-3">
    <label for="register_date" class="col-md-4 col-form-label text-md-end">{{ __('Register Date & Hour') }}</label>
    <div class="col-md-6">
        <input readonly="readonly" type="text" class="form-control" id="register_date" name="register_date"
            value="{{ old('register_date', $employee->register_date) }}" style="color: #787878;">
    </div>
</div>

<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary" id="save">{{ $btnText }}</button>
    </div>
</div>
