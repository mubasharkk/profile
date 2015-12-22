<?php @include_once '../inc/config.php'; ?>

<style>
    img.img-circle {
        box-shadow: rgba(0, 0, 0, 0.74902) 2px 2px 10px -1px; background-color: rgb(231, 166, 26);      

    }
</style>

<div class="row">
    <div class="col-md-12 text-center">
        <img height="300" style="" class="img-circle animated flipInY" src="<?php echo site_url('assets/img/profile/1.jpg'); ?>"/>        
    </div>
</div>
<div class="row margin">
            <div class="col-md-4">
                <div class="box box-solid box-primary animated flipInY">
                    <div class="box-header">
                        <h2 class="box-title">
                          <i class="fa fa-info-circle fa-fw"></i>
                          <?php print t('About Me')?>
                        </h2>
                    </div>
                    <div class="box-body">
                        <p class="text-justify">
                            <?php
                            print t('I am an enthusiastic software engineer, who wants to enjoy being a part of a successful and productive team, '
                                            . 'quick in grasping new ideas, concepts and to develop innovative and creative solutions to problems; '
                                            . 'under significant pressure, possesses a strong ability to perform effectively.');
                            ?>
                        </p>
                        <p class="text-justify">
                            <?php
                            print t('My objective is to work in a dynamic, structured and professional organization where '
                                            . 'I could utilize and enhance my analytical, creative interpersonal and communication skills. '
                                            . 'I would like to become a part of a cohesive unit within a friendly environment and work towards innovation.');
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-solid box-primary animated flipInY">
                    <div class="box-header">
                        <h2 class="box-title">
                          <i class="fa fa-user fa-fw"></i>
                          <?php print t('Personal Information');?>
                        </h2>
                    </div>
                    <div class="box-body" style="height: 320px;">
                        <div class="form-group row">
                            <div class="col-md-4"><strong><?php print t('Name');?>:</strong></div> 
                            <div class="col-md-8">Mubashar Khokhar</div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4"><strong><?php print t('Nationality');?>:</strong></div> 
                            <div class="col-md-8">Pakistani <i class="famfamfam-flag-pk"></i></div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4"><strong><?php print t('Marital Status');?>:</strong></div> 
                            <div class="col-md-8"><?php print t('Single');?></div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12"><strong><?php print t('Language Skills');?>:</strong></div> 
                            <div class="col-md-12">
                                <ul style="list-style: none; padding:0px;">
                                    <li class="margin"><i class="famfamfam-flag-pk"></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Urdu</strong> : Native Language</li>
                                    <li class="margin"><i class="famfamfam-flag-us"></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong>English</strong> : Professional</li>
                                    <li class="margin"><i class="famfamfam-flag-de"></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong>German</strong> : A1+</li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-solid box-primary animated flipInY">
                    <div class="box-header">
                        <h2 class="box-title">
                          <i class="fa fa-paper-plane fa-fw"></i>                          
                          <?php print t('Contact Information');?>
                        </h2>
                    </div>
                    <div class="box-body" style="height: 320px;">
                        <div class="form-group">
                            <i class="fa fa-envelope text-red fa-lg  fa-fw"></i> m&#46;khokhar&#64;social-gizmo&#46;com
                        </div>
                        <div class="form-group">
                            <i class="fa fa-envelope text-blue fa-lg  fa-fw"></i> mubasharkk&#64;outlook&#46;de
                        </div>
                        <div class="form-group">
                            <i class="fa fa-phone fa-lg  fa-fw"></i> &#43;&#52;&#57; &#49;&#55;&#54; &#52;&#49;&#54;&#56;&#50;&#53;&#50;&#56;
                        </div>
                        <div class="form-group">
                            <i class="fa fa-facebook text-blue fa-lg fa-fw"></i> <a href="https://facebook.com/mubasharkk" target="_blank">mubasharkk</a>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-skype  text-aqua fa-lg fa-fw"></i> mubasherkk
                        </div>
                        <div class="form-group">
                            <i class="fa fa-globe text-purple fa-lg fa-fw"></i> <a href="<?php print site_url();?>"><?php print site_url();?></a>
                        </div>
                    </div>
                </div>
            </div>
</div>