<?php @include_once '../inc/config.php'; ?>

<style>
    .invisible {
        visibility: invisible;
    }
</style>

<script type="text/javascript">
  $(document).ready(function () {
      var i = 200;
      $('.timeline-item').each(function () {
          var that = this;
          setTimeout(function () {
              $(that).removeClass('invisible').addClass('flipInX');
          }, i);
          i += 200;
      });
  });
</script>
<div class="row">
    <div class="col-md-6">
        <!-- The time line -->
        <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-maroon">
                    01 May, 2015
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-briefcase bg-orange"></i>
                <div class="timeline-item animated invisible">
                    <span class="time"><i class="fa fa-calendar"></i> May'15 - Present</span>
                    <h2 class="timeline-header" ><a href="http://netvai.de" target="_blank">NETVAI UG</a> </h2>
                    <div class="timeline-body">
                        <strong>Technical Lead - Kiel, DE</strong>
                        <ul>
                            <li>Responsible for development of backend, frontend and database architecture for the product VisLog.</li>
                            <li>Project management and collaboration for VisLog. Defining business processes for the product.</li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-maroon">
                    01 March, 2014
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-briefcase bg-orange"></i>
                <div class="timeline-item animated invisible">
                    <span class="time"><i class="fa fa-calendar"></i> Mar'14 - Jul'14</span>
                    <h2 class="timeline-header" ><a href="http://naymspace.de" target="_blank">Naymspace</a> </h2>
                    <div class="timeline-body">
                        <strong>Software-Entwickler - Kiel, DE</strong>
                        <ul>
                            <li>Web application development in team and in close collaboration with external partners</li>
                            <li>Implementation of layouts / templates based on HTML / CSS</li>
                            <li>Custom application and modules development for individual solutions using Symphony2, Typo3, JavaScript and Ruby.</li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-maroon">
                    01 May, 2012
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-briefcase bg-orange"></i>
                <div class="timeline-item animated invisible">
                    <span class="time"><i class="fa fa-calendar"></i> May'12 - Oct'13</span>
                    <h2 class="timeline-header" ><a href="http://folio3.com" target="_blank">Folio3 Pvt. Ltd.</a> </h2>
                    <div class="timeline-body">
                        <strong>Senior Software Engineer - Karachi, PK </strong>
                        <ul>
                            <li>Product development for external client using PHP and MySQL</li>
                            <li>Worked in collaboration with a highly skilled team</li>
                            <li>Following software engineering process model for agile development</li>
                        </ul> 
                    </div>
                </div>
            </li>            
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-maroon">
                    10 October, 2010
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-briefcase bg-orange"></i>
                <div class="timeline-item animated invisible">
                    <span class="time"><i class="fa fa-calendar"></i> Oct'10 - Mar'12</span>
                    <h2 class="timeline-header" ><a href="https://www.crunchbase.com/organization/game-ventures#/entity" target="_blank">Game Ventures Pvt. Ltd.</a> </h2>
                    <div class="timeline-body">
                        <strong>Web Developer - Karachi, PK</strong>
                        <ul>
                            <li>Backend development for supporting the online sports games</li>
                            <li>Maintenance and features development for social network</li>
                            <li>Responsible for collaboration between different teams (Development, Business & Graphics)</li>
                            <li>Developing and maintaining a standalone analytics platform to support business process</li>
                        </ul>
                    </div>
                </div>
            </li>
            
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-maroon">
                    01 March, 2009
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-briefcase bg-orange"></i>
                <div class="timeline-item animated invisible">
                    <span class="time"><i class="fa fa-calendar"></i> Mar'09 - Sept'10</span>
                    <h2 class="timeline-header" ><a href="https://www.linkedin.com/company/parseten" target="_blank">Parse Ten Inc.</a> </h2>
                    <div class="timeline-body">
                        <strong>Web Developer - Karachi, PK</strong>
                        <ul>
                            <li>Facebook and other social application development</li>
                            <li>Small scale websites development using CMS likes wordpress and joomla</li>
                            <li>Database development and management</li>
                        </ul> 
                    </div>
                </div>
            </li>
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-maroon">
                    01 January, 2009
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-briefcase bg-orange"></i>
                <div class="timeline-item animated invisible">
                    <span class="time"><i class="fa fa-calendar fa-fw"></i> Jan'09 - Feb'09</span>
                    <h2 class="timeline-header" ><a href="http://salsoft.net" target="_blank">Salsoft Technologies</a> </h2>
                    <div class="timeline-body">
                        <strong>Web Developer - Karachi, PK</strong>
                        <ul>
                            <li>Facebook application development using FBML and Facebook APIs</li>
                            <li>Developing small modules for websites</li>
                            <li>Database development and management</li>
                        </ul> 
                    </div>
                </div>
            </li>
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-maroon">
                    08 August, 2008
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-briefcase bg-orange"></i>
                <div class="timeline-item animated invisible">
                    <span class="time"><i class="fa fa-calendar fa-fw"></i> Aug'08 - Dec'08</span>
                    <h2 class="timeline-header" ><a href="http://salsoft.net" target="_blank">Salsoft Technologies</a> </h2>
                    <div class="timeline-body">
                        <strong>SEO Specialist - Karachi, PK</strong>
                        <ul>
                            <li>Search engine optimization for the company websites</li>
                            <li>Promoting company business and portfolio online</li>
                            <li>Content and blog writing</li>
                        </ul> 
                    </div>
                </div>
            </li>           
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>
    </div><!-- /.col -->
    
    <?php include_once 'projects.php'; ?>
</div>