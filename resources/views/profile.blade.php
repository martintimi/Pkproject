        @extends ('layout.layout')
    @section('content')

    <div class="container py-4 ">
        <div class="row">
            <div class="col-3">
                <div class="card overflow-hidden">
                    <div class="card-body pt-3">
                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">
                                    <span>Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Explore</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Feed</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Terms</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Support</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Settings</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center py-2">
                        <a class="btn btn-link btn-sm" href="#">View Profile </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Idea created Successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <h4> Share yours ideas </h4>
                <div class="row">
                    <div class="mb-3">
                        <textarea class="form-control" id="idea" rows="3"></textarea>
                    </div>
                    <div class="">
                        <button class="btn btn-dark"> Share </button>
                    </div>
                </div>
                <hr>
                <div class="mt-3">
                    <div class="card">
                        <div class="px-3 pt-4 pb-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                                    <div>
                                        <h5 class="card-title mb-0"><a href="#"> Mario
                                            </a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fs-6 fw-light text-muted">
                                comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                                of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                                dolor sit amet..", comes from a line in section 1.10.32.
                            </p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                                        </span> 100 </a>
                                </div>
                                <div>
                                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                        3-5-2023 </span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <textarea class="fs-6 form-control" rows="1"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-sm"> Post Comment </button>
                                </div>

                                <hr>
                                <div class="d-flex align-items-start">
                                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                                        alt="Luigi Avatar">
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="">Luigi
                                            </h6>
                                            <small class="fs-6 fw-light text-muted"> 3 hour
                                                ago</small>
                                        </div>
                                        <p class="fs-6 mt-3 fw-light">
                                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                            Evil)
                                            by
                                            Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                                            very
                                            popular during the Renaissan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header pb-0 border-0">
                        <h5 class="">Search</h5>
                    </div>
                    <div class="card-body">
                        <input placeholder="...
                        " class="form-control w-100" type="text"
                            id="search">
                        <button class="btn btn-dark mt-2"> Search</button>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header pb-0 border-0">
                        <h5 class="">Who to follow</h5>
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-2 mb-3">
                            <div class="avatar">
                                <a href="#!"><img class="avatar-img rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                            </div>
                            <div class="overflow-hidden">
                                <a class="h6 mb-0" href="#!">Sky</a>
                                <p class="mb-0 small text-truncate">@Sky</p>
                            </div>
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                                    class="fa-solid fa-plus"> </i></a>
                        </div>
                        <div class="hstack gap-2 mb-3">
                            <div class="avatar">
                                <a href="#!"><img class="avatar-img rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                            </div>
                            <div class="overflow-hidden">
                                <a class="h6 mb-0" href="#!">Mario Brother</a>
                                <p class="mb-0 small text-truncate">@Mario</p>
                            </div>
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                                    class="fa-solid fa-plus"> </i></a>
                        </div>
                        <div class="d-grid mt-3">
                            <a class="btn btn-sm btn-primary-soft" href="#!">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <form>
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Example select</label>
      <select class="form-select" id="exampleSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Example disabled select</label>
      <select class="form-select" id="exampleDisabledSelect1" disabled="">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect2" class="form-label mt-4">Example multiple select</label>
      <select multiple="" class="form-select" id="exampleSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Default file input example</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <fieldset class="form-group">
      <legend class="mt-4">Radio buttons</legend>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
        <label class="form-check-label" for="optionsRadios1">
          Option one is this and that—be sure to include why it's great
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        <label class="form-check-label" for="optionsRadios2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
        <label class="form-check-label" for="optionsRadios3">
          Option three is disabled
        </label>
      </div>
    </fieldset>
    <fieldset class="form-group">
      <legend class="mt-4">Checkboxes</legend>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Default checkbox
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
        <label class="form-check-label" for="flexCheckChecked">
          Checked checkbox
        </label>
      </div>
    </fieldset>
    <fieldset class="form-group">
      <legend class="mt-4">Switches</legend>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
      </div>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
      </div>
    </fieldset>
    <fieldset class="form-group">
      <legend class="mt-4">Ranges</legend>
        <label for="customRange1" class="form-label">Example range</label>
        <input type="range" class="form-range" id="customRange1">
        <label for="disabledRange" class="form-label">Disabled range</label>
        <input type="range" class="form-range" id="disabledRange" disabled="">
        <label for="customRange3" class="form-label">Example range</label>
        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@endsection
    </div>

   