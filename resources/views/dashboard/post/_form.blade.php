@csrf
<label for="title">Title</label>
<input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">

<label for="slug">Slug</label>
<input type="text" class="form-control" name="slug" value="{{ old('slug', $post->slug) }}">

<label for="content">Content</label>
<textarea class="form-control" name="content">{{ old('content', $post->content) }}</textarea>

<label for="category_id">Category</label>
<select class="form-control" name="category_id" id="category_id">
    @foreach($categories as $title => $id)
        <option value="{{$id}}" {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }}>{{$title}}</option>
    @endforeach
</select>

<label for="description">Description</label>
<textarea class="form-control" name="description">{{ old('description', $post->description) }}</textarea>

<label for="posted">Posted</label>
<select class="form-control" name="posted" id="posted">
    <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
    <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">Not</option>
</select>

@if(isset($task) && $task == 'edit')
    <label for="image">Image</label>
    <input type="file" name="image">
@endif

<button type="submit" class="btn btn-success mt-3">Send</button>
