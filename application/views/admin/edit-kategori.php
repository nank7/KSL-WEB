
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Kategori</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Kategori</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Kategori
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<?= form_open('admin-category/patch', ['class' => 'form-horizontal']) ?>
						<?= validation_errors() ?>
						<?= form_hidden('id_kategori', $kategori->id_kategori) ?>
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nama Kategori</label>
									<div class="col-md-9">
										<?= form_input('nama_kategori', $kategori->nama_kategori, ['class' => 'form-control']) ?>
									</div>
								</div>

								<!-- Desc body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Deskripsi Kategori</label>
									<div class="col-md-9">
										<?= form_textarea('deskripsi_kategori', $kategori->deskripsi_kategori, ['class' => 'form-control']) ?>
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<?= form_submit(null, 'Edit', ['class' => 'btn btn-default btn-md pull-right']) ?>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->


<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
