<!-- Modal -->
<div class="modal fade" id="createjadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        <form action="jadwal/create" method="post">
            @csrf
            <div class="form-group">
                <label for="">Hari</label>
                <input class="form-control" name="jadwal" type="text" placeholder="Hari">
            </div>
            <div class="form-group">
                <label for="">Matakuliah</label>
                <select name="matakuliah_id" id="" class="form-control">
                    @foreach($matakuliah as $data)
                    <option value="<?=$data->id?>"><?=$data->name?></option>
                    @endforeach
                </select>
            </div>
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
