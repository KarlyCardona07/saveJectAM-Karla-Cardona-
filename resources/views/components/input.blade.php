    @props(['titulo','tipo','name'])

        <label for="">{{$titulo}} </label>
        <input name="email" type={{$tipo}}
        class="border">
        @error($name)
        <p>{{$message}}</p>
        @enderror()


