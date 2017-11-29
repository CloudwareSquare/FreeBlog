<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-1 control-label">{{ 'Título' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ $post->title or ''}}" required>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('subtitle') ? 'has-error' : ''}}">
    <label for="subtitle" class="col-md-1 control-label">{{ 'Subtítulo' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="subtitle" type="text" id="subtitle" value="{{ $post->subtitle or ''}}" required>
        {!! $errors->first('subtitle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-1 control-label">{{ 'Categoría' }}</label>
    <div class="col-md-10">
        <select name="category" class="form-control" id="category" required>
            @foreach (json_decode('{"technology":"Technology","industrial":"Industrial","computer":"Computer","science":"Science"}', true) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($post->category) && $post->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('post') ? 'has-error' : ''}}">
    <label for="post" class="col-md-1 control-label">{{ 'Post' }}</label>
    <div class="col-md-10">
        <textarea class="form-control" id="post" name="post" type="textarea" required>{{ $post->post or ''}}</textarea>
        {!! $errors->first('post', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-1 col-md-1">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Guardar' }}">
    </div>
</div>
