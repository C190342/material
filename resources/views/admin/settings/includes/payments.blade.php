
    <div class="card">
        <div class="card-header card-header-userprofile" data-color="purple">
            <h4 class="card-title">Website Settings</h4>
            <p class="card-category">
                <i class="material-icons" style="top:1.5px !important">settings_applications</i>
                <i class="material-icons" style="top:1.5px !important">arrow_right</i>
                Payment Settings
            </p>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label>Stripe Payment Method</label>
                        <div class="form-group select-div">
                            <select name="stripe_payment_method" id="stripe_payment_method" class="select-css">
                                <option value="1" {{ (config('settings.stripe_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                                <option value="0" {{ (config('settings.stripe_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Key</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="stripe_key">Enter stripe key:</label>
                            <input type="text" class="form-control" id="stripe_key" name="stripe_key" value="{{ config('settings.stripe_key') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Secret Key</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="stripe_secret_key">Enter stripe secret key:</label>
                            <input type="email" class="form-control" id="stripe_secret_key" name="stripe_secret_key" value="{{ config('settings.stripe_secret_key') }}" />
                        </div>
                    </div>
                </div>
                
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <label>PayPal Payment Method</label>
                        <div class="form-group">
                            <select name="paypal_payment_method" id="paypal_payment_method" class="select-css">
                                <option value="1" {{ (config('settings.paypal_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                                <option value="0" {{ (config('settings.paypal_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Client ID</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="paypal_client_id">Enter paypal client Id:</label>
                            <input type="email" class="form-control" id="paypal_client_id" name="paypal_client_id" value="{{ config('settings.paypal_client_id') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Secret ID</label>
                        <div class="form-group">
                            <label class="bmd-label-floating" for="paypal_secret_id">Enter paypal secret Id:</label>
                            <input type="text" class="form-control" id="paypal_secret_id" name="paypal_secret_id" value="{{ config('settings.paypal_secret_id') }}" />
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