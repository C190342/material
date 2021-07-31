
    <div class="card">
        <div class="card-header card-header-userprofile" data-color="purple">
            <h4 class="card-title">Website Settings</h4>
            <p class="card-category">
                <i class="material-icons" style="top:1.5px !important">settings_applications</i>
                <i class="material-icons" style="top:1.5px !important">arrow_right</i>
                Social Links
            </p>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label>Facebook Profile</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="social_facebook">Enter facebook profile:</label>
                            <input type="text" class="form-control" id="social_facebook" name="social_facebook" value="{{ config('settings.social_facebook') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Twitter Profile</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="social_twitter">Enter twitter profile:</label>
                            <input type="text" class="form-control" id="social_twitter" name="social_twitter" value="{{ config('settings.social_twitter') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Instagram Profile</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="social_instagram">Enter instagram profile:</label>
                            <input type="email" class="form-control" id="social_instagram" name="default_email_address" value="{{ config('settings.social_instagram') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>LinkedIn Profile</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="social_linkedin">Enter linkedin profile:</label>
                            <input type="text" class="form-control" id="social_linkedin" name="social_linkedin" value="{{ config('settings.social_linkedin') }}" />
                        </div>
                    </div>
                </div>
                
                <!-- -->
                <div class="">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right btn_style">Update Settings</button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>