
    <div class="card">
        <div class="card-header card-header-userprofile" data-color="purple">
            <h4 class="card-title">Website Settings</h4>
            <p class="card-category">
                <i class="material-icons" style="top:1.5px !important">settings_applications</i>
                <i class="material-icons" style="top:1.5px !important">arrow_right</i>
                Analytics
            </p>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                            <label>Google Analytics Code</label>
                            <div class="form-group">
                                @if (config('settings.google_analytics') == null)
                                <label class="bmd-label-floating">Enter google analytics code:</label>
                                @endif
                                <textarea class="form-control" rows="5"
                                id="google_analytics"
                                name="google_analytics"
                                >{!! Config::get('settings.google_analytics') !!}</textarea>
                            </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                            <label>Facebook Pixel Code</label>
                            <div class="form-group">
                                @if (config('settings.facebook_pixels') == null)
                                <label class="bmd-label-floating">Enter facebook pixel code:</label>
                                @endif
                                <textarea class="form-control" rows="5"
                                name="facebook_pixels"
                                id="facebook_pixels"
                                >{{ Config::get('settings.facebook_pixels') }}</textarea>
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