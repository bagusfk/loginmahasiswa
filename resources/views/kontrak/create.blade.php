

<!-- Modal -->
<div class="modal fade" id="createkontrak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        <form action="kontrak/create" method="post">
            @csrf
            <div class="form-group">
                <label for="">Mahasiswa</label>
                <select name="mahasiswa_id" id="" class="form-control">
                    @foreach($mahasiswa as $data)
                    <option value="<?=$data->id?>"><?=$data->name?></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Semester</label>
                <select name="semester_id" id="" class="form-control">
                    @foreach($semester as $data1)
                    <option value="<?=$data1->id?>"><?=$data1->semester?></option>
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
