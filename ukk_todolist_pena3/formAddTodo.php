<!-- Modal -->
<div class="modal fade" id="modalAddTodo" tabindex="-1" aria-labelledby="modalAddTodoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalAddTodoLabel">Tambah Todo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control mb-2" name="taskname" placeholder="masukan nama todo"
                required>
                <select class="form-select mb-2" name="status"required>
    <option selected disabled>pilih status</option>
    <option value="selesai">selesai</option>
    <option value="belum selesai">belum selesai</option>
  </select>
  <select class="form-select mb-2" name="prioritas"required>
    <option selected disabled>pilih prioritas</option>
    <option value="cukup">cukup</option>
    <option value="biasa">biasa</option>
    <option value="biasa">penting</option>
  </select>
  <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal" 
      class="form-control mb-2" placeholder="masukan tanggal"required>
</div>
 <div class="modal-footer">
             <button type="button" class="btn  btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="tambahTodo" class="btn btn-primary">Tambah Todo</button>
         </div>
        </form>

      </div>
      
    </div>
  </div>
</div>