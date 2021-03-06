{post}
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editing Post: {title}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
<form method="POST" action="<?php echo base_url(); ?>admin/postedit/{id}">
    <div class="form-group">
        <label>Post Title</label>
        <input class="form-control" name="blogtitle" value="{title}" required>
        <p class="help-block">The title of your blog post!</p>
    </div>
    <div class="form-group">
        <label>Blog content</label>
        <textarea class="form-control" id="posteditor" name="posteditor" rows="3">{content}</textarea>
    </div>
    <button class="btn btn-outline btn-success" type="submit" value="submit">Save Changes</button>
</form>
</div>
{/post}