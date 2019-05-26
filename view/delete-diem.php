<div id="delete-diem" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Xóa điểm </h4>
      </div>
       	<form id="delete-diem-form" method="POST" action="<?php helper::url('diemController', 'delete'); ?>">
           <div class="modal-body">
      
          <div class="form-group">
          <label for="id">Mã điêm là:</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="mã điểm là:">
        </div>   
      </div>      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Xóa</button>
      </div>
      	</form>
    </div>
  </div>
</div>
