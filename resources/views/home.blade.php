<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-12 mr-auto mb-5">
                    <h1 class="bold">Life <br/> in a New Light.</h1>
                    <h4 class="mt-4">Introducing Toronto most highly anticipated residential project.</h4>
                    <p class="mt-4">Each home at M2M is constructed around a column of light and is designed to promise health, well being and exceptional living.</p>
                    <p class="mt-4 bold">20 LUXURY TOWN HOMES <br/> IN BROCKTOWN VILLAGE<br/> WEST QUEEN WEST</p>
                    <p class="mt-4 bold">FROM 1.1 MILLION</p>
                  
                    @if (str_contains(Request::fullUrl(), 'register'))
                    <div class="col-12 box" id="registerForm">
                   
                    @else (Request::url() == '/')
                    <div class="col-12 box" id="registerForm"  style="display:none">
                    @endif

                    <div class="row">
                        <h2 class="text-left">Registeration</h2>
                        {{session('message')}}
                        @if($errors->any())

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="row text-right ">
                        <form class="" method="post" action="/register">
                        @csrf
                            <div class="form-group my-1">
                                <input type="text" class="form-control" name="name" placeholder="Name" >
                            </div>
                            <div class="form-group my-1">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                            <div class="form-group my-1">
                            <input type="email" class="form-control" name="email" placeholder="Email" >
                            </div>
                            <div class="form-group my-1">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" >
                            </div>

                            <input type="submit" class="btn-submit mt-1" value="SUBMIT &#65310;" name="submit">
                            </form>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>