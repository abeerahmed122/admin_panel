@section('title')
CyberShelf Library admins
@endsection

@section('name')
<li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">Omnia</span></h1>
              <h3 class="welcome-sub-text">CyperShelf Library performance summary this week </h3>
            </li>
@endsection
<x-layout>
<div class="main-panel">
<div class="row">
                        <div class="col-lg-7 d-flex flex-column" style="margin-top:50px;margin-left:40px;">
                          <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">User visits Line Chart</h4>
                                      <h5 class="card-subtitle card-subtitle-dash">Shows number of visitors this week compared to their number last week</h5>
                                    </div>
                                    <div id="performanceLine-legend"></div>
                                  </div>
                                  <div class="chartjs-wrapper mt-4">
                                    <canvas id="performanceLine" width=""></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column" style="margin-top:50px;">
                            <div class="row flex-grow">
                              <div class="col-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                          <h4 class="card-title card-title-dash">Tasks List</h4>
                                          <h5 class="card-subtitle card-subtitle-dash">Keep track of your tasks</h5>
                                          <div class="add-items d-flex mb-0">
                                            <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                          </div>
                                        </div>
                                        <div class="list-wrapper">
                                          <ul class="todo-list todo-list-rounded">
                                            <li class="d-block">
                                              <div class="form-check w-100">
                                                <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox"> Add "Milion little lies" (new book) 
                                                  <i class="input-helper rounded"></i>
                                                </label>
                                                <div class="d-flex mt-2">
                                                  <div class="ps-4 text-small me-3">16 August 2024</div>
                                                  <div class="badge badge-opacity-danger me-3">Due tomorrow</div>
                                                  <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                </div>
                                              </div>
                                            </li>
                                            <li class="d-block">
                                              <div class="form-check w-100">
                                                <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox" checked> Update "Angels and demons" author to "Dan Brown" 
                                                  <i class="input-helper rounded"></i>
                                                </label>
                                                <div class="d-flex mt-2">
                                                  <div class="ps-4 text-small me-3">16 August 2024</div>
                                                  <div class="badge badge-opacity-success me-3">Done</div>
                                                </div>
                                              </div>
                                            </li>
                                            <li>
                                              <div class="form-check w-100">
                                                <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox" checked >Add "The Da Vinci code" (new book) 
                                                  <i class="input-helper rounded"></i>
                                                </label>
                                                <div class="d-flex mt-2">
                                                  <div class="ps-4 text-small me-3">17 August 2024</div>
                                                  <div class="badge badge-opacity-success me-3">Done</div>
                                                </div>
                                              </div>
                                            </li>
                                            <li class="border-bottom-0">
                                              <div class="form-check w-100">
                                                <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox"> Notify user01 to return "The lost symbol"
                                                  <i class="input-helper rounded"></i>
                                                </label>
                                                <div class="d-flex mt-2">
                                                  <div class="ps-4 text-small me-3">20 August 2024</div>
                                                  <div class="badge badge-opacity-warning me-3">Due 1 September 2024</div>
                                                </div>
                                              </div>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="row flex-grow">
                            <div class="col-11 grid-margin stretch-card" style="margin-left:40px;">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-11">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                          <h4 class="card-title card-title-dash">Most Viewed This Month</h4>
                                        </div>
                                      </div>
                                      <div class="mt-3">
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="/images/book01.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Really good,Actually <span class="ms-1 mb-1 fw-bold text-danger">1st Place</span></p>
                                              <small class="text-muted mb-0 text-success">Read 1763 times</small>
                                            </div>
                                          </div>
                                          </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="/images/book03.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Soul</p>
                                              <small class="text-muted mb-0">Read 1751 times</small>
                                            </div>
                                          </div></div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="/images/book02.webp" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Alone</p>
                                              <small class="text-muted mb-0">Read 1730 times</small>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="/images/book04.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">The Moon And The Stars</p>
                                              <small class="text-muted mb-0">Read 1726 times</small>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="/images/book05.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Harry Potter And The Cursed Child</p>
                                              <small class="text-muted mb-0">Read 1722 times</small>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
                            
                            </x-layout>

                          
                          <script>
                          $(document).ready(function(){
                            $(document).on('input',"#search",function(){
                              alert();
                              var search=$(this).val();
                              jQuery.ajax(){
                                url: "{{route('search')}}",
                                type:'post',
                                datatype:'html',
                                cache:false,
                                data:{search:search,"_token":"{{ csrf_token()}}" },
                                success:function(){

                                },
                                error:function(){

                                }
                              }

                            });
                          });
</script>
                         