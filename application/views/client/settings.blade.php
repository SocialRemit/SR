@extends("client.layout.master")

@push("custom_css")
@endpush

@section("settings", "active")

@section("content")
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Settings
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="breadcrumb-item active">Settings</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<!-- left column -->
		<div class="col-xl-6 col-lg-12">
			<!-- general form elements -->
			<div class="box">
				<div class="box-header with-border bg-dark">
					<h3 class="box-title">Change Password</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
                <?php echo form_open(base_url().'client/settings/change_password',array('class' => 'form-element', 'method'=>'post')); ?>
					<div class="box-body">
						<div class="form-group">
							<label for="inputCurrentPassword">Current Password</label>
							<input type="password" class="form-control" name="oldpassword" placeholder="">
						</div>
						<div class="form-group">
							<label for="inputNewPassword">New Password</label>
							<input type="password" class="form-control" name="password" placeholder="">
						</div>
						<div class="form-group">
							<label for="inputConfirmPassword">Confirm Password</label>
							<input type="password" class="form-control" name="repassword" placeholder="">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<div class="row">
							<div class="col-6 mx-auto">
								<button type="submit" class="btn btn-block btn-success">Update</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
		<!--/.col (left) -->


		<!-- right column -->
		<div class="col-xl-6 col-lg-12">
			<!-- Horizontal Form -->
			<div class="box">
				<div class="box-header with-border bg-dark">
					<h3 class="box-title">Withdrawal Wallet</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<h6 class="mt-15 mb-5">Your Ethereum Address for Withdrawal</h6>

					<div class="input-group">
						<span class="input-group-addon"><i class="cc ETH-alt font-size-20"></i></span>
						<input type="text" class="form-control" id="new_address" name="new_address" placeholder="ERC20" value="{{$userdata->eth_address}}" readonly>
					</div>
					<br>
				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->

			<!-- <div class="box box-inverse bg-info">
				<div class="box-body">
					<div class="flexbox">
						<h5>KYC</h5>
						<div class="dropdown">
							<span class="dropdown-toggle no-caret" data-toggle="dropdown">
								<i class="ion-android-more-vertical rotate-90"></i>
							</span>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="ion-android-list"></i> Learn More</a>
							</div>
						</div>
					</div>

					<div class="text-center my-2">
						<div class="font-size-50">Passed</div>
						<p class="text-white">
							<br>Now you can buy tokens freely.<br>
						</p>
					</div>
				</div>

				<div class="card-body bg-gray-light py-12">
					<div class="row">
						<div class="col-6 mx-auto">
							<button class="btn btn-block btn-info">Buy Tokens!</button>
						</div>
					</div>
				</div>

				<div class="progress progress-xxs mt-0 mb-0">
					<div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="30"
					 aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div> -->
		</div>

		<div class="col-xl-6 col-lg-12">

		</div>
		<!--/.col (right) -->
	</div>
	<!-- /.row -->

</section>
<!-- /.content -->
@endsection

@push('plugin_js')
@endpush

@push('custom_js')

{!!message_box_new('error')!!}
{!!message_box_new('success')!!}
@endpush
