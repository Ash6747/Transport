<div class="d-flex flex-row align-items-center mb-4">
    {!!$icon!!}
    <div data-mdb-input-init class="form-outline flex-fill mb-0">
        <input type="{{$type}}" name="{{$name}}" id="form3Example4cd" class="form-control" value="{{old($value)}}"/>
        <label class="form-label" for="form3Example4cd">{{$label}}</label>
        <span class="text-danger message-text">
            @error($name)
                {{$message}}
            @enderror
        </span>
    </div>
</div>