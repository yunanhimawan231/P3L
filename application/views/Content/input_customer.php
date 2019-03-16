<div class="right_col" role="main">  
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Input Data Costumer </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="<?php echo site_url('Customer/insert');?>" method="post">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Customer</label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="id_customer" class="form-control col-md-7 col-xs-12" name="ID_CUSTOMER">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Customer</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="nama_customer" class="form-control col-md-7 col-xs-12" name="NAMA_CUSTOMER">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Customer</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <textarea id="alamat_customer" class="form-control" name="ALAMAT_CUSTOMER"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telepon Customer</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="telepon_customer" class="form-control col-md-7 col-xs-12" name="TELEPON_CUSTOMER">
                        </div>
                      </div>
                      <div class="ln_solid"></div>     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
					</div>
					<div>	
					<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
									<table class="table table-bordered table-dark">
								
											<thead>
												<tr>
													<th scope="col">NO</th>
													<th scope="col">ID_CUSTOMER</th>
													<th scope="col">NAMA_CUSTOMER</th>
													<th scope="col">TELEPON CUSTOMER</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Larry</td>
													<td>the Bird</td>
													<td>@twitter</td>
												</tr>
											</tbody>
										</table>
								</div>
							</div>
						</div>
				
        <div class="right_col" role="main">   