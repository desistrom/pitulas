<style type="text/css">
.event{
  padding-top: 20px;
}
.box{
  border:none;
  box-shadow: none; 
}
.box-judul{
  margin-bottom: 20px;
}
.box-judul div {
  font-size: 20px;

}
.box-judul div input{
  padding: 10px 5px;
  font-size: 15px;
  height: 30px;
  width: 50%;
}
.box button{
  float: right;
  padding: 5px 20px;
  margin-top: -30px;
}
.box-header, .box-body{
  padding: 5px 0;
}
.choose{
  display: inline-block;
  margin-right: 10px; 
}
.choose input{
  border: solid #357CA5 2px;
  background-color: #3C8DBC;
  padding: 2px;

}
.list-foto, .list-video{
  margin: 20px 15px;
}
.sub-list{
  padding: 10px;
}
.sub-list{

border: solid black 1px;
}
.list-foto img{
  height: 100px;
  width: 100px;
}
</style>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="event">
        <div class="col col-md-12 col-sm-12">
            <div class="panel panel-default" >
              <div class="panel-heading">Event</div>
              <div class="panel-body">
                <div>
                  <div class="box">
                      <div class="box-judul">
                        <div>Judul Event</div><div><input type="text" name="visi" placeholder="masukan judul event"></div>
                      </div>
                  <div class="box-header">
                    <div class="box-title">Keterangan Event</div>
                  </div>
            <!-- /.box-header -->
                    <div class="box-body pad">
                      <form>
                       <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                     </form>

                    </div>
                    <div class=" choose foto">
                        <input  type="file" name="foto">
                    </div>
                    <div class="choose video">
                        <input type="file" name="filevideo" class="upvideo" >   
                    </div>
                   
                 <div><button class="btn btn-primary">Upload</button></div>
                 <div class="row">
                 <div class="list-foto">
                    <label>List Foto</label>
                    <div class="sub-list foto">
                        <span> <img src="<?=base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"></span>
                        <span> <img src="<?=base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"></span>
                        <span> <img src="<?=base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"></span>
                        <span> <img src="<?=base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"></span>
                    </div>
                 </div>

                 <div class="list-video">
                    <label>List Foto</label>
                    <div class="sub-list foto">
                      <span><video><iframe width="128" height="72" src="https://www.youtube.com/embed/s9NoBV_7yVI" frameborder="0" allowfullscreen></iframe></video></span>
                    </div>
                 </div>
               </div>
                 
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


