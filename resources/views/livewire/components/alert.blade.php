<div class="alert alert-warning alert-dismissable" @style(['display: none;' => $boxHidden])>
    <button type="button" wire:click="doCloseAlert" class="close" data-dismiss="alert">
        &times;
    </button>

    @if (session()->has('alertMessage'))
        {{ session()->get('alertMessage') }}
    @endif
</div>
