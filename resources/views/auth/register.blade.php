
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} | Register</title>
    <link rel="stylesheet" href="{{ asset('auth') }}/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('auth') }}/css/sign.css" />
  </head>
  <body>
    <div class="col-12 d-flex">
      <!-- - -->
      <div class="col-5 register-img">
        <img class="col-12" src="{{ asset('') }}imgs/signup.webp" alt="" />
      </div>
      <!-- - -->
      <div class="col-7">
        <div class="container col-9">
          <div class="logo">
            <img src="{{ asset('') }}imgs/logo.svg" alt="" />
          </div>
          <h2 class="mt-2">Register</h2>
          <p>Welcome, register to join our community.</p>
        </div>
        <!-- StartForm -->
        <div class="container register-form col-9">
          <form action="" method="POST" id="registrationForm">

            @csrf

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <div class="fullname d-flex mt-4">
              <div class="col-5 position-relative">
                <input
                  type="text"
                  class="form-control rounded-5 bg-secondary border-0"
                  placeholder=""
                  id="firstName"
                  name="first_name"
                />
                <label for="firstName">First Name</label>
              </div>
              <div class="col-5 position-relative ms-1">
                <input
                  type="text"
                  class="form-control rounded-5 bg-secondary border-0"
                  placeholder=""
                  id="lastName"
                  name="last_name"
                />
                <label for="lastName">Last Name</label>
              </div>
            </div>
            <!-- email -->
            <div class="col-10 position-relative mt-4">
              <input
                type="email"
                class="form-control rounded-5 bg-secondary border-0"
                placeholder=""
                id="email"
                name="email"
              />
              <label for="email">Email</label>
            </div>
            <!-- password -->
            <div class="col-10 position-relative mt-4">
              <input
                type="password"
                class="form-control rounded-5 bg-secondary border-0"
                placeholder=""
                id="password"
                name="password"
              />
              <label for="password">Password</label>
              <button type="button" id="togglePassword" class="btn btn-link">
                <img src="{{ asset('') }}imgs/show_pass_icon.svg" alt="Toggle Visibility" />
              </button>
            </div>
            <!-- re-password -->
            <div class="col-10 position-relative mt-4">
              <input
                type="password"
                class="form-control rounded-5 bg-secondary border-0"
                placeholder=""
                id="re-password"
                name="password_confirmation"
              />
              <label for="re-password">Re-enter Password</label>
              <button type="button" id="toggleRePassword" class="btn btn-link">
                <img src="{{ asset('') }}imgs/show_pass_icon.svg" alt="Toggle Visibility" />
              </button>
            </div>
            <div id="passwordMessage" class="d-none"></div>
            <!-- phone number -->
            <div class="col-10 position-relative mt-5 d-flex">
                <select
                  class="form-select bg-secondary border-0"
                  id="country"
                  style="width: 100px; margin-right: 2px; border-radius: 25px;"
                  name="countryCode"
                >
                  <option value="+1">United States (+1)</option>
                  <option value="+1">Canada (+1)</option>
                  <option value="+44">United Kingdom (+44)</option>
                  <option value="+61">Australia (+61)</option>
                  <option value="+49">Germany (+49)</option>
                  <option value="+33">France (+33)</option>
                  <option value="+39">Italy (+39)</option>
                  <option value="+81">Japan (+81)</option>
                  <option value="+86">China (+86)</option>
                  <option value="+91">India (+91)</option>
                  <option value="+55">Brazil (+55)</option>
                  <option value="+27">South Africa (+27)</option>
                  <option value="+52">Mexico (+52)</option>
                  <option value="+7">Russia (+7)</option>
                  <option value="+82">South Korea (+82)</option>
                  <option value="+34">Spain (+34)</option>
                  <option value="+46">Sweden (+46)</option>
                  <option value="+31">Netherlands (+31)</option>
                  <option value="+41">Switzerland (+41)</option>
                  <option value="+54">Argentina (+54)</option>
                  <option value="+65">Singapore (+65)</option>
                  <option value="+47">Norway (+47)</option>
                  <option value="+971">United Arab Emirates (+971)</option>
                  <option value="+353">Ireland (+353)</option>
                  <option value="+213">Algeria (+213)</option>
                  <option value="+973">Bahrain (+973)</option>
                  <option value="+253">Djibouti (+253)</option>
                  <option value="+20">Egypt (+20)</option>
                  <option value="+964">Iraq (+964)</option>
                  <option value="+962">Jordan (+962)</option>
                  <option value="+965">Kuwait (+965)</option>
                  <option value="+961">Lebanon (+961)</option>
                  <option value="+218">Libya (+218)</option>
                  <option value="+222">Mauritania (+222)</option>
                  <option value="+212">Morocco (+212)</option>
                  <option value="+968">Oman (+968)</option>
                  <option value="+974">Qatar (+974)</option>
                  <option value="+966">Saudi Arabia (+966)</option>
                  <option value="+249">Sudan (+249)</option>
                  <option value="+963">Syria (+963)</option>
                  <option value="+216">Tunisia (+216)</option>
                  <option value="+971">United Arab Emirates (+971)</option>
                  <option value="+967">Yemen (+967)</option>
                  <option value="+970">Palestine (+970)</option>
                  <option value="+973">Bahrain (+973)</option>
                </select>
                <div class="containerPhone col-10 position-relative">
                  <input
                    type="text"
                    class="form-control rounded-5 bg-secondary border-0"
                    placeholder=""
                    id="PhoneNumber"
                    name="phone"
                  />
                  <label for="PhoneNumber">Phone Number</label>
                </div>
              </div>
            <!-- Account type -->
            <p class="mt-1">Account type</p>
            <div class="col-10 position-relative">
              <!-- Main Dropdown -->
              <select
                id="mainSelect"
                name="type"
                class="col-12 form-control rounded-5 bg-secondary border-0"
              >
                <option value="user">User</option>
                <option value="company">Company service providers</option>
                <option value="individual">Individual service providers</option>
              </select>

              <!-- Inputs for "Company Provider" -->
              <div id="companyInputs" class="d-none col-12 mt-2">
                <!-- companyId -->
                <div class="position-relative col-12 mt-4">
                  <input
                    class="form-control rounded-5 bg-secondary border-0 mt-2 col-12"
                    type="text"
                    id="companyId"
                    placeholder=""
                    value="{{ session('company_code') }}"
                    disabled
                  />
                  <label for="companyId">Admin Company ID</label>
                </div>
                <!-- AccountBusinessName -->
                <div class="position-relative col-12 mt-4">
                <input
                  class="form-control rounded-5 bg-secondary border-0 mt-2 col-12"
                  type="text"
                  id="AccountBusinessName "
                  placeholder=""
                  name="company_tag"
                />
                <label for="tag"
                >Account Business Name
              </label>
                </div>
<!-- companyId -->
<div class="position-relative col-12 mt-4">
                <input
                  class="form-control rounded-5 bg-secondary border-0 mt-2 col-12"
                  type="text"
                  id="companyId"
                  placeholder=""
                  name="website"
                />
                <label for="Website">Website</label>
                </div>
              </div>

              <!-- Inputs for " Individual provider" -->
              <div id="userInputs" class="d-none col-12 mt-2">
                <!-- Account Business Name  -->
                <div class="position-relative col-12 mt-4">
                  <input
                    class="form-control rounded-5 bg-secondary border-0 mt-2 col-12"
                    type="text"
                    id="AccountBusinessName"
                    placeholder=""
                    name="individual_tag"
                  />
                  <label for="AccountBusinessName">Account Business Name</label>
                </div>
              </div>
            </div>
            <div class="col-12 position-relative">
                <button class="submit" type="submit">Register</button>
            </div>
          </form>
        </div>
      </div>


      <div class="listIcon">
<img src="{{ asset('') }}imgs/humbruger icon.svg" alt="">
      </div>
    </div>
<!-- js pass -->
    <script>
      // Password visibility toggle
      const passwordInput = document.getElementById("password");
      const rePasswordInput = document.getElementById("re-password");
      const togglePasswordButton = document.getElementById("togglePassword");
      const toggleRePasswordButton =
        document.getElementById("toggleRePassword");
      const passwordMessage = document.getElementById("passwordMessage");

      togglePasswordButton.addEventListener("click", function (e) {
        e.preventDefault();
        // Toggle the type attribute
        passwordInput.type =
          passwordInput.type === "password" ? "text" : "password";
        togglePasswordButton.querySelector("img").src =
          passwordInput.type === "password"
            ? "{{ asset('') }}/imgs/show_pass_icon.svg"
            : "{{ asset('') }}/imgs/show_pass_icon.svg";
      });

      toggleRePasswordButton.addEventListener("click", function (e) {
        e.preventDefault();
        // Toggle the type attribute
        rePasswordInput.type =
          rePasswordInput.type === "password" ? "text" : "password";
        toggleRePasswordButton.querySelector("img").src =
          rePasswordInput.type === "password"
            ? "./imgs/show_pass_icon.svg"
            : "./imgs/show_pass_icon.svg"; // Add your hide icon path here
      });

      // Check if passwords match
      rePasswordInput.addEventListener("input", function () {
        if (passwordInput.value === rePasswordInput.value) {
          passwordMessage.textContent = "The passwords match";
          passwordMessage.className = "success"; // Add success class
        } else {
          passwordMessage.textContent = "The passwords isn't match";
          passwordMessage.className = "error"; // Add error class
        }
        passwordMessage.classList.remove("d-none"); // Show message
      });
    </script>
    <!-- js select -->
    <script>
      const mainSelect = document.getElementById("mainSelect");
      const companyInputs = document.getElementById("companyInputs");
      const userInputs = document.getElementById("userInputs");

      mainSelect.addEventListener("change", function () {
        companyInputs.classList.add("d-none");
        userInputs.classList.add("d-none");

        if (mainSelect.value === "company") {
          companyInputs.classList.remove("d-none");
        } else if (mainSelect.value === "individual") {
          userInputs.classList.remove("d-none");
        }
      });
    </script>
  </body>
</html>
