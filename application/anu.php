<!-- //controller utama -->
<?php
public function index()
	{
$data['icon']='<i class="menu-icon fa fa-paperclip"></i> ';
$this->load->library('pagination');
$config['base_url'] = base_url().'index.php/Log/index/';
$config['total_rows'] = $this->M_log->get_jumlah();
$config['per_page'] = 50;
$config['uri_segment'] = 3;
$this->pagination->initialize($config);
$start = $this->uri->segment(3, 0);
$rows = $this->M_log->get($config['per_page'],$start)->result();
$data['pagination'] = $this->pagination->create_links();
$data['start'] = $start;
$user=$this->session->userdata('y');
$data['mnknnakses']= $this->Auth_model->cek_askes($user)->result();
$data['menu']=getmenu($this->session->userdata('z'));
		$data['log'] = $rows;
		$data['content']="log/index.php";
		$this->load->view('admin/template', $data);
	}
?>

<!--database-->
<?php
function get_jumlah(){
        return $this->db->query('select * from family')->num_rows();
  }
  function get($limit, $start = 0){
      $this->db->order_by('udin', 'DESC');
      $this->db->limit($limit, $start);
      return $this->db->get('family');
	}
?>

//view
<div class="panel-body">
	<div class="">
		<?php echo $pagination; ?>
	</div>
	<br><br>
	<div>

	</div>
	<div class="table-primary">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Waktu Kegiatan</th>
					<th>Pelaku</th>
					<th>Dikenai</th>
					<th>Menu</th>
					<th>Kegiatan</th>
					<th>Detail</th>
				</tr>
			</thead>
			<tbody>
				<form class="" action="<?php echo site_url($katalangit.'/search'); ?>" method="post">
					<td><center>#</center></td>
					<td><center><input placeholder="Tanggal" type="text" id="ds1"  autocomplete="off" name="tanggal_f" class="form-control"></center></td>
					<td><center><input placeholder="Masukkan NRP" type="text" maxlength="9"  autocomplete="off" name="nrp_f" class="form-control" onkeypress="return isNumberKey(event)"></center></td>
					<td></td>
					<td><center><input placeholder="Masukkan Menu" type="text"  autocomplete="off" name="menu_f" class="form-control"></center></td>
					<td></td>
					<td><button type="submit" class="btn btn-info btn-md"><i class="fa fa-search"></i> Cari</button></td>
				</form>
				<?php  $uri = $this->uri->segment(3); ?>
				<?php $no=$uri; foreach($log as $row): $no++ ?>
				<tr>
					<td class="center"><?php echo $no; ?></td>
					<td><?php echo $row->gunawan; ?></td>
					<td>
							<?php
								$idk=$row->suparti;
								$nama=$this->M_personil->getRow($idk)->row_array();
								echo $nama['nama'];
							?>
					</td>
					<!-- <td><?php echo $row->suparti; ?></td> -->
					<td>
							<?php
								$idk=$row->mei;
								$nama=$this->M_personil->getRow($idk)->row_array();
								echo $nama['nama'];
							?>
					</td>
					<!-- <td><?php echo $row->mei; ?></td> -->
					<td><?php echo $row->tika; ?></td>
					<td><?php echo $row->tepe; ?></td>
					<td><center><a href="<?php echo site_url($katalangit.'/detail/'.$row->udin);?>" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail Log Aktivitas <?=  $row->gunawan;?>"><i class="fa fa-search"></i></a></center></td>
				</tr>

			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
<div class="pull-right">
	<?php echo $pagination; ?>
</div>