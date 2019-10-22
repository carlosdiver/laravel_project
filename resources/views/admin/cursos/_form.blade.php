<div class="input-field">
    <input type="text" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
    <label>Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
    <label>Valor</label>
</div>

<div class="input-field file-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(!empty($registro->imagem))
<div class="input-field">
    <img width="150" src="{{ asset($registro->imagem) }}">
</div>
@endif

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" name="publicado" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true" />
            <span>Publicar</span>
        </label>
    </p>
</div>