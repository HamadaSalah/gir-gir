@extends('layouts.app')
@section('title' , 'Home Page')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <style>.rating-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row-reverse;
      padding: 0;
      gap: 10px;
      border-radius: 75px;
      position: relative;
    }
    .rating-container .rating-value {
      display: none;
      position: absolute;
      top: -10px;
      left: -69px;
      border-radius: 50%;
      height: 80px;
      width: 80px;
      background: #ffbb00;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075), 0 2px 2px rgba(0, 0, 0, 0.075), 0 4px 4px rgba(0, 0, 0, 0.075), 0 8px 8px rgba(0, 0, 0, 0.075), 0 16px 16px rgba(0, 0, 0, 0.075), inset 0 0 10px #f7db5e, 0 0 10px #f7db5e;
    }
    .rating-container .rating-value:before {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      text-align: center;
      line-height: 80px;
      font-size: 2.5em;
      color: #2b2b2b;
      content: "0";
      transform-origin: "center center";
      transition: all 0.25s ease 0s;
    }
    .rating-container .rating-value:after {
      content: "";
      position: absolute;
      height: 80px;
      width: 80px;
      top: -1px;
      left: -1px;
      margin: auto;
      border: 1px solid #ffbb00;
      border-radius: 50%;
      transition: all 0.4s ease-in;
    }
    .rating-container input {
      display: none;
    }
    .rating-container label {
      height: 50px;
      width: 50px;
      transform-origin: "center center";
    }
    .rating-container label svg {
      transition: transform 0.4s ease-in-out;
      opacity: 0.5;
    }
    .rating-container label:hover svg {
      transform: scale(1.25) rotate(10deg);
    }
    
    input:checked ~ label svg {
      opacity: 1;
      transform: scale(1.25) rotate(10deg);
    }
    
    label:hover svg,
    label:hover ~ label svg {
      opacity: 1;
      transform: scale(1.25) rotate(10deg);
    }
    
    input:checked + label:hover svg {
      opacity: 1;
    }
    input:checked ~ label:hover svg,
    input:checked ~ label:hover ~ label svg {
      opacity: 1;
    }
    
    label:hover ~ input:checked ~ label svg {
      opacity: 1;
    }
    
    #rate1:checked ~ .rating-value:before {
      content: "1";
      font-size: 2.75em;
    }
    
    label[for=rate1]:hover ~ .rating-value:before {
      content: "1" !important;
      font-size: 2.75em !important;
    }
    
    #rate2:checked ~ .rating-value:before {
      content: "2";
      font-size: 3em;
    }
    
    label[for=rate2]:hover ~ .rating-value:before {
      content: "2" !important;
      font-size: 3em !important;
    }
    
    #rate3:checked ~ .rating-value:before {
      content: "3";
      font-size: 3.25em;
    }
    
    label[for=rate3]:hover ~ .rating-value:before {
      content: "3" !important;
      font-size: 3.25em !important;
    }
    
    #rate4:checked ~ .rating-value:before {
      content: "4";
      font-size: 3.5em;
    }
    
    label[for=rate4]:hover ~ .rating-value:before {
      content: "4" !important;
      font-size: 3.5em !important;
    }
    
    #rate5:checked ~ .rating-value:before {
      content: "5";
      font-size: 3.75em;
    }
    
    @keyframes pulse {
      0% {
        height: 80px;
        width: 80px;
        top: -1px;
        left: -1px;
        opacity: 1;
      }
      100% {
        height: 170px;
        width: 170px;
        top: -16px;
        left: -16px;
        opacity: 0;
      }
    }
    #rate5:checked ~ .rating-value:after {
      animation: pulse 0.4s ease-out 1;
    }
    
    label[for=rate5]:hover ~ .rating-value:before {
      content: "5" !important;
      font-size: 3.75em !important;
    }</style>
@endpush

@section('content')
 
<body>
 
    <!-- writes your Order Details here -->
    <section class="k-order-details bg-main">
      <div class="container">
        <!-- Breadcrumb -->
 
        <div class="row mt-5">
          <!-- Main Content (Orders and Invoices + Track Order) -->
          <div class="col-12 col-lg-8 orders-invoices">
            <!-- Section for Steps -->
            <div class="col-12 steps-section mb-5">
              <div class="steps">
                <div class="step">
                  <div class="icon">
                    <img src="/imgs/k-true.svg" alt="true" loading="lazy" />
                  </div>
                  <span>Request a service</span>
                </div>
                <div class="step">
                  <div class="icon">
                    <img src="/imgs/k-true.svg" alt="true" loading="lazy" />
                  </div>
                  <span>Confirm order</span>
                </div>
                <div class="step">
                  <div class="icon">
                    <img src="/imgs/k-true.svg" alt="true" loading="lazy" />
                  </div>
                  <span>Service agreed</span>
                </div>
                <div class="step">
                  <div class="icon">
                    <img src="/imgs/k-true.svg" alt="true" loading="lazy" />
                  </div>
                  <span>OrderEnd</span>
                </div>
              </div>
            </div>
            <div class="invoice-card mb-4">
              <div class="box">
                <div class="box-content d-flex justify-content-between">
                  <div class="text">
                    <h3>
                      <img src="/imgs/k-shop.svg" alt="shop" loading="lazy" />
                      DJ shop
                    </h3>
                    <p>
                      Total Discount :
                      <span>0 $ </span>
                    </p>
                    <p>
                      Total Amount :
                      <span>{{ $order->total }} $ </span>
                    </p>
                  </div>
                  <div class="text">
                    <h3>
                      <img
                        src="/imgs/k-invoice.svg"
                        alt="shop"
                        loading="lazy"
                      />
                      Invoice for DJ booking
                    </h3>
                    <p>
                      Date:
                      <span>{{ $order->created_at }}</span>
                    </p>
                    <p>
                      Status :
                      <span>Paid </span>
                    </p>
                  </div>
                </div>
                <div class="send">
                  <a href="#"> Send To Email </a>
                  <a  onclick="printOrder()" > Print Now </a>
                </div>
                
              </div>
            </div>
            <div class="details-section">
              <div class="details-left">
                <h3>Details:</h3>
                <p>Name : <span>{{ $order->user->name }}</span></p>
                <p>Date : <span>{{ $order->created_at }}</span></p>
                <p>Invoice number : <span>{{ $order->invoice_number }}</span></p>
                <p>Providers : <span>{{ $order->provider->name}}</span></p>
              </div>
              <div class="details-right">
                @foreach ($order->items as $item)
                  <p>{{ class_basename($item->orderable_type) }} name : <span>{{ $item->orderable->name }}</span></p>
                  <h3>{{ class_basename($item->orderable_type) }} details :</h3>
                  <ul>
                    
                    <li>{{ $item->orderable->description }}</li>
                    {{-- {{(int)$order->delivery_status}} --}}
                  </ul>
                  
                    <hr>
                @endforeach
                <button   type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Rate it Now <i class="fa-solid fa-star"></i></button>
              </div>
            </div>
          </div>

          <!-- Track Order Details Section -->
          <section class="col-12 col-lg-4 track-order">
            <h3 class="track-title">Track Order</h3>
            <div class="track-status">
              <!-- Tracking steps content here -->
              <div class="step active " >
                <div class="icon">
                  <img
                    src="/imgs/k-track-order1.svg"
                    alt="track"
                    loading="lazy"
                  />
                </div>
                <div class="content">
                  <h3>Received request</h3>
                  <p>
                    Your request has been successfully received and is being
                    reviewed.
                  </p>
                </div>
              </div>

              <div class="step <?php if((int)$order->delivery_status >=2) echo 'active';?>">
                <div class="icon">
                  <img
                    src="/imgs/k-track-order2.svg"
                    alt="track"
                    loading="lazy"
                  />
                </div>
                <div class="content">
                  <h3>Set the installation</h3>
                  <p>
                    A worker has been assigned to install or deliver the
                    decorations and ornaments to you.
                  </p>
                </div>
              </div>

              <div class="step <?php if((int)$order->delivery_status >=3) echo 'active';?>">
                <div class="icon">
                  <img
                    src="/imgs/k-track-order3.svg"
                    alt="track"
                    loading="lazy"
                  />
                </div>
                <div class="content">
                  <h3>The visit has been scheduled</h3>
                  <p>
                    The appointment is scheduled for 5/3/2024 at 11:00 AM.
                  </p>
                </div>
              </div>

              <div class="step <?php if((int)$order->delivery_status >=4) echo 'active';?>">
                <div class="icon">
                  <img
                    src="/imgs/k-track-order4.svg"
                    alt="track"
                    loading="lazy"
                  />
                </div>
                <div class="content">
                  <h3>worker on the road</h3>
                  <p>Technician on the way to your location</p>
                </div>
              </div>

              <div class="step <?php if((int)$order->delivery_status >=5) echo 'active';?>">
                <div class="icon">
                  <img
                    src="/imgs/k-track-order5.svg"
                    alt="track"
                    loading="lazy"
                  />
                </div>
                <div class="content">
                  <h3>Get started</h3>
                  <p>The worker has started working on your order.</p>
                </div>
              </div>

              <div class="step <?php if((int)$order->delivery_status >=6) echo 'active';?>">
                <div class="icon">
                  <img
                    src="/imgs/k-track-order6.svg"
                    alt="track"
                    loading="lazy"
                  />
                </div>
                <div class="content">
                  <h3>Work completed</h3>
                  <p>
                    Your order has been completed, please rate the service and
                    provide your feedback.
                  </p>
                </div>
              </div>

              <div class="step <?php if((int)$order->delivery_status >=7) echo 'active';?>">
                <div class="icon" onclick="openFeedbackPopup()">
                  <img
                    src="/imgs/k-track-order7.svg"
                    alt="track"
                    loading="lazy"
                  />
                </div>
                <div class="content">
                  <h3>Service feedback</h3>
                  <p>
                    The service has not been rated. Rate it now and get 100
                    coins.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <div id="feedbackPopup" class="popup">
            <div class="popup-content">
              <span class="close" onclick="closeFeedbackPopup()"
                >&times;</span
              >
              <h2>Feedback</h2>
              <form id="feedbackForm">
                <label>
                  <input type="radio" name="rating" value="5" checked />
                  5 star
                  <span class="stars">
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                  </span>
                </label>
                <label>
                  <input type="radio" name="rating" value="4" />
                  4 star
                  <span class="stars">
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star"
                  /></span>
                </label>
                <label>
                  <input type="radio" name="rating" value="3" />
                  3 star
                  <span class="stars">
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star"
                  /></span>
                </label>
                <label>
                  <input type="radio" name="rating" value="2" />
                  2 star
                  <span class="stars">
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star"
                  /></span>
                </label>
                <label>
                  <input type="radio" name="rating" value="1" />
                  1 star
                  <span class="stars">
                    <img src="/imgs/k-active-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star" />
                    <img src="/imgs/k-ractive-star.svg" alt="star"
                  /></span>
                </label>
                <textarea placeholder="Write us your feedback"></textarea>
                <div class="buttons">
                  <button
                    type="button"
                    class="cancel"
                    onclick="closeFeedbackPopup()"
                  >
                    Cancel
                  </button>
                  <button type="submit" class="send">Send</button>
                </div>
              </form>
            </div>
          </div>

          
        </div>
      </div>
    </section>
    <div id="order-card" class="card card-custom align-items-center mt-3" style="width: 100%; padding: 15px;border:1px solid #83044a">
      <img src="http://gir-gir.test/imgs/gir.png" alt="" width="100px">

      <!-- Row for Name and Order Date -->
      <div style="flex: 1; display: flex; justify-content: space-between; width: 100%;margin-top: 5px">
          <div>
              <small style="font-size: 0.8rem;">Name:</small>
              <small style="font-size: 0.8rem; margin-left: 5px;">Merlin Jones</small>
          </div>
          <div>
              <small style="font-size: 0.8rem;">Order Date:</small>
              <small style="font-size: 0.8rem; margin-left: 5px;">26-10-2024</small>
          </div>
      </div>

      <!-- Row for Invoice number and Order Time -->
      <div style="flex: 1;  display: flex; justify-content: space-between;width: 100%">
          <div>
              <small style="font-size: 0.8rem;">Invoice number:</small>
              <small style="font-size: 0.8rem; margin-left: 5px;">671d2742b1d9a</small>
          </div>
          <div>
              <small style="font-size: 0.8rem;">Order Time:</small>
              <small style="font-size: 0.8rem; margin-left: 5px;">17:30</small>
          </div>
      </div>

      <!-- Row for Phone number and Status -->
      <div style="flex: 1; display: flex; justify-content: space-between;width: 100%">
          <div>
              <small style="font-size: 0.8rem;">Phone number:</small>
              <small style="font-size: 0.8rem; margin-left: 5px;">1-480-338-3240</small>
          </div>
          <div>
              <small style="font-size: 0.8rem;">Status:</small>
              <small style="font-size: 0.8rem; margin-left: 5px;">Approved</small>
          </div>
      </div>
  <hr color="black" width="100%">
  <div class="d-flex justify-content-between" id="contentToPrint" style="width: 100%;">
      <div>
          <div>
              <small style="font-size: 0.8rem;">Execution Date:</small>
              <small style="font-size: 0.8rem; margin-left: 5px;">19-10-2024</small>
              <br>
              <small style="font-size: 0.8rem;">Execution Time:</small>
              <small style="font-size: 0.8rem; margin-left: 5px;">00:00</small><br>

                                      <small style="font-size: 0.8rem;">Package Name:</small>
                  <small style="font-size: 0.8rem; margin-left: 5px;">Pink Theme Weddingeeeee</small><br>
                  <small style="font-size: 0.8rem;">Package No:</small>
                  <small style="font-size: 0.8rem; margin-left: 5px;">1</small>
                  <br>
                  <strong style="font-size: 0.8rem;">Package Details:</strong><br>
                  <small style="font-size: 0.8rem">100 Guests, DJ Muisc, Drinks, Decor 100 Guests 100 Guests, DJ Muisc, Drinks, Decor</small><br>
                              </div>
          <strong style="font-size: 0.8rem;">Order Location</strong><br>
          <small style="font-size: 0.8rem">Order Location</small><br>
      </div>
      <div style="width: 1px; background-color: #ccc; margin: 0 15px;"></div>
      <div style="text-align: left;">
          <strong style="font-size: 0.8rem;">Order Location</strong><br>
          <small style="font-size: 0.8rem">Order Location</small><br>
      </div>
  </div>

  <div class="d-flex justify-content-between" style="width: 100%;">
      <div>
          <strong style="font-size: 0.8rem;">Providers:</strong>
          <strong style="font-size: 0.8rem; margin-left: 5px;">Hamada Shops</strong><br>
          <strong style="font-size: 0.8rem;">Total Amount:</strong>
          <strong style="font-size: 0.8rem; margin-left: 5px;">200.00$</strong><br>
      </div>
      {{-- <div onclick="printOrder()" style="flex-direction: column;display: flex;align-items: center;text-align: left;">
<img src="http://gir-gir.test/imgs/print.png" alt="" width="70px">
<strong>Print</strong>
      </div> --}}
  </div>
  </div>
    <footer>
      <div class="footer-container">
        <div class="footer-logo">
          <h2>
            Gir <img style="width: 30%" src="./imgs/Vectorgir.png" alt="" />
            <br />
            Events
          </h2>
        </div>
        <div class="footer-links">
          <div class="footer-section">
            <h4>Legal Information</h4>
            <ul>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Cookie Policy</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h4>Navigation Links</h4>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h4>For Provider</h4>
            <ul>
              <li><a href="#">Join now</a></li>
              <li><a href="#">Sign in</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h4>Wedding Ideas</h4>
            <ul>
              <li><a href="#">Summer Weddings</a></li>
              <li><a href="#">Real Weddings</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h4>Birthday Ideas</h4>
            <ul>
              <li><a href="#">Summer Birthdays</a></li>
              <li><a href="#">Real Birthdays</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-social">
          <a href="#">
            <img src="{{ asset('') }}social/instagram.svg" alt="Facebook"/>
          </a>
          <a href="#">
            <img src="{{ asset('') }}social/facebook.svg" alt="Facebook"/>
          </a>
          <a href="#">
            <img src="{{ asset('') }}social/twitter.svg" alt="Facebook"/>
          </a>
          <a href="#">
            <img src="{{ asset('') }}social/tiktok.svg" alt="Facebook"/>
          </a>
          <a href="#">
            <img src="{{ asset('') }}social/yt.svg" alt="Facebook"/>
          </a>
        </div>
        <div class="footer-apps">
          <h4>Get the app</h4>
          <a href="#"
            ><img
              src="{{ asset('') }}imgs/app-store.24ce31e7a13056d542d1.png"
              alt="App Store"
          /></a>
          <a href="#"
            ><img
              src="{{ asset('') }}imgs/googleApp.8f241223f55c067c2fb6.png"
              alt="Google Play"
          /></a>
        </div>
      </div>
      <div class="col-12">
        <div class="footer-bottom">
          <p>Company, 2024.</p>
        </div>
      </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/orderDetails.js"></script>
  </body>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('rating') }}" method="POST">
            @csrf
            <input type="hidden" name="package_id" value="{{$order->items[0]->orderable->id}}">
            <fieldset class="rating-container">	
              <input type="radio" name="rate" id="rate5" value="5">
              <label for="rate5">
                <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122"><defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs><path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/><path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/><path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/></svg>
              </label>
              <input type="radio" name="rate" id="rate4" value="5"> 
              <label for="rate4">
                <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122"><defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs><path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/><path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/><path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/></svg>
              </label>
              <input type="radio" name="rate" id="rate3" value="3">
              <label for="rate3">
                <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122"><defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs><path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/><path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/><path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/></svg>
              </label>
              <input type="radio" name="rate" id="rate2" value="2">
              <label for="rate2">
                <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122"><defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs><path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/><path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/><path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/></svg>
              </label>
              <input type="radio" name="rate" id="rate1" value="1">
              <label for="rate1">
                <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122"><defs><style>.cls-1{fill:#f7db5e;}.cls-2{fill:#f3cc30;}.cls-3{fill:#edbd31;}</style></defs><path class="cls-2" d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z"/><path class="cls-1" d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z"/><path class="cls-3" d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z"/></svg>
              </label>
              <div class="rating-value"></div>
            </fieldset>
            <!-- partial -->
            <div class="form-group">
              <label for="exampleFormControlTextarea3"></label>
              <textarea name="comment" class="form-control mt-1" id="exampleFormControlTextarea3" placeholder="Your Comment" rows="7"></textarea>
            </div>   
            <button type="submit" class="btn btn-primary mt-2">Rate Now</button>  
          </form>
     
        </div>
      </div>
    </div>
  </div>

@endsection  
<script>
  const ratingContainer = document.querySelector('.rating-container');
const ratingValueDisplay = document.querySelector('.rating-value');

// Add an event listener to detect changes in the rating
ratingContainer.addEventListener('change', () => {
    const selectedRating = document.querySelector('input[name="rate"]:checked').value;
    ratingValueDisplay.textContent = `Selected Rating: ${selectedRating}`;
});

  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

    function printOrder() {
        // Create a new window
        const printWindow = window.open('', '_blank', 'width=800,height=600');

        // Get the content of the order card
        const content = document.getElementById('order-card').innerHTML;

        // Write the content to the new window
        printWindow.document.write(`
            <html>
                <head>
                    <title>Print Order</title>
                    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS -->
                    <style>
                      .header-controls {
                        display: none!important
                      }
                        /* Include styles for the order card here */
                        body {
                            font-family: verdana, sans-serif;
                            margin: 20px;
                        }
                        /* Add your custom styles */
                        #order-card {
                            border: 1px solid #ddd; /* Example border */
                            padding: 20px;
                            border-radius: 5px; /* Rounded corners */
                        }
                        /* Hide buttons in print view */
                        .btn {
                            display: none;
                        }
                    </style>
                </head>
                <body>
                    <div id="order-card">
                        ${content}
                    </div>
                </body>
            </html>
        `);
        // Close the document to finish loading
        printWindow.document.close();

        // Wait for the new window to load completely
        printWindow.onload = function() {
            // Trigger the print dialog
  
            printWindow.print();
  
                // printWindow.close(); // Optionally close the window after printing
        };
    }
</script>
<style>
  #order-card {
      display: none
    }
    .translate-tooltip-mtz.translator-hidden {
      display:  none!important
    }
    .header-controls {
      display: none!important

    }
  @media print {
    .header-controls {
      display: none!important
    }
    
  }
</style>
@push('js')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="{{ asset('js/orderDetails.js') }}"></script>
@endpush
