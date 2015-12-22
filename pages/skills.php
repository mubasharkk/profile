<?php @include_once '../inc/config.php'; ?>

<script type="text/javascript">
  $(function () { 
      var $grid = $('#container').masonry({
          // options
          itemSelector: '.box',
          columnWidth: 240,
          isAnimated: true,
          animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
          }
      });
        
      var i = 50;  
      jQuery.when( $grid.masonry('reload') ).done(function(x) { 
          $('.animated').each(function(){
            var that = this;
            setTimeout(function(){
              $(that).removeClass('invisible').addClass('zoomIn');
            }, i);
            i += 50;
          });
      });        
      
  });
</script>

<style>
    div.skills .box{
        max-width: 220px;
        float:left;
    }

    div.skills .box-body img{
        max-width: 90%;
    }
</style>

<div class="row margin skills">
    <div class="col-md-12" id="container">
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">PHP 5+</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/PHP-logo.svg');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">MySQL 5+</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/mysql-vector1.jpg');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">CodeIgniter</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/codeigniter_logo.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Drupal 7</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/1417342899logo_drupal.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Wordpress</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/wordpress.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Mongo DB</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/mongodb-gui-tools.png');?>"/>
            </div>
        </div>

        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Node JS</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/nodejs_logo.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Symfony 2</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/symfony2-acl-1-638.jpg');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Memcached</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/memcached-logo-200x152.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">HTML5 + CSS3</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/html5-css3.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Javascript</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/9455413519_javascript.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">jQuery</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/jquery-icon.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">PhoneGap</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/diagram_package.svg');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Git</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/git_badge.fw-600x600.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Data Analysis</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/martin-dec-2010.jpg');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">RoR</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/Ruby_on_Rails.svg.png');?>"/>
            </div>
        </div>
        <div class="box box-solid box-success animated invisible">
            <div class="box-header">
                <span class="box-title">Social APIs</span>
                <div class="pull-right">
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-yellow"></i>
                    <i class="fa fa-star fa-fw text-gray"></i>
                </div>
            </div>
            <div class="box-body text-center row">
                <img src="<?php print site_url('assets/img/skills/social.png');?>"/>
            </div>
        </div>
    </div>
</div>