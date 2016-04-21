<?php $this->layout('layouts/master') ?>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Manage Routes</h3>
		</div>

		<div class="title_right">
			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel" style="height:600px;">
				<div class="x_title">
					<h2>Create New Route</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel" style="border-color: #333;">
								<div class="x_title">
									<h2>Fill in the Gaps</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">

									<?php if (isset($message)) : ?>
										<h3 style='color:forestgreen;'><?= $this->e($message) ?></h3>
									<?php endif ?>

									<br/>
									<form id="createStopForm" action="<?= $this->url('admin/stops/create'); ?>"
									      method="post" data-parsley-validate class="form-horizontal form-label-left">

										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="stopTime"> Time <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="stopTime" name="stopTime" required="required" placeholder="16:45:00" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nameOfStopGR">Name in Greek <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="nameOfStopGR" name="nameOfStopGR"
												       placeholder="Λ.Κηφησίας 163, Απέναντι απο.." required="required" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nameOfStopENG">Name in English <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="nameOfStopENG" name="nameOfStopENG"
												       placeholder="Kifisias Avenue 163" required="required" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="description"> Description
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="description" name="description"
												       placeholder="Full description.." required="required" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="lat"> Latitude <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="lat" name="lat"
												       placeholder="76.456" required="required" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="lng"> Longtitude <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="lng" name="lng"
												       placeholder="87.454" required="required" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="routeID"> Related Route <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<select id="routeID" name="routeID" class="form-control">
													<option value="1">From Kifisia</option>
													<option value="2">To Kifisia</option>
													<option value="78">Test</option>
												</select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<button type="reset" class="btn btn-primary">Cancel</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>


				</div>
			</div>
		</div>
	</div>
</div>
