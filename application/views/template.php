<?php $this->load->view('header'); ?>
<div id="content" class="site-content">
    <main id="main" class="site-main" role="main">
        <div class="content-area">
            <div class="col-lg-2 left-sidebar"><?php $this->load->view('leftSidebar'); ?></div>
            <div class="col-lg-6"><?php $this->load->view($view); ?></div>
            <div class="col-lg-4 right-sidebar"><?php $this->load->view('rightSidebar'); ?></div>
        </div>
    </main><!-- #main -->
</div><!-- #content -->
<?php $this->load->view('footer'); ?> 