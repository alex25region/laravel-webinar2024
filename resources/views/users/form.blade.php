<form action="{{ $action }}" method="POST">
    @csrf @method($method)
    <div class="col-12">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="mb-3">
                    <label class="form-label mb-1" for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name)}}" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label mb-1" for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email)}}"
                           class="form-control" required>
                </div>
            </div>
        </div>
        @if(request()->routeIs('users.create'))
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label mb-1" for="password">Password</label>
                        <input type="password" id="password" name="password" value=""
                               class="form-control" required>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">
                    Сохранить
                </button>
                &nbsp;
                <a href="{{ route('users.index') }}" class="btn btn-danger">Отмена</a>
            </div>
        </div>

    </div>
</form>
