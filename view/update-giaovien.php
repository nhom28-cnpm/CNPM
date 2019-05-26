<div id="update-giaovien" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sủa giáo viên</h4>
      </div>
        <form id="update-post-form" method="POST" action="<?php helper::url('giaovienController', 'update'); ?>">
      <div class="modal-body">
      
          <div class="form-group">
          <label for="id">Mã :</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="Mã là:">
            <label for="magv">Mã giáo viên:</label>
          <input type="text" class="form-control" id="magv" name="magv" placeholder="Mã giáo viên:">
       
          <label for="hoten">Tên giáo viên:</label>
          <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Tên giáo viên:">
          <label for="ngaysinh">Ngày sinh giáo viên:</label>
          <input type="text" class="form-control" id="ngaysinh" name="ngaysinh" placeholder="Ngày sinh giáo viên:">
          <label for="diachi">Địa chỉ giáo viên:</label>
          <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Giới tính của giáo viên:">
           <label for="gioitinh">Giới tính giáo viên:</label>
          <input type="text" class="form-control" id="gioitinh" name="gioitinh" placeholder="Địa chỉ giáo viên:">    
          <label for="dienthoai">Số điện thoại của giáo viên:</label>
          <input type="text" class="form-control" id="dienthoai" name="dienthoai" placeholder="Số điện thoại giáo viên:">
           <label for="email">Email của giáo viên:</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Số điện thoại giáo viên:">
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
    </div>
  </div>
</div>
