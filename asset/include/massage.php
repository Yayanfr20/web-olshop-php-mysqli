<form action="" method="post">
<div class="container mt-5">
  <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="your name" aria-label="Recipient's username" aria-describedby="basic-addon2" name="nama">
</div>
<div class="input-group mb-3">
  <input type="hidden" class="form-control" value="<?php
    date_default_timezone_set('Asia/Jakarta');
   echo date("d.m.y"); ?>" aria-label="Username" name="date">
  <input type="email" class="form-control" placeholder="@gmail.com" aria-label="Server" name="email">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">massage</span>
  <textarea class="form-control" aria-label="With textarea" name="pesan" style="height: 200px;"></textarea>
</div>
<div class="input-group mb-3">
  <button type="submit" class="btn btn-danger" name="submit">submit</button>
</div>
</div>
</form>