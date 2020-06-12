<!---------------Adicionando um novo campo em seu form-->

<div class="form-group row">
    <label for="sobrenome" class="col-md-4 col-form-label text-md-right">
        {{__('sobrenome')}}</label>

        <div class="col-md-6">
            <input id="sobrenome" type="text"
            class="form-control @error('sobrenome') is-invalid @enderror"
            name="sobrenome" value="{{ old('sobrenome') }}"
            required autocomplete="sobrenome" autofocus>


            @error('sobrenome')
                <span class="invalid feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
        </div>
</div>

<!---------------Fim do campo Adicionando-->
