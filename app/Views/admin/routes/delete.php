<?php
/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 3/26/2016
 * Time: 19:08
 */
$this->layout('layouts/master');
?>

<!-- page content -->
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>
					Manage Routes
				</h3>
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
				<div class="x_panel">
					<div class="x_title">
						<h2>Select the routes you want to delete</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">

						<?php if (isset($successDelete['message'])) : ?>
							<h3 style='color:forestgreen;'><?= $this->e($successDelete['message']) ?></h3>
						<?php endif ?>

						<form action="<?= $this->url('admin/routes/delete'); ?>" method="post">
							<table id="example" class="table table-striped responsive-utilities jambo_table">
								<thead>
								<tr class="headings">
									<th>
										<input type="checkbox" class="tableflat">
									</th>
									<th>ID &nbsp;</th>
									<th>English Name</th>
									<th>Greek Name</th>
									<th>School </th>

									<th class=" no-link last"><span class="nobr">Action</span>
									</th>
								</tr>
								</thead>

								<tbody>


								<?php foreach ($response['routes'] as $row) { ?>
								<tr class="pointer">
									<td class="a-center ">
										<input type="checkbox" name="selections[]" value="<?php echo $row['ID'] ?>" class="tableflat">
									</td>
									<td class=""><?php echo $row['ID'] ?></td>
									<td class=""><?php echo $row['nameENG'] ?></td>
									<td class=""><?php echo $row['nameGR'] ?></td>
									<td class=""><?php echo $row['school'] ?></td>
									<td class="last"><button id="individual_btn" class="btn btn-danger" type="submit" name="individual_btn" value="<?php echo $row['ID'] ?>"> <i class="fa fa-trash-o"></i> </button>
									</td>
								</tr>

								<?php } ?>

								</tbody>
							</table>

							<div class="form-group-lg" style="margin: 10px auto;">
								<button style="margin: 30px auto;" type="submit" name="multiple_btn" class="btn btn-danger btn-block pull-left">Delete Selected Entries</button>
							</div>

						</form>

					</div>
				</div>
			</div>

			<br />
			<br />
			<br />

		</div>
	</div>
