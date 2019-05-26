<div id="delete-post" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Xóa sinh viên</h4>
      </div>
       	<form id="delete-post-form" method="POST" action="<?php helper::url('postController', 'delete'); ?>">
           <div class="modal-body">
      
          <div class="form-group">
          <label for="id">Mã sinh viên là:</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="mã sinh viên là:">
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
