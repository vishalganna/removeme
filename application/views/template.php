<?php $this->load->view('header'); ?>
<div id="content" class="site-content">
    <main id="main" class="site-main" role="main">
        <div class="content-area">
            <div class="main-content"><?php $this->load->view($view); ?></div>
            <aside class="right-sidebar"><?php $this->load->view('rightSidebar'); ?></aside>
        </div>
    </main><!-- #main -->
</div><!-- #content -->
<?php $this->load->view('footer'); ?> 