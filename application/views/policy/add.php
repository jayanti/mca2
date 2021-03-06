<header class="masthead bg-primary text-white text-center">
</header>
<div class="container">
<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="login-panel panel panel-success">
            <div class="panel-heading">
                <?php if(isset($get_policy)){ ?>
                    <h3 class="panel-title">Edit Insurance Policy</h3>
                <?php }else{ ?>
                    <h3 class="panel-title">Add Insurance Policy</h3>
                <?php } ?>
            </div>
            <div class="panel-body">
                <?php
                $error_msg = $this->session->flashdata('error_msg');
                if ($error_msg) {
                    echo $error_msg;
                }
                    if(isset($get_policy)){
                        foreach($get_policy as $policy){
                            $name = $policy->name;
                            $type_id = $policy->policy_type_id;
                            $investment = $policy->inv_per_year;
                            $term = $policy->term;
                            $expected_return = $policy->expected_return;
                            $min_age = $policy->min_age;
                            $max_age = $policy->max_age;
                            $id = $policy->id;
                            $description = $policy->description;
                        }
                    }
                ?>

                <form role="form" method="post" action="<?php if(isset($get_policy)) echo base_url('policy/updatePolicy'); else echo base_url('policy/add'); ?>">
                    <fieldset>
                        <div class="form-group">
                           <label for ="name">Name of Policy</label> <input class="form-control" placeholder="Name" name="name" type="text" required="true" value="<?php if(isset($name)) echo $name; ?>" autofocus>
                        </div>
                        <div class="form-group"> 
                            <label for ="type_id">Type </label>
                            <select name="type_id" placeholder="Type ID" class="form-control">
                                <?php

                                foreach($type_list as $row){
                           
                                ?>
                                <option <?php if(isset($type_id)){ if($type_id==$row->id){ echo ' Selected="Selected" ';} } ?> value="<?PHP echo $row->id;?>"><?PHP echo $row->name;?></option>
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                        <div class="form-group">
                           <label for ="inv_per_year">Inv per year</label>  <input class="form-control" placeholder="Inv per year" name="inv_per_year" type="number" required="true" value="<?php if(isset($investment)) echo $investment; ?>">
                        </div>
                       <div class="form-group">
                            <label for ="term">Term (in year)</label> <input class="form-control" placeholder="Term (in year)" name="term" required="true" value="<?php if(isset($term)) echo $term; ?>">
                        </div>
                        <div class="form-group">
                           <label for ="expected_return">Expected Return</label>  <input class="form-control" placeholder="Expected Return" name="expected_return" required="true" value="<?php if(isset($expected_return)) echo $expected_return; ?>">
                        </div>
                        <div class="form-group">
                           <label for ="min_age">Minimum age</label>  <input class="form-control" placeholder="Min. age" name="min_age" required="true" value="<?php if(isset($min_age)) echo $min_age; ?>">
                        </div>
                        <div class="form-group">
                           <label for ="max_age">Maximum Age</label>  <input class="form-control" placeholder="Max. Age" name="max_age" required="true" value="<?php if(isset($max_age)) echo $max_age; ?>">
                        </div>
                        <div class="form-group">
                           <label for ="description">Description</label> <textarea  class="form-control" placeholder="Add a little description about the policy" name="description" required="true"><?php if(isset($description)) echo $description; ?></textarea> 
                        </div>
                        <input type="hidden" name="id" required="true" value="<?php if(isset($id)) echo $id ?>">
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Save" name="register" >
                    </fieldset>
                </form>

               
            </div>
        </div>
    </div>
</div>