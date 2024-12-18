<div class="form-group">
    <lable for="title">Title</lable> 
    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', optional($post ?? null)->title) }}">
</div>
@error("title")
    <div class="alert alert-danger"> {{ $message }}</div>
@enderror
<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="content" class="form-control"> {{ old('content', optional($post ?? null)->content) }}</textarea>
</div>
@if($errors->any())
<div class="mb-3">
    <ul class="div-group">
        @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-danger"> {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
