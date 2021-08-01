
    <div class="card">
        <div class="card-header card-header-userprofile" data-color="purple">
            <h4 class="card-title">Website Settings</h4>
            <p class="card-category">
                <i class="material-icons" style="top:1.5px !important">settings_applications</i>
                <i class="material-icons" style="top:1.5px !important">arrow_right</i>
                Site Logo
            </p>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                @csrf
                <div class="row" style="padding-top: 20px;">
                    <div class="col-3">
                        @if (config('settings.site_logo') != null)
                            <img src="{{ asset('storage/'.config('settings.site_logo')) }}" id="logoImg" style="width: 80px; height: auto;">
                        @else
                            <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                        @endif
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label class="control-label">Site Logo</label>
                            <div class="custom-file pmd-custom-file site_logo">
                                <input type="file" class="custom-file-input form-control" id="site_logo" name="site_logo" onchange="loadFile(event,'logoImg')"/>
                                <label class="custom-file-label non-click-input" for="site_logo">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row " style="padding-top: 20px;">
                    <div class="col-3">
                        @if (config('settings.site_favicon') != null)
                            <img src="{{ asset('storage/'.config('settings.site_favicon')) }}" id="faviconImg" style="width: 80px; height: auto;">
                        @else
                            <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="faviconImg" style="width: 80px; height: auto;">
                        @endif
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label class="control-label">Site Favicon</label>
                            <div class="custom-file pmd-custom-file site_favicon">
                                <input type="file" class="custom-file-input form-control" id="site_favicon" name="site_favicon" onchange="loadFile(event,'faviconImg')"/>
                                <label class="custom-file-label non-click-input" for="site_favicon">Choose file</label>
                            </div>
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
    @push('scripts')
        <script>
            loadFile = function(event, id) {
                var output = document.getElementById(id);
                output.src = URL.createObjectURL(event.target.files[0]);
            };

            $('#site_favicon').focus(function(){
                $('.site_favicon label').toggleClass('non-click-input click-input');
            }).blur(function(){
                $('.site_favicon label').toggleClass('click-input non-click-input');
            });

            $('#site_logo').focus(function(){
                $('.site_logo label').toggleClass('non-click-input click-input');
            }).blur(function(){
                $('.site_logo label').toggleClass('click-input non-click-input');
            });
            
        </script>
    @endpush