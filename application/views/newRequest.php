<form method="POST" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/services/submit_request">
    <h2 class="page-title text-capitalize text-lg-center">Place a New Request for Footer Link Removal</h2>
    <div class="form-group">
        <label for="name">Your Name (Required)</label>
        <input type="text" class="form-control" id="requester_name" required="required"/>
    </div>

    <div class="form-group">
        <label for="email">Your Email (Required)</label>
        <input type="email" class="form-control" id="requester_email" required="required"/>
    </div>
    
    <div class="form-group">
        <label for="template_name">Template Name (Required)</label>
        <input type="text" class="form-control" id="template_name" required="required"/>
    </div>

    <div class="form-group">
        <label for="template_url">Template URL</label>
        <input type="text" class="form-control" id="template_url"/>
    </div>
    
    <div class="form-group">
        <label for="requester_site">Your Site</label>
        <input type="text" class="form-control" id="requester_site"/>
    </div>
    
    <div class="form-group">
        <label for="template_file">Template File (Required)</label>
        <input accept=".xml" type="file" class="form-control" id="template_file" required="required"/>
    </div>
    
    <div class="form-group">
        <input id="submit" type="submit" class="btn-info" value="Send Request!"/>
        <input type="reset" class="btn-danger" value="Clear"/>
    </div>
</form>