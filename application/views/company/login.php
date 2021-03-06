<header class="masthead bg-primary text-white text-center">
</header>

<div class="container">
<div class="row">
  <div class="col-md-4 offset-md-4">
    <div class="login-panel panel panel-success">
      <div class="panel-heading">
          <h3 class="panel-title">Company Login</h3>
      </div>
      <?php
        $success_msg= $this->session->flashdata('success_msg');
        $error_msg= $this->session->flashdata('error_msg');
        if($success_msg){
          ?>
          <div class="alert alert-success">
            <?php echo $success_msg; ?>
          </div>
        <?php
        }
        if($error_msg){
          ?>
          <div class="alert alert-danger">
            <?php echo $error_msg; ?>
          </div>
          <?php
        }
      ?>

      <div class="panel-body">
        <form role="form" method="post" action="<?php echo base_url('company/login_company'); ?>">
          <fieldset>
            <div class="form-group"  >
              <label for="age">Email</label>
              <input class="form-control" name="company_email" type="email" required="true" autofocus>
            </div>
            <div class="form-group">
              <label for="age">Password</label>
              <input class="form-control" name="company_password" type="password" required="true">
            </div>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login" name="login" >
          </fieldset>
        </form>
        <center><b>Not registered ?</b> <br><a href="<?php echo base_url('company/register_view'); ?>">Register here</a></center>
      </div>
    </div>
  </div>
</div>
</div>