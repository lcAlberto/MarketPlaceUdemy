<div class="form-group">
    <label for="name">Nome da Loja</label>
    <input
        type="text"
        id="name"
        name="name"
        class="form-control @error('name') is-invalid @enderror"
        value="{{old('name', $currentStore->name ?? '') }}">
    <sup class="text-danger"></sup>
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="description">Descrição</label>
    <input
        type="text"
        id="description"
        name="description"
        class="form-control @error('description') is-invalid @enderror"
        value="{{old('description', $currentStore->description ?? '') }}">
    @error('description')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="phone">Telefone</label>
    <input
        type="text"
        id="phone"
        name="phone"
        class="form-control @error('phone') is-invalid @enderror"
        value="{{old('phone', $currentStore->phone ?? '') }}">
    @error('phone')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input
        type="text"
        id="slug"
        name="slug"
        class="form-control @error('slug') is-invalid @enderror"
        value="{{old('slug', $currentStore->slug ?? '') }}">
    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="logo">Logo</label>
    <input
        type="text"
        id="logo"
        name="logo"
        class="form-control @error('logo') is-invalid @enderror"
        value="{{old('logo', $currentStore->logo ?? '') }}">
    @error('logo')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
