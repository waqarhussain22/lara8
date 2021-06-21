<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $story->title) }}">
    @error('title')
    <span class="invalid-feedback" role="alert">
                               <strong> {{ $message }}</strong>
                           </span>
    @enderror
</div>
<div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror"> {{ old('body', $story->body) }}</textarea>
    @error('body')
    <span class="invalid-feedback" role="alert">
                               <strong> {{ $message }}</strong>
                           </span>
    @enderror
</div>
<div class="form-group">
    <label for="type"> Type</label>
    <select name="type" id="" class="form-control @error('type') is-invalid @enderror">
        <option value="">--Select--</option>
        <option value="short" {{ 'short' == old('type',$story->type)? 'selected' : '' }} >short</option>
        <option value="long" {{ 'long' == old('type',$story->type)? 'selected' : '' }}>long</option>
    </select>
    @error('type')
    <span class="invalid-feedback" role="alert">
                               <strong> {{ $message }}</strong>
                           </span>
    @enderror
</div>
<div class="form-group">
    <label for="status">Status</label>
    <div class="form-check @error('status') is-invalid @enderror">
        <input type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status" value="1" {{ '1' == old('status',$story->status)? 'checked' : '' }}>
        <label for="active" class="form-check-label">Yes</label>
    </div>
    <div class="form-check @error('status') is-invalid @enderror">
        <input type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status" value="0" {{ '0' == old('status', $story->status)? 'checked' : '' }}>
        <label for="active" class="form-check-label">No</label>
    </div>
    @error('status')
    <span class="invalid-feedback" role="alert">
                               <strong> {{ $message }}</strong>
                           </span>
    @enderror

</div>
