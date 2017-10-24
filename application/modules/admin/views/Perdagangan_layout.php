<style type="text/css">
.dewan-komisaaris{
  padding-top: 20px;
}
.box{
  border:none;
  box-shadow: none; 
}
.box .nama span input, .box .jabatan span input, .box .box-judul .foto input{
  width: 30%;
}
.box-judul{
  margin-bottom: 20px;
}

.box-judul span{
  display: inline-block;
}
.box-header, .box-body{
  padding: 5px 0;
}
.choose input{
  border: solid #357CA5 2px;
  background-color: #3C8DBC;
  padding: 2px;
  width: 126%

}
</style>
<section class="content">
<div class="row">
<div class="col-md-12">
<div class="dewkan-komisaris">
  <div class="col col-md-12 col-sm-12">
      <div class="panel panel-default" >
        <div class="panel-heading">Dewan Komisaris</div>
        <div class="panel-body">
          <div>
            <div class="box">
                <div class="nama" style="margin-bottom: 20px;">
                  <span style="margin-right: 23px";><label style="font-size: 15px";>Nama </label></span><span><input type="text" name="inputnama"></span>
                </div>
                <div class="box-judul">
                  <span><label style="font-size: 15px";>Foto </label></span>
                  <span class=" choose foto" style="margin-left: 30px">
                        <input  type="file" name="foto">
                    </span>
                </div>
                <div class="jabatan">
                  <span style="margin-right: 10px";><label style="font-size: 15px";>Jabatan </label></span><span><input type="text" name="inputjabatan"></span>
                </div>

                <div class="box-header">
                    <div class="box-title"><label style="font-size: 15px";>Profil</label></div>
                </div>
            <!-- /.box-header -->
              <div class="box-body pad">
                <form>
                  <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </form>
              </div>
            <div><button class="btn btn-primary">Simpan</button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- /.col-->
      </div>
      <!-- ./event -->
    </div>
  </div>
    </section>

