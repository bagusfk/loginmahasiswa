

<!-- edit Modal -->
<div class="modal fade" id="edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{url('semester/edit/'.$data->id)}}" method="post" id="editform">
          @csrf
          <input class="form-control" id="semester" name="semester" type="number" placeholder="Semester" value="{{$data->semester}}">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
