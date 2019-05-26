<div id="update-diem" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sửa điểm</h4>
      </div>
        <form id="create-diem-form" method="POST" action="<?php helper::url('diemController', 'update'); ?>">
      <div class="modal-body">
      
          <div class="form-group">
          <label for="id">Mã điểm là:</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="mã điểm là:">
          <label>Mã sinh viên:</label>
            <select id="masv" name="masv" class="form-control">
            <?php foreach($this->posts as $post) : ?>
              <option value="<?php echo $post->masv; ?>"><?php echo $post->hoten; ?></option>
            <?php endforeach; ?>
          </select>
          <label for="diemcc">Diem chuyên cần</label>
          <input type="text" class="form-control" id="diemcc" name="diemcc" placeholder="Diem chuyên cần:">
          <label for="diemgk">Điểm giữa kì:</label>
          <input type="text" class="form-control" id="diemgk" name="diemgk" placeholder="Điểm giữa kì:">
          <label for="diemck">Điểm cuối kì</label>
          <input type="text" class="form-control" id="diemck" name="diemck" placeholder="Điểm cuối kì:">
           <label for="diemtb"> Điểm trung bình:</label>
          <input type="text" class="form-control" id="diemtb" name="diemtb" placeholder="Điểm trung bình:">
           <label for="hanhkiem"> Hạnh kiểm  :</label>
          <input type="text" class="form-control" id="hanhkiem" name="hanhkiem" placeholder="Hạnh kiểm:">     
             <label>Mã học phần:</label>
            <select id="id_thamgiahocphan" name="id_thamgiahocphan" class="form-control">
            <?php foreach($this->hocphans as $hocphan) : ?>
              <option value="<?php echo $hocphan->id; ?>"><?php echo $hocphan->tenhp; ?></option>
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

