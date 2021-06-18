<div class="col-6 float-left">
    <div class="form-group">
        <label for="name">Nome</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{$product->name ?? old('name' ?? '') }}">
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
            value="{{old('description', $product->description ?? '') }}">
        @error('description')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Corpo</label>
        <input
            type="text"
            id="body"
            name="body"
            class="form-control @error('body') is-invalid @enderror"
            value="{{old('body', $product->body ?? '') }}">
        @error('body')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
</div>
<div class="col-6 float-right">
    <div class="form-group">
        <label for="price">Preço</label>
        <input
            type="text"
            id="price"
            name="price"
            class="form-control @error('price') is-invalid @enderror"
            value="{{old('price', $product->price ?? '') }}">
        @error('price')
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
            value="{{old('slug', $product->slug ?? '') }}">
        @error('body')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="thumbnail">Imagem</label>
        <input
            type="text"
            id="thumbnail"
            name="thumbnail"
            class="form-control @error('thumbnail') is-invalid @enderror"
            value="{{old('thumbnail', $product->thumbnail ?? '') }}">
        @error('thumbnail')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="store_id">Loja</label>
        <select id="store_id" name="store_id" class="form-control @error('store_id') is-invalid @enderror">
            <option value="" selected>Selecione</option>
            @foreach($stores as $store)
                <option value="{{$store->id}}" {{old('store_id') ? 'selected' : '' }}>
                    {{'[ ' . $store->id . ' ]' . ' - ' . $store->name}}
                </option>
            @endforeach
        </select>
    </div>
    @error('store_id')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
