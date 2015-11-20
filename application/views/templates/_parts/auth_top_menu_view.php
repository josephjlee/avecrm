<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo anchor('dashboard', $website->title, 'class="navbar-brand"');?>
    </div>

    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><?php echo anchor('dashboard','Home');?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
             aria-haspopup="true" aria-expanded="false">Opportunities <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo anchor('dashboard/opportunities', 'List opportunities');?></li>
            <li><?php echo anchor('dashboard/opportunities/create', 'Add opportunity');?></li>
            <?php
            if($this->ion_auth->is_admin()) {
              echo '<li role="separator" class="divider"></li>';
              echo '<li>'.anchor('dashboard/opportunity-sources','List sources').'</li>';
              echo '<li>'.anchor('dashboard/opportunity-sources/create','Add source').'</li>';
            }
            ?>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Contacts <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo anchor('dashboard/contacts', 'List contacts');?></li>
            <li><?php echo anchor('dashboard/contacts/create', 'Add contact');?></li>
            <?php
            if($this->ion_auth->is_admin()) {
              echo '<li role="separator" class="divider"></li>';
              echo '<li>'.anchor('dashboard/contact-types','Contact types').'</li>';
              echo '<li>'.anchor('dashboard/contact-types/create','Add contact type').'</li>';
            }
            ?>
          </ul>
        </li>
        <li><?php echo anchor('dashboard/cities','Cities');?></li>
          <li><?php echo anchor('dashboard/about','About');?></li>
      </ul>

      <?php echo form_open('dashboard/opportunities/search', 'class="navbar-form navbar-left" role="search"');?>
        <div class="form-group">
          <?php echo form_input('search',set_value('search'),'class="form-control" placeholder="Search/Add opportunity"');?>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      <?php echo form_close();?>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="//www.gravatar.com/avatar/<?php echo $_SESSION['gravatar'];?>?s=20" /> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <?php
            if($this->ion_auth->is_admin())
            {

                echo '<li role="separator" class="divider"></li>';
                echo '<li>'.anchor('dashboard/users', 'Users').'</li>';
                echo '<li>'.anchor('dashboard/users/create', 'Add user').'</li>';
                echo '<li role="separator" class="divider"></li>';
                echo '<li>'.anchor('dashboard/master','Main settings').'</li>';

            }
            ?>
            <li role="separator" class="divider"></li>
            <li><?php echo anchor('user/logout','Logout');?></li>
          </ul>
        </li>
      </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>