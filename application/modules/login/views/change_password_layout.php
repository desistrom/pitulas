<div id="sidebar1" class="col-md-9 col-sm-12 change-password-page" id="employ-change-pasword-page">
    <div class="widget clearfix">
        <div class="member-profile">
            <div class="big-title">
                <h2 class="related-title">
                    <span>Edit password</span>
                </h2>
            </div><!-- end big-title -->

            <div class="edit-profile loginform">
                <div class="alert alert-success" style="display:none">
                    <a class="close" onclick="$('.change-password-page .alert.alert-success').hide()">&times;</a>
                    <span id="ntf_success"></span>
                </div>
                <form role="form" id="change-password-form" method="post" action="<?=current_url();?>">
                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" name="current_password" class="form-control" >
                        <span id="ntf_current_password"></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="new_password" class="form-control" >
                        <span id="ntf_new_password"></span>
                    </div>
                    <div class="form-group">
                        <label>Re-Enter Password</label>
                        <input type="password" name="retype_password" class="form-control" >
                        <span id="ntf_retype_password"></span>
                    </div>
                     <button type="submit" class="btn btn-primary btn-block">Submit Changes</button>
                 </form>
            </div><!-- end edit profile -->
        </div><!-- end team-member -->
    </div>
</div><!-- end right -->