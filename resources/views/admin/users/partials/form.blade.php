@csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $user->name ?? '') }}">
    @error('name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email', $user->email ?? '') }}">
    @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>

@isset($create)
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Password Confirm</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
@endisset

<div class="mb-3">
    @foreach ($roles as $role)
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id }}" id="{{ $role->name }}"
            @isset($user) @if (in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
            <label for="{{ $role->name }}" class="form-check-label">{{ $role->name }}</label>
        </div>
        {{-- <div class="form-check">
            <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id }}" id="{{ $role->name }}" {{ (is_array(old('role')) && in_array($role->id, old('role'))) ? 'checked' : '' }}>
            <label for="{{ $role->name }}" class="form-check-label">{{ $role->name }}</label>
        </div> --}}
    @endforeach

    {{-- <div class="form-check"> --}}
        {{-- <label for="Admin" class="form-check-inline">
            <input type="checkbox" class="form-check-input" name="roles[]" value="1"
            @if (is_array(old('roles')) && in_array(1, old('roles'))) checked @endif>
            Admin
        </label> --}}
        {{-- <label for="Admin" class="form-check-inline">
            <input type="checkbox" class="form-check-input" name="roles[]" value="2"
            @if (old('roles', $user->roles)) checked @endif>
            Notary
        </label>
        <label for="Admin" class="form-check-inline">
            <input type="checkbox" class="form-check-input" name="roles[]" value="3"
            @if (old('roles', $user->roles)) checked @endif>
            Employee
        </label> --}}
        {{-- {{ (is_array(old("roles", $user->roles ?? '')) and in_array(1, $user->roles->pluck('id')->toArray())) ? "checked" : "" }}>  --}}
        {{-- <label for="Admin" class="form-check-inline">
            <input type="checkbox" class="form-check-input" name="roles[]" value="1" @isset($user) @if (in_array(1, $user->roles->pluck('id')->toArray())) checked @endif @endisset> Admin
        </label>
        <label for="Admin" class="form-check-inline">
            <input type="checkbox" class="form-check-input" name="roles[]" value="1" @isset($user) @if (in_array(2, $user->roles->pluck('id')->toArray())) checked @endif @endisset> Notary
        </label>
        <label for="Admin" class="form-check-inline">
            <input type="checkbox" class="form-check-input" name="roles[]" value="1" @isset($user) @if (in_array(3, $user->roles->pluck('id')->toArray())) checked @endif @endisset> Employee
        </label> --}}
        {{-- </div> --}}
    {{-- <div class="form-check">
        <input type="checkbox" class="form-check-input" name="roles[]" value="2" id="Notary"
        {{ (is_array(old("roles")) && in_array(2, old("roles"))) ? " checked" : "" }}>
        <label for="Notary" class="form-check-label">Notary</label>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="roles[]" value="3" id="Employee"
        {{ (is_array(old("roles")) && in_array(3, old("roles"))) ? " checked" : "" }}>
        <label for="Employee" class="form-check-label">Employee</label>
    </div> --}}
</div>



@if (isset($create))
    <button type="submit" class="btn btn-primary">Create</button>
@else
    <button type="submit" class="btn btn-primary">Edit</button>
@endif



