<div>
    <h1>
        {{$titleHead}}
    </h1>
    <label for="basic-url" class="form-label">Título</label>
    <div class="input-group mb-3">

        <input type="text" wire:model="title" class="form-control" placeholder="Digite aqui seu título">
    </div>

    <label for="basic-url" class="form-label">Texto</label>
    <div class="input-group mb-3">

        <textarea type="text" wire:model="body" class="form-control" placeholder="Digite aqui seu texto">
        </textarea>
    </div>
    </br>
    <label for="basic-url" class="form-label">Escolha o país</label>
    <div class="input-group mb-3">
        <select wire:model="country" class="form-select" size="3" aria-label="size 3 select example">
            <option value="Union King">UK</option>
            <option value="Brazil">BR</option>
            <option value="United States of America">USA</option>
        </select>

    </div>
    <button wire:click="resetTitle('' , '' , '')">Limpar</button>
    </br>
    <hr>
    <p>Título: {{$title}}</p>
    <p>Texto: {{$body}}</p>
    @if($active) <p> Ativo </p> @endif
    <p>País: {{ $country }} </p>

    <p>MountCall: {{$mountCall}}</p>
    <p>hydrateCall: {{$hydrateCall}}</p>
    <p>updateCall  : {{$updateCall}}</p>
</div>