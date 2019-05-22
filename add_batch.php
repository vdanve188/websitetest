<?php include('header.php');?>        
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
            
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-4">
              

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Batch</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
					
                   	  
                      <label for="fullname">Add Batch Name * :</label>
                      <input type="text" id="" class="form-control" name="" required />
 <br/>
                    
                          <button class="btn btn-primary">Submit</butto>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>


              </div>
				
				  <div class="col-md-8 col-sm-8 col-xs-8">
              

                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Batch</h2>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Batch Name</th>
						 
                          
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
						  <td>PU-A</td>
                          
                          <td><button class="btn btn-primary" type="button">Update</button><button class="btn btn-danger" type="button">Delete</button></td>
						
                        </tr>
                      </tbody>
                    </table>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  </div>
                </div>


              </div>
             
        </div>
		 <div class="clearfix"></div>
        <!-- /page content -->

       <?php include('footer.php');?>