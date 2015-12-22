<?php @include_once '../inc/config.php'; ?>

<style>
    .box-uok {
      border: 1px solid #82010a ;
    }
    
    .box-uok .box-header{
      background: #82010a;
      color: #FFF;
    } 
    
    .box-fh-kiel {
      border: 1px solid #303866 ;
    }
    
    .box-fh-kiel  .box-header{
      background: #303866;
      color: #FFF;
    } 
</style>


<div class="row margin">
    <div class="col-md-6">
        <div class="box box-fh-kiel  box-solid animated lightSpeedIn">
            <div class="box-header">
                <span class="box-title">Fachhochschule Kiel, Kiel - Germany</span>
                <div class="pull-right"><i class="famfamfam-flag-de"></i></div>
            </div>
            <div class="box-body row">
                <div class="col-md-3">
                  <img style="" class="animated " src="<?php print site_url('assets/img/fh-kiel.jpg');?>"/>                            
                </div>
                <div class="col-md-9">
                    <p><strong><?php print t('MS Information Technology') ?></strong></p>
                    <p><em>Oct 2013 - Present</em></p>
                    <p>
                        <strong>Courses:</strong> Advance Data Mining and Visualization, Advance JavaScript Programming, Ubiquitous Computing
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-uok box-solid animated lightSpeedIn">
            <div class="box-header">
                <span class="box-title">University of Karachi, Karachi - Pakistan</span>
                <div class="pull-right"><i class="famfamfam-flag-pk"></i></div>
            </div>
            <div class="box-body row">
                <div class="col-md-3 text-center">
                  <img height="100px" style="" class="animated " src="<?php print site_url('assets/img/uok-logo.jpg');?>"/>                            
                </div>
                <div class="col-md-8">
                    <p><strong><?php print t('BS Computer Science') ?></strong></p>
                    <p><em>Jan 2006 - Dec 2010</em></p>
                    <p>
                        <strong>Courses:</strong> Object Oriented Programming, Internet Application Development, Database Systems
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>