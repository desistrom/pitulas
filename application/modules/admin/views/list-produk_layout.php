<style type="text/css">
.btn-tambah{
  margin-bottom: 20px;
}
.list-produk{
  padding: 10px 0 10px 15px;
    height: auto;
    overflow: hidden;
    border: solid #DDDDDD 1px;
    background-color: #F5F5F5;
}
.list-produk .judul-produk{
  margin-bottom: 5px;
  font-size: 16px;
}
.col-right{
    padding-top: 14px;
}
.col-right span{

  float: right;

}
.col-right .btn{
  margin-left: 15px;
}
</style>
<section class="content">
  <div class="row">
    <div class="col col-md-12 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">List Produk</div>
        <div class="panel-body">
            <div class=""><button class="btn btn-primary btn-tambah"> + Tambah Produk</button></div>
            <div class="list-produk">
                <div class="col col-md-8 col-sm-8 col-left">
                    <div class="judul-produk"><b>Beras hitam</b></div>
                    <div>stok : 24 sak</div>
                </div>
                <div class="col col-md-4 col-sm-4 col-right">
                  <span>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                  </span>
                </div>
            </div>
      <!-- ./list event -->
        </div>
      </div>
    </div>
  </div>
</section>


