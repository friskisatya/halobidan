<div class="container">
    <h6 class="title float-right btn-sm btn-primary ml-1"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data FAQ</h4>
    <form action="">
        <div class="card-body">
            <div class="form-group">
                <label for="ask">Ask</label>
                <textarea name="ask" id="ask" cols="50" rows="20" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="Question">Question</label>
                <textarea name="Question" id="Question" cols="50" rows="20" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status Visible</label>
                <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="">Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>