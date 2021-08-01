@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="">            
                @include('admin.partials.flash')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">

            <div class="card">
                <div class="card-header card-header-userprofile" data-color="purple">
                    <h4 class="card-title">{{ $pageTitle }}</h4>
                    <p class="card-category">
                        {{ $subTitle }}
                    </p>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.categories.update') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label>Name<span class="m-l-5 text-danger"> *</span></label>
                                <div class="form-group @error('name') is-invalid @enderror">
                                    <input class="form-control " type="text" name="name" id="name" value="{{ old('name', $targetCategory->name) }}"/>
                                    <input type="hidden" name="id" value="{{ $targetCategory->id }}">
                                    @error('name') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <label>Description</label>

                                <div class="form-group">
                                    @if ($targetCategory->description == null)
                                    <label class="bmd-label-floating" for="description">Ennter description:</label>
                                    @endif
                                    <textarea class="form-control" rows="4" name="description" id="description">{{ old('description', $targetCategory->description) }}</textarea>
                                </div>

                            </div>
                        </div>
                        
                        <div class="row" style="padding-bottom: 15px;">
                            <div class="col-md-12 @error('parent_id') is-invalid @enderror">
                                
                                <label for="parent">Parent Category <span class="m-l-5 text-danger"> *</span></label>
                                <div class="custom-select">
                                    <select name="parent_id" id="parent" class="">
                                        <option value="0">Select a parent category:</option>
                                        @foreach($categories as $category)
                                            @if ($targetCategory->parent_id == $category->id)
                                                <option value="{{ $category->id }}" selected> {{ $category->name }} </option>
                                            @else
                                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                @error('parent_id') {{ $message }} @enderror

                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="featured" name="featured" {{ $targetCategory->featured == 1 ? 'checked' : '' }} />Featured Category
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="menu" name="menu" {{ $targetCategory->menu == 1 ? 'checked' : '' }} />Show in Menu
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-md-2">
                                @if ($targetCategory->image != null)
                                    <figure class="mt-2" style="width: 80px; height: auto;">
                                        <img src="{{ asset('storage/'.$targetCategory->image) }}" id="categoryImage" class="img-fluid" alt="img">
                                    </figure>
                                @endif
                            </div>
                            <div class="col-md-10 @error('image') is-invalid @enderror">
                                <label class="control-label">Category Image</label>
                                <div class="custom-file pmd-custom-file category_img">
                                    <input type="file" class="custom-file-input form-control" id="image" name="image" />
                                    <label class="custom-file-label non-click-input" for="image">Choose file</label>
                                </div>
                                @error('image') {{ $message }} @enderror
                            </div>
                               
                        </div>

                        <!-- -->
                        <div class="">
                        
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right btn_style">Update Category</button>
                                &nbsp;&nbsp;&nbsp;
                                <a class="btn btn-default user-cancel-btn pull-right" href="{{ route('admin.categories.index') }}"><i class="material-icons">code</i> Cancel</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
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

        


@endsection
@push('scripts')
    <script>

        $('#image').focus(function(){
            $('.category_img label').toggleClass('non-click-input click-input');
        }).blur(function(){
            $('.category_img label').toggleClass('click-input non-click-input');
        });
        
    </script>
@endpush