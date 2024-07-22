@foreach ($pendaftaran as $item)
    {{-- edit user --}}
    <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">foto</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/aggota/' . $item->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endforeach
