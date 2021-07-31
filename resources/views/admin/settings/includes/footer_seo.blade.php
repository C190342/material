
    <div class="card">
        <div class="card-header card-header-userprofile" data-color="purple">
            <h4 class="card-title">Website Settings</h4>
            <p class="card-category">
                <i class="material-icons" style="top:1.5px !important">settings_applications</i>
                <i class="material-icons" style="top:1.5px !important">arrow_right</i>
                Footer & SEO
            </p>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                            <label>Footer Copyright Text</label>
                            <div class="form-group">
                                <label class="bmd-label-floating">Enter footer copyright text:</label>
                                <textarea class="form-control" rows="5"
                                id="footer_copyright_text"
                                name="footer_copyright_text"
                                >{{ config('settings.footer_copyright_text') }}</textarea>
                            </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                            <label>SEO Meta Title</label>
                            <div class="form-group">
                                <label class="bmd-label-floating" for="site_title">Enter seo meta title for store:</label>
                                <input type="text" class="form-control" id="seo_meta_title" name="seo_meta_title" value="{{ config('settings.seo_meta_title') }}" />
                            </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                            <label>SEO Meta Description</label>
                            <div class="form-group">
                                <label class="bmd-label-floating">Enter seo meta description for store:</label>
                                <textarea class="form-control" rows="5"
                                name="seo_meta_description"
                                id="seo_meta_description"
                                >{{ config('settings.seo_meta_description') }}</textarea>
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