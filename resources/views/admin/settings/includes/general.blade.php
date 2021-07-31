
    <div class="card">
        <div class="card-header card-header-userprofile" data-color="purple">
            <h4 class="card-title">Website Settings</h4>
            <p class="card-category">
                <i class="material-icons" style="top:1.5px !important">settings_applications</i>
                <i class="material-icons" style="top:1.5px !important">arrow_right</i> 
                General
            </p>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label>Site Name</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="site_name">Enter site name:</label>
                            <input type="text" class="form-control" id="site_name" name="site_name" value="{{ config('settings.site_name') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Site Title</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="site_title">Enter site title:</label>
                            <input type="text" class="form-control" id="site_title" name="site_title" value="{{ config('settings.site_title') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Default Email Address</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="default_email_address">Enter default email address:</label>
                            <input type="email" class="form-control" id="default_email_address" name="default_email_address" value="{{ config('settings.default_email_address') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Currency Code</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="currency_code">Enter currency code:</label>
                            <input type="text" class="form-control" id="currency_code" name="currency_code" value="{{ config('settings.currency_code') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Currency Symbol</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="currency_symbol">Enter currency symbol:</label>
                            <input type="text" class="form-control" id="currency_symbol" name="currency_symbol" value="{{ config('settings.currency_symbol') }}" />
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