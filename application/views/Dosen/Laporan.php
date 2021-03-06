<Blockquote>
	<h5>Halaman Laporan</h5>
	<h5 style="color: #337ab7;"><i class="fa-solid fa-user"></i> <?= $this->session->userdata('username'); ?> / <?= $this->session->userdata('nidn'); ?></h5>
</Blockquote>

<div class="container-fluid">
	<?php
	if ($this->session->flashdata('success')) { ?>
		<div class="alert alert-success" role="alert">
			Email Berhasil DIkirim
		</div>
	<?php } else { ?>
	<?php } ?>
	<div class="row">
		<div class="col-md-12 panel panel-primary">
			<div class="panel-heading">Laporan Mahasiswa</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-condensed" id="" width="100%">
						<tbody>
							<tr class="active">
								<td class="" id="" width="3%" align="l" valign="top"><b>NO</b></td>
								<td class="" id="" width="5%" align="l" valign="top"><b>NIM</b></td>
								<td class="" id="" width="15%" align="l" valign="top"><b>Detail</b></td>
							</tr>
							<a href="<?= base_url() . 'Dosen/Laporan/pushEmail' ?>" type="button" class="btn btn-primary">Kirim Email</a>
							<?php
							$count = 0;
							foreach ($getLaporan as $row) :
								$count = $count + 1;
							?>
								<tr class="">
									<td class="" id="" width="3%" align="l" valign="top"><?= $count ?></td>
									<td class="" id="" width="5%" align="l" valign="top"><?= $row->nim ?></td>
									<td class="" id="" width="15%" align="l" valign="top"><?= $row->detail ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>
