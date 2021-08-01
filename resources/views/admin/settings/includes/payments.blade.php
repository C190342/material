
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
                    <div class="col-md-12" style="padding-bottom: 15px;">
                        <label>Stripe Payment Method</label>
                        <div class="custom-select">
                            <select name="stripe_payment_method" id="stripe_payment_method" class="select-css">
                                <option value="0">Select value:</option>
                                <option value="1" {{ (config('settings.stripe_payment_method')) == 1 ? 'selected' : '' }}>Disabled</option>
                                <option value="2" {{ (config('settings.stripe_payment_method')) == 2 ? 'selected' : '' }}>Enabled</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Key</label>
                        <div class="form-group">
                            @if (config('settings.stripe_key') == null)
                            <label class="bmd-label-floating" for="stripe_key">Enter stripe key:</label>
                            @endif
                            <input type="text" class="form-control" id="stripe_key" name="stripe_key" value="{{ config('settings.stripe_key') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Secret Key</label>
                        <div class="form-group">
                            @if (config('settings.stripe_secret_key') == null)
                            <label class="bmd-label-floating" for="stripe_secret_key">Enter stripe secret key:</label>
                            @endif
                            <input type="text" class="form-control" id="stripe_secret_key" name="stripe_secret_key" value="{{ config('settings.stripe_secret_key') }}" />
                        </div>
                    </div>
                </div>
                
                <hr>

                <div class="row">
                    <div class="col-md-12" style="padding-bottom: 15px;">
                        <label>PayPal Payment Method</label>
                        <div class="custom-select">
                            <select name="paypal_payment_method" id="paypal_payment_method" class="">
                                <option value="0">Select value:</option>
                                <option value="1" {{ (config('settings.paypal_payment_method')) == 1 ? 'selected' : '' }}>Disabled</option>
                                <option value="2" {{ (config('settings.paypal_payment_method')) == 2 ? 'selected' : '' }}>Enabled</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Client ID</label>
                        <div class="form-group">
                            @if (config('settings.paypal_client_id') == null)
                            <label class="bmd-label-floating" for="paypal_client_id">Enter paypal client Id:</label>
                            @endif
                            <input type="text" class="form-control" id="paypal_client_id" name="paypal_client_id" value="{{ config('settings.paypal_client_id') }}" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label>Secret ID</label>
                        <div class="form-group">
                            @if (config('settings.paypal_secret_id') == null)
                            <label class="bmd-label-floating" for="paypal_secret_id">Enter paypal secret Id:</label>
                            @endif
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


    <script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
            }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
        arrNo.push(i)
        } else {
        y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
        }
    }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    </script>

