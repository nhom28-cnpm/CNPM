<div id="update-post" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sủa sinh viên</h4>
      </div>
        <form id="update-post-form" method="POST" action="<?php helper::url('postController', 'update'); ?>">
      <div class="modal-body">
      
          <div class="form-group">
          <label for="id">Mã là:</label>  
          <input type="text" class="form-control" id="id" name="id" placeholder="mã là:">
          <label for="masv">Mã sinh viên là:</label>
          <input type="text" class="form-control" id="masv" name="masv" placeholder="mã sinh viên là:">
          <label for="hoten">Tên sinh viên:</label>
          <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Tên sinh viên:">
          <label for="ngaysinh">Ngày sinh sinh viên:</label>
          <input type="text" class="form-control" id="ngaysinh" name="ngaysinh" placeholder="Ngày sinh sinh viên:">
          <label for="diachi">Giới tính của sinh viên:</label>
          <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Dia chi của sinh viên:">
           <label for="gioitinh">Địa chỉ sinh viên:</label>
          <input type="text" class="form-control" id="gioitinh" name="gioitinh" placeholder="Gioi tinh sinh viên:">    
          <label>Tên khoa:</label>
          <select id="makhoa" name="makhoa" class="form-control">
            <?php foreach($this->khoas as $khoa) : ?>
              <option value="<?php echo $khoa->makhoa; ?>"><?php echo $khoa->tenkhoa; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Sửa</button>
      </div>

        </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

