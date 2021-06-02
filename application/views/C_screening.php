<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Screening Mandiri</h4>
    <form action="<?=base_url('C_setup_faq/post_create')?>" method="POST">
    <div class="table-responsive">
        <table class="table-responsive">
            <tbody>
          <tr>
          <td>
          <p class="description"> Hamil pertama terlalu muda/tua(<17 th. ≥ 35 th)</p>
          </td>
          <td>
          <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Jawaban</option>
                    <option value="4">YA</option>
                    <option value="0">TIDAK</option>
                </select>
          </td>
          </tr>
          <tr>
          <td>
          <p class="description">Pernah melahirkan dengan tindakan( vacum, forcep)</p>
          </td>
          <td>
          <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Jawaban</option>
                    <option value="4">YA</option>
                    <option value="0">TIDAK</option>
                </select>
          </td>
          </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>