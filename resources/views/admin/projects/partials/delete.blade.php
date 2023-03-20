{{-- 
<form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $comic->id }}">
        <i class="fa-solid fa-trash"></i>
    </button>

    <div class="modal fade" id="exampleModal{{ $comic->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $comic->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger fs-2">Conferma Eliminazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <p class="fs-5">Sei sicuro di voler eliminare il comic?</p>
                    <p class="fs-5 text-danger">Questa azione è irreversibile.</p>
                    <p>Dettagli Comic:</p>
                    <ul class="list-unstyled">
                        <li>
                            Id: {{ $comic->id }}
                        </li>
                        <li class="text-truncate">
                            Titolo: {{ $comic->title }}
                        </li>
                        <li class="text-truncate">
                            Descrizione: {{ $comic->description }}
                        </li>
                        <li class="text-truncate">
                            Url Img: {{ $comic->url }}
                        </li>
                        <li>
                            Prezzo: {{ $comic->price }} $
                        </li>
                        <li>
                            Serie: {{ $comic->series }}
                        </li>
                        <li>
                            Data Vendita: {{ $comic->sale_date }}
                        </li>
                        <li>
                            Tipo: {{ $comic->type }}
                        </li>
                    </ul>
                    <div class="py-4">
                        <input class="form-check-input text-bg-danger" type="checkbox" id="flexCheckDefault" required>
                        <label class="form-check-label " for="flexCheckDefault" >
                            Spunta per confermare*
                        </label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-danger">
                        Conferma Eliminazione
                    </button>
                </div>
            </div>
        </div>
    </div>
</form> 
--}}
