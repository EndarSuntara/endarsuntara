
<button type="button" class="btn btn-{{ $color }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
  {{ $slot }}
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda Menyukainya?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">IYA</button>
        <button type="button" class="btn btn-primary bg-primary" data-bs-dismiss="modal">TIDAK</a></button>
      </div>
    </div>
  </div>
</div>