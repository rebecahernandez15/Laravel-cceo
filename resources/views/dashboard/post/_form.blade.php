@csrf
<label for="title">Title</label>
<input type="text" name="title" value="{{ old('title', $post->title) }}">

<label for="slug">Slug</label>
<input type="text" name="slug" value="{{ old('slug', $post->slug) }}">

<label for="content">Content</label>
<textarea name="content">{{ old('content', $post->content) }}</textarea>

<label for="">Category</label>
<select name="category_id" id="category_id">
    @foreach($categories as $title => $id)
        <option value="{{$id}}" {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }}>{{$title}}</option>
    @endforeach
</select>

<label for="description">Description</label>
<textarea name="description">{{ old('description', $post->description) }}</textarea>

<label for="posted">Posted</label>
<select name="posted" id="posted">
    <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
    <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">Not</option>
</select>

<button type="submit">Send</button>
