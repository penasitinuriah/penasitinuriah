<!-- ModalEdit -->


<div class="modal fade" id="modalEditTodo<?= $data['id'] ?>" tabindex="-1" aria-labelledby="modalEditTodoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalmodalEditTodoLabel">Tambah Todo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control mb-2"value="<?= $data['taskname'] ?>" name="taskname" placeholder="masukan nama todo"
                required>
                <input type="text"name="id" value="<?= $data['id']?>" hidden>
                <select class="form-select mb-2" name="status" required>
    <option selected disabled>Pilih Status</option>
    <option value="Selesai" <?php if ($data['status'] === 'Selesai') { echo 'Selected'; } ?>>Selesai</option>
    <option value="Belum Selesai" <?php if ($data['status'] === 'Belum Selesai') { echo 'selected'; } ?>>Belum Selesai</option>
</select>
<select class="form-select mb-2" name="prioritas" required>
    <option selected disabled>Pilih Prioritas</option>
    <option <?php if($data['prioritas'] === 'cukup') { ?> selected <?php } ?>value="cukup" <?php if ($data['prioritas'] === 'cukup') { echo 'selected'; } ?>>Cukup</option>
    <option  <?php if($data['prioritas'] === 'biasa') { ?> selected <?php } ?>value="biasa" <?php if ($data['prioritas'] === 'biasa') { echo 'selected'; } ?>>Biasa</option>
    <option <?php if($data['prioritas'] === 'penting') { ?> selected <?php } ?> value="penting" <?php if ($data['prioritas'] === 'penting') { echo 'selected'; } ?>>Penting</option>
</select>

<input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal" 
    class="form-control mb-2" placeholder="Masukkan tanggal" value="<?= htmlspecialchars($data['tanggal']) ?>" required>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    <button type="submit" name="editTodo" class="btn btn-primary"> Edit Todo</button>
</div>
</div>
</div>