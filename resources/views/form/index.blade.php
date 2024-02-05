<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themeon.net/nifty/v3.0.1/forms/general/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2023 07:34:02 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="General form-control live preview. You can copy our examples and paste them into your project!">
    <title>General | Nifty - Admin Template</title>

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.75a07e3a3100a6fed983b15ad1b297c127a8c2335854b0efc3363731475cbed6.css">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="../../assets/css/nifty.min.4d1ebee0c2ac4ed3c2df72b5178fb60181cfff43375388fee0f4af67ecf44050.css">

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~---

    [ REQUIRED ]
    You must include this category in your project.


    [ OPTIONAL ]
    This is an optional plugin. You may choose to include it in your project.


    [ DEMO ]
    Used for demonstration purposes only. This category should NOT be included in your project.


    [ SAMPLE ]
    Here's a sample script that explains how to initialize plugins and/or components: This category should NOT be included in your project.


    Detailed information and more samples can be found in the documentation.

    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->
</head>

<body class="jumping">

    <!-- PAGE CONTAINER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="root" class="root mn--max hd--expanded">

        <!-- CONTENTS -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section id="content" class="content">
            <div class="content__header content__boxed rounded-0">
                <div class="content__wrap">

                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="../index.html">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General</li>
                        </ol>
                    </nav>
                    <!-- END : Breadcrumb -->

                    <h1 class="page-title mb-0 mt-2">General</h1>

                    <p class="lead">
                        General form-control live preview. You can copy our examples and paste them into your project!
                    </p>

                </div>

            </div>

            <div class="content__boxed">
                <div class="content__wrap">

                    <h2 class="mb-3">Form Layouts</h2>
                    <div class="card mb-3">
                        <div class="card-body">

                            <h5 class="card-title">Inline form</h5>

                            <!-- Inline Form -->
                            <form class="row row-cols-md-auto g-3 align-items-center">
                                <div class="col-12">
                                    <label for="_dm-staticEmail" class="visually-hidden">Email</label>
                                    <input type="text" class="form-control" id="_dm-inputEmail" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <label for="_dm-inputPassword" class="visually-hidden">Password</label>
                                    <input type="password" class="form-control" id="_dm-inputPassword" placeholder="Password">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input id="_dm-rememberCheck" class="form-check-input" type="checkbox">
                                        <label for="_dm-rememberCheck" class="form-check-label">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Confirm identity</button>
                                </div>
                            </form>
                            <!-- END : Inline Form -->

                        </div>
                    </div>

                    <section>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Block styled form</h5>

                                        <!-- Block styled form -->
                                        <form class="row g-3">
                                            <div class="col-md-6">
                                                <label for="_dm-inputEmail2" class="form-label">Email</label>
                                                <input id="_dm-inputEmail2" type="email" class="form-control">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="_dm-inputPassword2" class="form-label">Password</label>
                                                <input id="_dm-inputPassword2" type="password" class="form-control">
                                            </div>

                                            <div class="col-12">
                                                <label for="_dm-inputAddress" class="form-label">Address</label>
                                                <input id="_dm-inputAddress" type="text" class="form-control" placeholder="1234 Main St">
                                            </div>

                                            <div class="col-12">
                                                <label for="_dm-inputAddress2" class="form-label">Address 2</label>
                                                <input id="_dm-inputAddress2" type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="_dm-inputCity" class="form-label">City</label>
                                                <input id="_dm-inputCity" type="text" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="inputState" class="form-label">State</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>State 1</option>
                                                    <option>State 2</option>
                                                    <option>State 3</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label for="_dm-inputZip" class="form-label">Zip</label>
                                                <input id="_dm-inputZip" type="text" class="form-control">
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input id="_dm-gridCheck" class="form-check-input" type="checkbox">
                                                    <label for="_dm-gridCheck" class="form-check-label">
                                                        Check me out
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </form>
                                        <!-- END : Block styled form -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Horizontal form</h5>

                                        <!-- Horizontal Form -->
                                        <form>
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail3">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputPassword3">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="_dm-inputAddress3" class="col-sm-2 form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input id="_dm-inputAddress3" type="text" class="form-control" placeholder="1234 Main St">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="_dm-inputAddress4" class="col-sm-2 col-form-label">Address 2</label>
                                                <div class="col-sm-10">
                                                    <input id="_dm-inputAddress4" type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="_dm-inputCity2" class="col-sm-2 col-form-label">City</label>
                                                <div class="col-sm-10">
                                                    <input id="_dm-inputCity2" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <div class="form-check">
                                                        <input id="_dm-rememberCheck3" class="form-check-input" type="checkbox">
                                                        <label for="_dm-rememberCheck3" class="form-check-label">
                                                            Remember Me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                        <!-- END : Horizontal Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2 class="mt-5 mb-3">Form Sizing</h2>
                    <section>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Input size</h5>

                                        <!-- Horizontal form label sizing -->
                                        <div class="row mb-3">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                            </div>
                                        </div>
                                        <!-- END : Horizontal form label sizing -->

                                        <!-- Grid Input Size -->
                                        <div class="row mb-3">
                                            <label for="_dm-inputGrid1" class="col-2 col-form-label">Grid Input</label>
                                            <div class="col-5">
                                                <input id="_dm-inputGrid1" type="text" class="form-control" placeholder=".col-5">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-7 offset-2">
                                                <input id="_dm-inputGrid1" type="text" class="form-control" placeholder=".col-7">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-9 offset-2">
                                                <input id="_dm-inputGrid1" type="text" class="form-control" placeholder=".col-9">
                                            </div>
                                        </div>
                                        <!-- END : Grid Input Size -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">No label form</h5>

                                        <!-- No Label Form -->
                                        <div class="row g-3">
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                                            </div>

                                            <div class="col-sm">
                                                <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                                            </div>

                                            <div class="col-sm">
                                                <input type="text" class="form-control" placeholder="Website" aria-label="Website">
                                            </div>

                                            <div class="col-sm-12">
                                                <textarea class="form-control" placeholder="Message" rows="14"></textarea>
                                            </div>
                                        </div>
                                        <!-- END : No Label Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2 class="mt-5 mb-3">Floating labels <span class="badge bg-info">New</span></h2>
                    <section>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Input</h5>

                                        <!-- Floating label on input field -->
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Email address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>

                                        <form class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
                                            <label for="floatingInputValue">Input with value</label>
                                        </form>
                                        <!-- END : Floating label on input field -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Select and textarea</h5>

                                        <!-- Floating label on select -->
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label for="floatingSelect">Works with selects</label>
                                        </div>
                                        <!-- END : Floating label on select -->

                                        <!-- Floating label on textarea -->
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 140px"></textarea>
                                            <label for="floatingTextarea2">Comments</label>
                                        </div>
                                        <!-- END : Floating label on textarea -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2 class="mt-5 mb-3">Input Groups</h2>
                    <section>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Icons Addons</h5>

                                        <!-- Icons Addons -->
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="demo-pli-star"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Folder Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="demo-pli-inbox-full"></i>
                                            </span>
                                        </div>

                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                                <i class="demo-pli-coin"></i>
                                            </span>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Earning">
                                            <span class="input-group-text">.00</span>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                        </div>
                                        <!-- END : Icons Addons -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Buttons Addons</h5>

                                        <div class="input-group mb-3">
                                            <button class="btn btn-warning" type="button" id="button-addon1">Button</button>
                                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-info" type="button" id="button-addon2">Button</button>
                                        </div>

                                        <div class="input-group mb-3">
                                            <button class="btn btn-secondary" type="button">Button</button>
                                            <button class="btn btn-secondary" type="button">Button</button>
                                            <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                                        </div>

                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                                            <button class="btn btn-success" type="button">Button</button>
                                            <button class="btn btn-success" type="button">Button</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Checkboxes and radio addons</h5>

                                        <!-- Checkbox addons -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with checkbox">
                                        </div>
                                        <!-- END : Checkbox addons -->

                                        <!-- Radio addons-->
                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" name="radio-input-grpup" aria-label="Radio button for following text input">
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with radio button">
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" name="radio-input-grpup" aria-label="Radio button for following text input">
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with radio button">
                                        </div>
                                        <!-- END : Radio addons-->

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Dropdowns Addons</h5>

                                        <!-- Dropdown Addons -->
                                        <div class="input-group mb-3">
                                            <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                            <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>

                                        <div class="input-group">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action before</a></li>
                                                <li><a class="dropdown-item" href="#">Another action before</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                            <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <!-- END : Dropdown Addons -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2 class="mt-5 mb-3">Validation</h2>
                    <section>
                        <div class="card h-100">
                            <div class="card-body">

                                <h5 class="card-title">Validation States</h5>

                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="validationServer01" class="form-label">First name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationServer02" class="form-label">Last name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationServerUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationServer03" class="form-label">City</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationServer04" class="form-label">State</label>
                                        <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationServer05" class="form-label">Zip</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                            <label class="form-check-label" for="invalidCheck3">
                                                Agree to terms and conditions
                                            </label>
                                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </section>

                    <h2 class="mt-5 mb-3">Form elements</h2>
                    <section>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Default state</h5>

                                        <!-- Static Input -->
                                        <div class="row mb-3">
                                            <label for="_dm-staticInput" class="col-sm-3 col-form-label">Static</label>
                                            <div class="col-sm-9">
                                                <input id="_dm-staticInput" type="email" class="form-control-plaintext" value="username">
                                            </div>
                                        </div>
                                        <!-- END : Static Input -->

                                        <!-- Text input -->
                                        <div class="row mb-3">
                                            <label for="_dm-textInput" class="col-sm-3 col-form-label">Text Input</label>
                                            <div class="col-sm-9">
                                                <input id="_dm-textInput" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
                                        <!-- END : Text input -->

                                        <!-- Text input with help -->
                                        <div class="row mb-3">
                                            <label for="_dm-textInputWitHelp" class="col-sm-3 form-label">With Help</label>
                                            <div class="col-sm-9">
                                                <input id="_dm-textInputWitHelp" type="text" class="form-control" placeholder="Input with help" aria-describedby="inputHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                        <!-- END : Text input with help -->

                                        <!-- Floating label -->
                                        <div class="row mb-3">
                                            <label for="_dm-floatingInput" class="col-sm-3 form-label">Floating label</label>
                                            <div class="col-sm-9">
                                                <div class="form-floating mb-3">
                                                    <input id="dm_floatingInput" type="text" class="form-control" placeholder="Username">
                                                    <label for="dm_floatingInput">Username</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Floating label -->

                                        <!-- Readonly -->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Readonly</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                                            </div>
                                        </div>
                                        <!-- END : Readonly -->

                                        <!-- Textarea -->
                                        <div class="row mb-3">
                                            <label for="_dm-textareaInput" class="col-sm-3 col-form-label">Textarea</label>
                                            <div class="col-sm-9">
                                                <textarea id="_dm-textareaInput" class="form-control" placeholder="Textarea" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <!-- END : Textarea -->

                                        <!-- Checkboxes -->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Checkboxes</label>
                                            <div class="col-sm-9 py-2">
                                                <div class="form-check mb-2">
                                                    <input id="_dm-blockCheckboxes" class="form-check-input" type="checkbox" checked>
                                                    <label for="_dm-blockCheckboxes" class="form-check-label">
                                                        Option 1 (pre-checked)
                                                    </label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input id="_dm-blockCheckbox2" class="form-check-input" type="checkbox">
                                                    <label for="_dm-blockCheckbox2" class="form-check-label">
                                                        Option 2
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input id="_dm-blockCheckbox3" class="form-check-input" type="checkbox">
                                                    <label for="_dm-blockCheckbox3" class="form-check-label">
                                                        Option 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Checkboxes -->

                                        <!-- Inline Checkboxes-->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Inline Checkboxes</label>
                                            <div class="col-sm-9 pt-3">
                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-inlineCheckboxes" class="form-check-input" type="checkbox" autocomplete="off" value="option1" checked>
                                                    <label for="_dm-inlineCheckboxes" class="form-check-label">Pre-checked</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-inlineCheckboxes2" class="form-check-input" type="checkbox" autocomplete="off" value="option2">
                                                    <label for="_dm-inlineCheckboxes2" class="form-check-label">Option 2</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-inlineCheckboxes3" class="form-check-input" type="checkbox" autocomplete="off" value="option3">
                                                    <label for="_dm-inlineCheckboxes3" class="form-check-label">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Inline Checkboxes-->

                                        <!-- Radios -->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Radios</label>
                                            <div class="col-sm-9 pt-3">
                                                <div class="form-check mb-2">
                                                    <input id="_dm-blockRadios" class="form-check-input" type="radio" name="radioBlockDefault" checked>
                                                    <label for="_dm-blockRadios" class="form-check-label">
                                                        Option 1 ( Pre-checked )
                                                    </label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input id="_dm-blockRadios2" class="form-check-input" type="radio" name="radioBlockDefault">
                                                    <label for="_dm-blockRadios2" class="form-check-label">
                                                        Option 2
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input id="_dm-blockRadios3" class="form-check-input" type="radio" name="radioBlockDefault">
                                                    <label for="_dm-blockRadios3" class="form-check-label">
                                                        Option 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Radios -->

                                        <!-- Inline Radios -->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Inline radios</label>
                                            <div class="col-sm-9 pt-3">
                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-inlineRadio1" class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" checked>
                                                    <label for="_dm-inlineRadio1" class="form-check-label">Pre-checked</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-inlineRadio2" class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                                    <label for="_dm-inlineRadio2" class="form-check-label">Option 2</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-inlineRadio3" class="form-check-input" type="radio" name="inlineRadioOptions" value="option3">
                                                    <label for="_dm-inlineRadio3" class="form-check-label">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Inline Radios -->

                                        <!-- File Input -->
                                        <div class="row mb-3">
                                            <label for="_dm-fileInput" class="col-sm-3 col-form-label">File input</label>
                                            <div class="col-sm-9">
                                                <input id="_dm-fileInput" class="form-control" type="file">
                                            </div>
                                        </div>
                                        <!-- END : File Input -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">

                                        <h5 class="card-title">Disabled</h5>

                                        <!-- Disabled static Input -->
                                        <div class="row mb-3">
                                            <label for="_dm-disabledStaticInput" class="col-sm-3 col-form-label">Static</label>
                                            <div class="col-sm-9">
                                                <input id="_dm-disabledStaticInput" type="email" class="form-control-plaintext" value="username" disabled>
                                            </div>
                                        </div>
                                        <!-- END : Disabled static Input -->

                                        <!-- Disabled text input -->
                                        <div class="row mb-3">
                                            <label for="_dm-disabledTextInput" class="col-sm-3 col-form-label">Text Input</label>
                                            <div class="col-sm-9">
                                                <input id="_dm-disabledTextInput" type="text" class="form-control" placeholder="Default Input" disabled>
                                            </div>
                                        </div>
                                        <!-- END : Disabled text input -->

                                        <!-- Disabled text input with help -->
                                        <div class="row mb-3">
                                            <label for="_dm-disabledTextInputWitHelp" class="col-sm-3 form-label">With Help</label>
                                            <div class="col-sm-9">
                                                <input id="_dm-disabledTextInputWitHelp" type="text" class="form-control" placeholder="Input with help" aria-describedby="inputHelp" disabled>
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                        <!-- END : Disabled text input with help -->

                                        <!-- Disabled floating label -->
                                        <div class="row mb-3">
                                            <label for="_dm-disabledFloatingInput" class="col-sm-3 form-label">Floating label</label>
                                            <div class="col-sm-9">
                                                <div class="form-floating mb-3">
                                                    <input id="dm_disabledFloatingInput" type="text" class="form-control" placeholder="Username" disabled>
                                                    <label for="dm_disabledFloatingInput">Username</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Disabled floating label -->

                                        <!-- Disabled readonly -->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Readonly</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly disabled>
                                            </div>
                                        </div>
                                        <!-- END : Disabled readonly -->

                                        <!-- Disabled textarea -->
                                        <div class="row mb-3">
                                            <label for="_dm-disabledTextareaInput" class="col-sm-3 col-form-label">Textarea</label>
                                            <div class="col-sm-9">
                                                <textarea id="_dm-disabledTextareaInput" class="form-control" placeholder="Textarea" rows="5" disabled></textarea>
                                            </div>
                                        </div>
                                        <!-- END : Disabled textarea -->

                                        <!-- Disabled checkboxes -->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Checkboxes</label>
                                            <div class="col-sm-9 py-2">
                                                <div class="form-check mb-2">
                                                    <input id="_dm-disabledBlockCheckboxes" class="form-check-input" type="checkbox" checked disabled>
                                                    <label for="_dm-disabledBlockCheckboxes" class="form-check-label">
                                                        Option 1 (pre-checked)
                                                    </label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input id="_dm-disabledBlockCheckbox2" class="form-check-input" type="checkbox" disabled>
                                                    <label for="_dm-disabledBlockCheckbox2" class="form-check-label">
                                                        Option 2
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input id="_dm-disabledBlockCheckbox3" class="form-check-input" type="checkbox" disabled>
                                                    <label for="_dm-disabledBlockCheckbox3" class="form-check-label">
                                                        Option 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Disabled checkboxes -->

                                        <!-- Disabled inline checkboxes-->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Inline Checkboxes</label>
                                            <div class="col-sm-9 pt-3">
                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-disabledInlineCheckboxes" class="form-check-input" type="checkbox" autocomplete="off" value="option1" checked disabled>
                                                    <label for="_dm-disabledInlineCheckboxes" class="form-check-label">Pre-checked</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-disabledInlineCheckboxes2" class="form-check-input" type="checkbox" autocomplete="off" value="option2" disabled>
                                                    <label for="_dm-disabledInlineCheckboxes2" class="form-check-label">Option 2</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-disabledInlineCheckboxes3" class="form-check-input" type="checkbox" autocomplete="off" value="option3" disabled>
                                                    <label for="_dm-disabledInlineCheckboxes3" class="form-check-label">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Disabled inline checkboxes-->

                                        <!-- Disabled radios -->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Radios</label>
                                            <div class="col-sm-9 pt-3">
                                                <div class="form-check mb-2">
                                                    <input id="_dm-disabledBlockRadios" class="form-check-input" type="radio" name="disabledradioBlock" checked disabled>
                                                    <label for="_dm-disabledBlockRadios" class="form-check-label">
                                                        Option 1 ( Pre-checked )
                                                    </label>
                                                </div>

                                                <div class="form-check mb-2">
                                                    <input id="_dm-disabledBlockRadios2" class="form-check-input" type="radio" name="disabledradioBlock" disabled>
                                                    <label for="_dm-disabledBlockRadios2" class="form-check-label">
                                                        Option 2
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input id="_dm-disabledBlockRadios3" class="form-check-input" type="radio" name="disabledradioBlock" disabled>
                                                    <label for="_dm-disabledBlockRadios3" class="form-check-label">
                                                        Option 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Disabled radios -->

                                        <!-- Disabled inline radios -->
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Inline radios</label>
                                            <div class="col-sm-9 pt-3">
                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-disabledInlineRadio1" class="form-check-input" type="radio" name="disabledInlineRadioOptions" value="option1" checked disabled>
                                                    <label for="_dm-disabledInlineRadio1" class="form-check-label">Pre-checked</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-disabledInlineRadio2" class="form-check-input" type="radio" name="disabledInlineRadioOptions" value="option2" disabled>
                                                    <label for="_dm-disabledInlineRadio2" class="form-check-label">Option 2</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input id="_dm-disabledInlineRadio3" class="form-check-input" type="radio" name="disabledInlineRadioOptions" value="option3" disabled>
                                                    <label for="_dm-disabledInlineRadio3" class="form-check-label">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END : Disabled inline radios -->

                                        <!-- Disabled file input -->
                                        <div class="row mb-3">
                                            <label for="_dm-disabledFileInput" class="col-sm-3 col-form-label">File input</label>
                                            <div class="col-sm-9">
                                                <input id="_dm-disabledFileInput" class="form-control" type="file" disabled>
                                            </div>
                                        </div>
                                        <!-- END : Disabled file input -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <!-- FOOTER -->
            <footer class="mt-auto">
                <div class="content__boxed">
                    <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                        <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2022 <a href="#" class="ms-1 btn-link fw-bold">My Company</a></div>
                        <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto" style="row-gap: 0 !important;">
                            <a class="nav-link px-0" href="#">Policy Privacy</a>
                            <a class="nav-link px-0" href="#">Terms and conditions</a>
                            <a class="nav-link px-0" href="#">Contact Us</a>
                        </nav>
                    </div>
                </div>
            </footer>
            <!-- END - FOOTER -->

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->

        <!-- HEADER -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <header class="header">
            <div class="header__inner">

                <!-- Brand -->
                <div class="header__brand">
                    <div class="brand-wrap">

                        <!-- Brand logo -->
                        <a href="../../index.html" class="brand-img stretched-link">
                            <img src="../../assets/img/logo.svg" alt="Nifty Logo" class="Nifty logo" width="40" height="40">
                        </a>

                        <!-- Brand title -->
                        <div class="brand-title">Nifty</div>

                        <!-- You can also use IMG or SVG instead of a text element. -->

                    </div>
                </div>
                <!-- End - Brand -->

                <div class="header__content">

                    <!-- Content Header - Left Side: -->
                    <div class="header__content-start">

                        <!-- Navigation Toggler -->
                        <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                            <i class="demo-psi-view-list"></i>
                        </button>

                        <!-- Searchbox -->
                        <div class="header-searchbox">

                            <!-- Searchbox toggler for small devices -->
                            <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                                <i class="demo-psi-magnifi-glass"></i>
                            </label>

                            <!-- Searchbox input -->
                            <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                                <input id="header-search-input" class="searchbox__input form-control bg-transparent" type="search" placeholder="Type for search . . ." aria-label="Search">
                                <div class="searchbox__backdrop">
                                    <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                                        <i class="demo-pli-magnifi-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End - Content Header - Left Side -->

                    <!-- Content Header - Right Side: -->
                    <div class="header__content-end">

                        <!-- Mega Dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Megamenu dropdown" aria-expanded="false">
                                <i class="demo-psi-layout-grid"></i>
                            </button>

                            <!-- Mega Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-end p-3 mega-dropdown">
                                <div class="row">
                                    <div class="col-md-3">

                                        <!-- Pages List Group -->
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="demo-pli-file fs-4"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">Pages</h5>
                                            </div>
                                            <a href="#" class="list-group-item list-group-item-action">Profile</a>
                                            <a href="#" class="list-group-item list-group-item-action">Search Result</a>
                                            <a href="#" class="list-group-item list-group-item-action">FAQ</a>
                                            <a href="#" class="list-group-item list-group-item-action">Screen Lock</a>
                                            <a href="#" class="list-group-item list-group-item-action">Maintenance</a>
                                            <a href="#" class="list-group-item list-group-item-action">Invoices</a>
                                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Disabled Item</a>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <!-- Mailbox list group -->
                                        <div class="list-group list-group-borderless mb-3">
                                            <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="demo-pli-mail fs-4"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">Mailbox</h5>
                                            </div>
                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                Inbox <span class="badge bg-danger rounded-pill">14</span>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">Read Messages</a>
                                            <a href="#" class="list-group-item list-group-item-action">Compose</a>
                                            <a href="#" class="list-group-item list-group-item-action">Template</a>
                                        </div>

                                        <!-- News -->
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item d-flex align-items-center border-bottom">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="demo-pli-calendar-4 fs-4"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">News</h5>
                                            </div>
                                            <small class="list-group-item">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolore unde autem, molestiae eum laborum aliquid at commodi cum? Blanditiis.
                                            </small>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <!-- List Group -->
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-data-settings fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <div class="d-flex justify-content-between align-items-start">
                                                        <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Data Backup</a>
                                                        <span class="badge bg-success rounded-pill ms-auto">40%</span>
                                                    </div>
                                                    <small class="text-muted">Current usage of disks for backups.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-support fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Support</a>
                                                    <small class="text-muted">Have any questions ? please don't hesitate to ask.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-computer-secure fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Security</a>
                                                    <small class="text-muted">Our devices are secure and up-to-date.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-map-2 fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Location</a>
                                                    <small class="text-muted">From our location up here, we kept in close touch.</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <!-- Simple gallery -->
                                        <div class="d-grid gap-2 ps-5 pe-2">
                                            <div class="row g-1 rounded-3 overflow-hidden">
                                                <div class="col-6 mt-0">
                                                    <img class="img-fluid" src="../../assets/img/megamenu/img-1.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <img class="img-fluid" src="../../assets/img/megamenu/img-3.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6">
                                                    <img class="img-fluid" src="../../assets/img/megamenu/img-2.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6">
                                                    <img class="img-fluid" src="../../assets/img/megamenu/img-4.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6">
                                                    <img class="img-fluid" src="../../assets/img/megamenu/img-6.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6">
                                                    <img class="img-fluid" src="../../assets/img/megamenu/img-5.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-primary">Browse Gallery</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End - Mega Dropdown -->

                        <!-- Notification Dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Notification dropdown" aria-expanded="false">
                                <span class="d-block position-relative">
                                    <i class="demo-psi-bell"></i>
                                    <span class="badge badge-super rounded bg-danger p-1">

                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </span>
                            </button>

                            <!-- Notification dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-end w-md-300px">
                                <div class="border-bottom px-3 py-2 mb-3">
                                    <h5>Notifications</h5>
                                </div>

                                <div class="list-group list-group-borderless">

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-data-settings text-muted fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Your storage is full</a>
                                            <small class="text-muted">Local storage is nearly full.</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-file-edit text-blue-200 fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Writing a New Article</a>
                                            <small class="text-muted">Wrote a news article for the John Mike</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-speech-bubble-7 text-green-300 fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <a href="#" class="h6 mb-0 stretched-link text-decoration-none">Comment sorting</a>
                                                <span class="badge bg-info rounded ms-auto">NEW</span>
                                            </div>
                                            <small class="text-muted">You have 1,256 unsorted comments.</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="img-xs rounded-circle" src="../../assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Lucy Sent you a message</a>
                                            <small class="text-muted">30 minutes ago</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="img-xs rounded-circle" src="../../assets/img/profile-photos/3.png" alt="Profile Picture" loading="lazy">
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jackson Sent you a message</a>
                                            <small class="text-muted">1 hours ago</small>
                                        </div>
                                    </div>

                                    <div class="text-center mb-2">
                                        <a href="#" class="btn-link">Show all Notifications</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End - Notification dropdown -->

                        <!-- User dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                                <i class="demo-psi-male"></i>
                            </button>

                            <!-- User dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-end w-md-450px">

                                <!-- User dropdown header -->
                                <div class="d-flex align-items-center border-bottom px-3 py-2">
                                    <div class="flex-shrink-0">
                                        <img class="img-sm rounded-circle" src="../../assets/img/profile-photos/1.png" alt="Profile Picture" loading="lazy">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">Aaron Chavez</h5>
                                        <span class="text-muted fst-italic"><a href="https://themeon.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b0b0a3bebf8eb2b9b0a7b4ab91b4a9b0bca1bdb4ffb2bebc">[email&#160;protected]</a></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">

                                        <!-- Simple widget and reports -->
                                        <div class="list-group list-group-borderless mb-3">
                                            <div class="list-group-item text-center border-bottom mb-3">
                                                <p class="h1 display-1 text-green">17</p>
                                                <p class="h6 mb-0"><i class="demo-pli-basket-coins fs-3 me-2"></i> New orders</p>
                                                <small class="text-muted">You have new orders</small>
                                            </div>
                                            <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                Today Earning
                                                <small class="fw-bolder">$578</small>
                                            </div>
                                            <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                Tax
                                                <small class="fw-bolder text-danger">- $28</small>
                                            </div>
                                            <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                Total Earning
                                                <span class="fw-bold text-primary">$6,578</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-5">

                                        <!-- User menu link -->
                                        <div class="list-group list-group-borderless h-100 py-3">
                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                <span><i class="demo-pli-mail fs-5 me-2"></i> Messages</span>
                                                <span class="badge bg-danger rounded-pill">14</span>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i class="demo-pli-male fs-5 me-2"></i> Profile
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i class="demo-pli-gear fs-5 me-2"></i> Settings
                                            </a>

                                            <a href="#" class="list-group-item list-group-item-action mt-auto">
                                                <i class="demo-pli-computer-secure fs-5 me-2"></i> Lock screen
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i class="demo-pli-unlock fs-5 me-2"></i> Logout
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End - User dropdown -->

                        <!-- Sidebar Toggler -->
                        <button class="sidebar-toggler header__btn btn btn-icon btn-sm" type="button" aria-label="Sidebar button">
                            <i class="demo-psi-dot-vertical"></i>
                        </button>

                    </div>
                </div>
            </div>
        </header>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - HEADER -->

        <!-- MAIN NAVIGATION -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <nav id="mainnav-container" class="mainnav">
            <div class="mainnav__inner">

                <!-- Navigation menu -->
                <div class="mainnav__top-content scrollable-content pb-5">

                    <!-- Profile Widget -->
                    <div class="mainnav__profile mt-3 d-flex3">

                        <div class="mt-2 d-mn-max"></div>

                        <!-- Profile picture  -->
                        <div class="mininav-toggle text-center py-2">
                            <img class="mainnav__avatar img-md rounded-circle border" src="../../assets/img/profile-photos/1.png" alt="Profile Picture">
                        </div>

                        <div class="mininav-content collapse d-mn-max">
                            <div class="d-grid">

                                <!-- User name and position -->
                                <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                    <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                        <h6 class="mb-0 me-3">Aaron Chavez</h6>
                                    </span>
                                    <small class="text-muted">Administrator</small>
                                </button>

                                <!-- Collapsed user menu -->
                                <div id="usernav" class="nav flex-column collapse">
                                    <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                                        <span><i class="demo-pli-mail fs-5 me-2"></i><span class="ms-1">Messages</span></span>
                                        <span class="badge bg-danger rounded-pill">14</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-male fs-5 me-2"></i>
                                        <span class="ms-1">Profile</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-gear fs-5 me-2"></i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-computer-secure fs-5 me-2"></i>
                                        <span class="ms-1">Lock screen</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-unlock fs-5 me-2"></i>
                                        <span class="ms-1">Logout</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End - Profile widget -->

                    <!-- Navigation Category -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-home fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Dashboard</span>
                                </a>

                                <!-- Dashboard submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">Dashboard 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../dashboard-2/index.html" class="nav-link">Dashboard 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../dashboard-3/index.html" class="nav-link">Dashboard 3</a>
                                    </li>

                                </ul>
                                <!-- END : Dashboard submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-split-vertical-2 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Layouts</span>
                                </a>

                                <!-- Layouts submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../layouts/minimal-navigation/index.html" class="nav-link">Mini Navigation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../layouts/push-navigation/index.html" class="nav-link">Push Navigation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../layouts/slide-navigation/index.html" class="nav-link">Slide Navigation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../layouts/reveal-navigation/index.html" class="nav-link">Reveal Navigation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../layouts/stuck-sidebar/index.html" class="nav-link">Stuck Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../layouts/pinned-sidebar/index.html" class="nav-link">Pinned Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../layouts/unite-sidebar/index.html" class="nav-link">Unite Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../layouts/sticky-header/index.html" class="nav-link">Sticky Header</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../layouts/sticky-navigation/index.html" class="nav-link">Sticky Navigation</a>
                                    </li>

                                </ul>
                                <!-- END : Layouts submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Regular menu link -->
                            <li class="nav-item">
                                <a href="../../widgets/index.html" class="nav-link mininav-toggle"><i class="demo-pli-gear fs-5 me-2"></i>

                                    <span class="nav-label mininav-content ms-1">Widgets</span>
                                </a>
                            </li>
                            <!-- END : Regular menu link -->

                        </ul>
                    </div>
                    <!-- END : Navigation Category -->

                    <!-- Components Category -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Components</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-boot-2 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Ui Elements</span>
                                </a>

                                <!-- Ui Elements submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../ui-elements/buttons/index.html" class="nav-link">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/cards/index.html" class="nav-link">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/dropdowns/index.html" class="nav-link">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/typography/index.html" class="nav-link">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/list-group/index.html" class="nav-link">List Group</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/progress/index.html" class="nav-link">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/placeholders/index.html" class="nav-link d-flex align-items-center">Placeholders<span class="badge bg-danger ms-auto">NEW</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/tabs-accordions/index.html" class="nav-link">Tabs &amp; Accordions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/components/index.html" class="nav-link">Components</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../ui-elements/tooltips-popovers/index.html" class="nav-link">Tooltips &amp; Popover</a>
                                    </li>

                                </ul>
                                <!-- END : Ui Elements submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link active"><i class="demo-pli-pen-5 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Forms</span>
                                </a>

                                <!-- Forms submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link active">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../tags/index.html" class="nav-link">Tags</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../date-time-picker/index.html" class="nav-link">Date Time Picker</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../validation/index.html" class="nav-link">Validation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../wizard/index.html" class="nav-link">Wizard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../file-uploads/index.html" class="nav-link">File Uploads</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../text-editor/index.html" class="nav-link">Text Editor</a>
                                    </li>

                                </ul>
                                <!-- END : Forms submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-receipt-4 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Tables</span>
                                </a>

                                <!-- Tables submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../tables/static-tables/index.html" class="nav-link">Static Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../tables/gridjs/index.html" class="nav-link">Gridjs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../tables/tabulator/index.html" class="nav-link">Tabulator</a>
                                    </li>

                                </ul>
                                <!-- END : Tables submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-bar-chart fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Charts</span>
                                </a>

                                <!-- Charts submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../charts/chart.js/index.html" class="nav-link">ChartJS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../charts/charts.css/index.html" class="nav-link">ChartsCSS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../charts/sparklines/index.html" class="nav-link">Sparklines</a>
                                    </li>

                                </ul>
                                <!-- END : Charts submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-repair fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Miscellaneous</span>
                                </a>

                                <!-- Miscellaneous submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../miscellaneous/timeline/index.html" class="nav-link">Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../miscellaneous/loader.css/index.html" class="nav-link">Loader.CSS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../miscellaneous/spinkit/index.html" class="nav-link">Spinkit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../miscellaneous/clipboard/index.html" class="nav-link">Clipboard</a>
                                    </li>

                                </ul>
                                <!-- END : Miscellaneous submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                        </ul>
                    </div>
                    <!-- END : Components Category -->

                    <!-- More Category -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">More</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-computer-secure fs-5 me-2"></i>
                                    <span class="nav-label ms-1">App Views</span>
                                </a>

                                <!-- App Views submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../app-views/file-manager/index.html" class="nav-link">File Manager</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../app-views/users/index.html" class="nav-link">Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../app-views/users-2/index.html" class="nav-link">Users 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../app-views/profile/index.html" class="nav-link">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../app-views/calendar/index.html" class="nav-link">Calendar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../app-views/taskboard/index.html" class="nav-link">Taskboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../app-views/chat/index.html" class="nav-link">Chat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../app-views/contact-us/index.html" class="nav-link">Contact Us</a>
                                    </li>

                                </ul>
                                <!-- END : App Views submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-speech-bubble-5 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Blog Apps</span>
                                </a>

                                <!-- Blog Apps submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../blog-apps/blog/index.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../blog-apps/blog-list/index.html" class="nav-link">Blog List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../blog-apps/blog-list-2/index.html" class="nav-link">Blog List 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../blog-apps/blog-article/index.html" class="nav-link">Blog Article</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../blog-apps/manage-posts/index.html" class="nav-link">Manage Posts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../blog-apps/add-edit-posts/index.html" class="nav-link">Add Edit Posts</a>
                                    </li>

                                </ul>
                                <!-- END : Blog Apps submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-mail fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Email</span>
                                </a>

                                <!-- Email submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../email/inbox/index.html" class="nav-link">Inbox</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../email/view-message/index.html" class="nav-link">View Message</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../email/compose-message/index.html" class="nav-link">Compose Message</a>
                                    </li>

                                </ul>
                                <!-- END : Email submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-file-html fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Other Pages</span>
                                </a>

                                <!-- Other Pages submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../other-pages/blank-page/index.html" class="nav-link">Blank Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../other-pages/invoice/index.html" class="nav-link">Invoice</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../other-pages/search-results/index.html" class="nav-link">Search Results</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../other-pages/faq/index.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../other-pages/pricing-tables/index.html" class="nav-link">Pricing Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../other-pages/error-404/index.html" class="nav-link">Error 404</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../other-pages/error-500/index.html" class="nav-link">Error 500</a>
                                    </li>

                                </ul>
                                <!-- END : Other Pages submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-window-2 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Front Pages</span>
                                </a>

                                <!-- Front Pages submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../front-pages/error-404/index.html" class="nav-link">Error 404</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../front-pages/error-500/index.html" class="nav-link">Error 500</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../front-pages/maintenance/index.html" class="nav-link">Maintenance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../front-pages/login/index.html" class="nav-link">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../front-pages/register/index.html" class="nav-link">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../front-pages/password-reminder/index.html" class="nav-link">Password Reminder</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../front-pages/lock-screen/index.html" class="nav-link">Lock Screen</a>
                                    </li>

                                </ul>
                                <!-- END : Front Pages submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-tactic fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Menu Levels</span>
                                </a>

                                <!-- Menu Levels submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item has-sub">
                                        <a href="#" class="mininav-toggle nav-link collapsed">Submenu</a>
                                        <ul class="mininav-content nav collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Menu Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Menu Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Menu Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Menu Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-sub">
                                        <a href="#" class="mininav-toggle nav-link collapsed">Submenu</a>
                                        <ul class="mininav-content nav collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Menu Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Menu Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Menu Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Menu Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- END : Menu Levels submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                        </ul>
                    </div>
                    <!-- END : More Category -->

                    <!-- Extras Category -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Extras</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-happy fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Icons Pack</span>
                                </a>

                                <!-- Icons Pack submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../icons-pack/ionicons/index.html" class="nav-link">Ionicons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../icons-pack/themify-icons/index.html" class="nav-link">Themify Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../icons-pack/flag-icon-css/index.html" class="nav-link">Flag Icon CSS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../icons-pack/weather-icons/index.html" class="nav-link">Weather Icons</a>
                                    </li>

                                </ul>
                                <!-- END : Icons Pack submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-medal-2 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Premium Icons</span>
                                </a>

                                <!-- Premium Icons submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="../../premium-icons/line-icons-pack/index.html" class="nav-link">Line Icons Pack</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../premium-icons/solid-icons-pack/index.html" class="nav-link">Solid Icons Pack</a>
                                    </li>

                                </ul>
                                <!-- END : Premium Icons submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                        </ul>
                    </div>
                    <!-- END : Extras Category -->

                    <!-- Widget -->
                    <div class="mainnav__profile">

                        <!-- Widget buttton form small navigation -->
                        <div class="mininav-toggle text-center py-2 d-mn-min">
                            <i class="demo-pli-monitor-2"></i>
                        </div>

                        <div class="d-mn-max mt-5"></div>

                        <!-- Widget content -->
                        <div class="mininav-content collapse d-mn-max">
                            <h6 class="mainnav__caption px-3 fw-bold">Server Status</h6>
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item text-reset">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <p class="mb-2 me-auto">CPU Usage</p>
                                        <span class="badge bg-info rounded">35%</span>
                                    </div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-label="CPU Progress" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="list-group-item text-reset">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <p class="mb-2 me-auto">Bandwidth</p>
                                        <span class="badge bg-warning rounded">73%</span>
                                    </div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 73%" aria-label="Bandwidth Progress" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-grid px-3 mt-3">
                                <a href="#" class="btn btn-sm btn-success">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- End - Profile widget -->

                </div>
                <!-- End - Navigation menu -->

                <!-- Bottom navigation menu -->
                <div class="mainnav__bottom-content border-top pb-2">
                    <ul id="mainnav" class="mainnav__menu nav flex-column">
                        <li class="nav-item has-sub">
                            <a href="#" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                                <i class="demo-pli-unlock fs-5 me-2"></i>
                                <span class="nav-label ms-1">Logout</span>
                            </a>
                            <ul class="mininav-content nav flex-column collapse">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">This device only</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">All Devices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lock screen</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End - Bottom navigation menu -->

            </div>
        </nav>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - MAIN NAVIGATION -->

        <!-- SIDEBAR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <aside class="sidebar">
            <div class="sidebar__inner scrollable-content">

                <!-- This element is only visible when sidebar Stick mode is active. -->
                <div class="sidebar__stuck align-item-center mb-3 px-4">
                    <p class="m-0 text-danger">Close the sidebar =></p>
                    <button type="button" class="sidebar-toggler btn-close btn-lg rounded-circle ms-auto" aria-label="Close"></button>
                </div>

                <!-- Sidebar tabs nav -->
                <div class="sidebar__wrap">
                    <nav class="px-3">
                        <div class="nav nav-callout nav-fill flex-nowrap" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-chat" type="button" role="tab" aria-controls="nav-chat" aria-selected="true">
                                <i class="d-block demo-pli-speech-bubble-5 fs-3 mb-2"></i>
                                <span>Chat</span>
                            </button>

                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-reports" type="button" role="tab" aria-controls="nav-reports" aria-selected="false">
                                <i class="d-block demo-pli-information fs-3 mb-2"></i>
                                <span>Reports</span>
                            </button>

                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-settings" type="button" role="tab" aria-controls="nav-settings" aria-selected="false">
                                <i class="d-block demo-pli-wrench fs-3 mb-2"></i>
                                <span>Settings</span>
                            </button>
                        </div>
                    </nav>
                </div>
                <!-- End - Sidebar tabs nav -->

                <!-- Sideabar tabs content -->
                <div class="tab-content sidebar__wrap" id="nav-tabContent">

                    <!-- Chat tab Content -->
                    <div id="nav-chat" class="tab-pane fade py-4 show active" role="tabpanel" aria-labelledby="nav-chat-tab">

                        <!-- Family list group -->
                        <h5 class="px-3">Family</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle" src="../../assets/img/profile-photos/2.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Stephen Tran</a>
                                    <small class="text-muted">Available</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle" src="../../assets/img/profile-photos/8.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Betty Murphy</a>
                                    <small class="text-muted">Iddle</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle" src="../../assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Brittany Meyer</a>
                                    <small class="text-muted">I think so!</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle" src="../../assets/img/profile-photos/4.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jack George</a>
                                    <small class="text-muted">Last seen 2 hours ago</small>
                                </div>
                            </div>

                        </div>
                        <!-- End - Family list group -->

                        <!-- Friends Group -->
                        <h5 class="d-flex mt-5 px-3">Friends <span class="badge bg-success ms-auto">587 +</span></h5>
                        <div class="list-group list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-success rounded-circle p-1"></span>
                                Joey K. Greyson
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-info rounded-circle p-1"></span>
                                Andrea Branden
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-warning rounded-circle p-1"></span>
                                Johny Juan
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-secondary rounded-circle p-1"></span>
                                Susan Sun
                            </a>
                        </div>
                        <!-- End - Friends Group -->

                        <!-- Simple news widget -->
                        <div class="px-3">
                            <h5 class="mt-5">News</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui consequatur ipsum porro a repellat eaque exercitationem necessitatibus esse voluptate corporis.</p>
                            <small class="fst-italic">Last Update : Today 13:54</small>
                        </div>
                        <!-- End - Simple news widget -->

                    </div>
                    <!-- End - Chat tab content -->

                    <!-- Reports tab content -->
                    <div id="nav-reports" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-reports-tab">

                        <!-- Billing and Resports -->
                        <div class="px-3">
                            <h5 class="mb-3">Billing &amp Reports</h5>
                            <p>Get <span class="badge bg-danger">$15.00 off</span> your next bill by making sure your full payment reaches us before August 5th.</p>

                            <h5 class="mt-5 mb-0">Amount Due On</h5>
                            <p>August 17, 2028</p>
                            <p class="h1">$83.09</p>

                            <div class="d-grid">
                                <button class="btn btn-success" type="button">Pay now</button>
                            </div>
                        </div>
                        <!-- End - Billing and Resports -->

                        <!-- Additional actions nav -->
                        <h5 class="mt-5 px-3">Additional Actions</h5>
                        <div class="list-group list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-information me-2 fs-5"></i>
                                Services Information
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-mine me-2 fs-5"></i>
                                Usage
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-credit-card-2 me-2 fs-5"></i>
                                Payment Options
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-support me-2 fs-5"></i>
                                Messages Center
                            </a>
                        </div>
                        <!-- End - Additional actions nav -->

                        <!-- Contact widget -->
                        <div class="px-3 mt-5 text-center">
                            <div class="mb-3">
                                <i class="demo-pli-old-telephone display-4 text-primary"></i>
                            </div>
                            <p>Have a question ?</p>
                            <p class="h5 mb-0"> (415) 234-53454 </p>
                            <small><em>We are here 24/7</em></small>
                        </div>
                        <!-- End - Contact widget -->

                    </div>
                    <!-- End - Reports tab content -->

                    <!-- Settings content -->
                    <div id="nav-settings" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-settings-tab">

                        <!-- Account settings -->
                        <h5 class="px-3">Account Settings</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbPersonalStatus">Show my personal status</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbPersonalStatus" class="form-check-input" type="checkbox" checked>
                                    </div>
                                </div>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                            </div>

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbOfflineContact">Show offline contact</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbOfflineContact" class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                            </div>

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbInvisibleMode">Invisible Mode</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbInvisibleMode" class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</small>
                            </div>

                        </div>
                        <!-- End - Account settings -->

                        <!-- Public Settings -->
                        <h5 class="mt-5 px-3">Public Settings</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbOnlineStatus">Online Status</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbOnlineStatus" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbMuteNotifications">Mute Notifications</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbMuteNotifications" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbMyDevicesName">Show my device name</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbMyDevicesName" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>

                        </div>
                        <!-- End - Public Settings -->

                    </div>
                    <!-- End - Settings content -->

                </div>
                <!-- End - Sidebar tabs content -->

            </div>
        </aside>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - SIDEBAR -->

    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - PAGE CONTAINER -->

    <!-- SCROLL TO TOP BUTTON -->
    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SCROLL TO TOP BUTTON -->

    <!-- BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-boxedBgContent" class="_dm-boxbg offcanvas offcanvas-bottom" data-bs-backdrop="false" data-bs-scroll="true" tabindex="-1">
        <div class="offcanvas-body p-4">

            <!-- Content Header -->
            <div class="offcanvas-header border-bottom p-0 pb-3">
                <div>
                    <h4 class="offcanvas-title">Background Images</h4>
                    <span class="text-muted">Add an image to replace the solid background color</span>
                </div>
                <button type="button" class="btn-close btn-lg text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- End - Content header -->

            <!-- Collection Of Images -->
            <div id="_dm-boxedBgContainer" class="row mt-3">

                <!-- Blurred Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Blurred</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/blurred/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Blurred Background Images -->

                <!-- Polygon Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Polygon &amp; Geometric</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/polygon/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Polygon Background Images -->

                <!-- Abstract Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Abstract</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="../../assets/premium/boxed-bg/abstract/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Abstract Background Images -->

            </div>
            <!-- End - Collection Of Images -->

        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->

    <!-- SETTINGS CONTAINER [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-settingsContainer" class="_dm-setting-container offcanvas offcanvas-end rounded-start" tabindex="-1">
        <button id="_dm-settingsToggler" class="_dm-btn-settings btn btn-sm btn-dark p-2 rounded-0 rounded-start shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#_dm-settingsContainer" aria-label="Customization button" aria-controls="_dm-settingsContainer">
            <i class="demo-psi-gear fs-1"></i>
        </button>

        <div class="offcanvas-body py-0">
            <div class="_dm-setting-container__content row">
                <div class="col-lg-3 p-4">

                    <h5 class="fw-bold pb-3 mb-2">Layouts</h5>

                    <!-- OPTION : Centered Layout -->
                    <h6 class="mb-2 pb-1">Layouts</h6>
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-fluidLayoutRadio">Fluid Layout</label>
                        <div class="form-check form-switch">
                            <input id="_dm-fluidLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off" checked>
                        </div>
                    </div>

                    <!-- OPTION : Boxed layout -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-boxedLayoutRadio">Boxed Layout</label>
                        <div class="form-check form-switch">
                            <input id="_dm-boxedLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Boxed layout with background images -->
                    <div id="_dm-boxedBgOption" class="opacity-50 d-flex align-items-center pt-1 mb-2">
                        <label class="form-label flex-fill mb-0">Background for boxed</label>
                        <button id="_dm-boxedBgBtn" class="btn btn-icon btn-primary btn-xs" type="button" data-bs-toggle="offcanvas" data-bs-target="#_dm-boxedBgContent" disabled>
                            <i class="demo-psi-dot-horizontal"></i>
                        </button>
                    </div>

                    <!-- OPTION : Centered Layout -->
                    <div class="d-flex align-items-start pt-1 mb-2">
                        <label class="form-check-label flex-fill text-nowrap" for="_dm-centeredLayoutRadio">Centered Layout <br><span class="badge bg-danger">New in v.3.0</span></label>
                        <div class="form-check form-switch">
                            <input id="_dm-centeredLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Transition timing -->
                    <h6 class="mt-4 mb-2 py-1">Transitions</h6>
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <select id="_dm-transtiionSelect" class="form-select" aria-label="select transition timing">
                            <option value="in-quart">In Quart</option>
                            <option value="out-quart">Out Quart</option>
                            <option value="in-back">In Back</option>
                            <option value="out-back">Out Back</option>
                            <option value="in-out-back" selected="true">In Out Back</option>
                            <option value="steps">Steps</option>
                            <option value="jumping">Jumping</option>
                            <option value="rubber">Rubber</option>
                        </select>
                    </div>

                    <!-- OPTION : Sticky Header -->
                    <h6 class="mt-4 mb-2 py-1">Header</h6>
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-stickyHeaderCheckbox">Sticky header</label>
                        <div class="form-check form-switch">
                            <input id="_dm-stickyHeaderCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Additional Offcanvas -->
                    <h6 class="mt-4 mb-2 py-1">Additional Offcanvas <span class="badge bg-danger">New in BS v.5.0</span></h6>
                    <p>Select the offcanvas placement.</p>
                    <div class="text-nowrap">
                        <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-top">Top</button>
                        <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-end">Right</button>
                        <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-bottom">Btm</button>
                        <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-start">Left</button>
                    </div>

                </div>
                <div class="col-lg-3 p-4 bg-gray-300">

                    <h5 class="fw-bold pb-3 mb-2">Sidebars</h5>

                    <!-- OPTION : Sticky Navigation -->
                    <h6 class="mb-2 pb-1">Navigation</h6>
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-stickyNavCheckbox">Sticky navigation</label>
                        <div class="form-check form-switch">
                            <input id="_dm-stickyNavCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Navigation Profile Widget -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-profileWidgetCheckbox">Widget Profile</label>
                        <div class="form-check form-switch">
                            <input id="_dm-profileWidgetCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off" checked>
                        </div>
                    </div>

                    <!-- OPTION : Mini navigation mode -->
                    <div class="d-flex align-items-center pt-3 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-miniNavRadio">Min / Collapsed Mode</label>
                        <div class="form-check form-switch">
                            <input id="_dm-miniNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Maxi navigation mode -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-maxiNavRadio">Max / Expanded Mode</label>
                        <div class="form-check form-switch">
                            <input id="_dm-maxiNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off" checked>
                        </div>
                    </div>

                    <!-- OPTION : Push navigation mode -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-pushNavRadio">Push Mode</label>
                        <div class="form-check form-switch">
                            <input id="_dm-pushNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Slide on top navigation mode -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-slideNavRadio">Slide on top (default)</label>
                        <div class="form-check form-switch">
                            <input id="_dm-slideNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Slide on top navigation mode -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-revealNavRadio">Reveal Mode</label>
                        <div class="form-check form-switch">
                            <input id="_dm-revealNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                        </div>
                    </div>

                    <h6 class="mt-4 mb-2 py-1">Right sidebar</h6>

                    <!-- OPTION : Disable sidebar backdrop -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-disableBackdropCheckbox">Disable backdrop</label>
                        <div class="form-check form-switch">
                            <input id="_dm-disableBackdropCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Static position -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-staticSidebarCheckbox">Static position</label>
                        <div class="form-check form-switch">
                            <input id="_dm-staticSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Stuck sidebar -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-stuckSidebarCheckbox">Stuck Sidebar </label>
                        <div class="form-check form-switch">
                            <input id="_dm-stuckSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Unite Sidebar -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-uniteSidebarCheckbox">Unite Sidebar</label>
                        <div class="form-check form-switch">
                            <input id="_dm-uniteSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Pinned Sidebar -->
                    <div class="d-flex align-items-start pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-pinnedSidebarCheckbox">Pinned Sidebar <span class="badge bg-danger">New in v3.0</span></label>
                        <div class="form-check form-switch">
                            <input id="_dm-pinnedSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                </div>
                <div id="dm_colorSchemesContainer" class="col-lg-6 p-4">
                    <h5 class="fw-bold pb-3 mb-2">Color Schemes</h5>

                    <div class="row mb-3 pb-3">
                        <div class="col-md-6">

                            <div class="d-flex align-items-start position-relative">
                                <div class="flex-shrink-0 me-3">
                                    <div class="_dm-color-box bg-light"></div>
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" data-dir="light" data-single="true" class="_dm-themeColors schemes-btn h6 d-block mb-0 stretched-link text-decoration-none">Light</a>
                                    <small class="text-muted">Completely bright color themes.</small>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="d-flex align-items-start position-relative">
                                <div class="flex-shrink-0 me-3">
                                    <div class="_dm-color-box bg-dark"></div>
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" data-dir="dark" data-hd="expanded" class="_dm-themeColors schemes-btn h6 d-block mb-0 stretched-link text-decoration-none">Dark</a>
                                    <small class="text-muted">Completely dark color themes.</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row text-center my-3">

                        <!-- Expanded Header -->
                        <div class="col-md-4">
                            <h6 class="m-0">Expanded Header</h6>
                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="../../assets/img/color-schemes/expanded-header.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy active" type="button" data-dir="all-headers/navy" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="expanded"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="expanded"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="expanded"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fair Header -->
                        <div class="col-md-4">
                            <h6 class="m-0">Fair Header</h6>
                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="../../assets/img/color-schemes/fair-header.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="fair"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="fair"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="fair"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h6 class="m-0">Full Header</h6>

                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="../../assets/img/color-schemes/full-header.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir=""></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center mb-3">
                        <div class="col-md-4">
                            <h6 class="m-0">Primary Nav</h6>

                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="../../assets/img/color-schemes/navigation.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="primary-nav/gray" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="primary-nav/navy" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="primary-nav/ocean" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="primary-nav/lime" data-hd="fair"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="primary-nav/violet" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="primary-nav/orange" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="primary-nav/teal" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="primary-nav/corn" data-hd="fair"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="primary-nav/cherry" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="primary-nav/coffee" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="primary-nav/pear" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="primary-nav/night" data-hd="fair"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h6 class="m-0">Brand</h6>

                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="../../assets/img/color-schemes/brand.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="brand/gray"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="brand/navy"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="brand/ocean"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="brand/lime"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="brand/violet"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="brand/orange"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="brand/teal"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="brand/corn"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="brand/cherry"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="brand/coffee"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="brand/pear"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="brand/night"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h6 class="m-0">Tall Header <span class="badge bg-danger">New in v3.0</span></h6>
                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="../../assets/img/color-schemes/tall-header.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="fair,expanded,border"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="fair,expanded,border"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="fair,expanded,border"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h5 class="mt-5 fw-bold">Scrollbars</h5>
                    <p>Hides native scrollbars and creates custom styleable overlay scrollbars.</p>
                    <div class="row">
                        <div class="col-5">

                            <!-- OPTION : Apply the OverlayScrollBar to the body. -->
                            <div class="d-flex align-items-center pt-1 mb-2">
                                <label class="form-check-label flex-fill" for="_dm-bodyScrollbarCheckbox">Body scrollbar</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-bodyScrollbarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                                </div>
                            </div>

                            <!-- OPTION : Apply the OverlayScrollBar to content containing class .scrollable-content. -->
                            <div class="d-flex align-items-center pt-1 mb-2">
                                <label class="form-check-label flex-fill" for="_dm-sidebarsScrollbarCheckbox">Navigation and Sidebar</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sidebarsScrollbarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                                </div>
                            </div>

                        </div>
                        <div class="col-7">

                            <div class="alert alert-warning" role="alert">
                                Please consider the performance impact of using any scrollbar plugin.
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SETTINGS CONTAINER [ DEMO ] -->

    <!-- OFFCANVAS [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-offcanvas" class="offcanvas" tabindex="-1">

        <!-- Offcanvas header -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Offcanvas Header</h5>
            <button type="button" class="btn-close btn-lg text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Offcanvas content -->
        <div class="offcanvas-body">
            <h5>Content Here</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos nihil earum aliquam quod in dolor, aspernatur obcaecati et at. Dicta, ipsum aut, fugit nam dolore porro non est totam sapiente animi recusandae obcaecati dolorum, rem ullam cumque. Illum quidem reiciendis autem neque excepturi odit est accusantium, facilis provident molestias, dicta obcaecati itaque ducimus fuga iure in distinctio voluptate nesciunt dignissimos rem error a. Expedita officiis nam dolore dolores ea. Soluta repellendus delectus culpa quo. Ea tenetur impedit error quod exercitationem ut ad provident quisquam omnis! Nostrum quasi ex delectus vero, facilis aut recusandae deleniti beatae. Qui velit commodi inventore.</p>
        </div>

    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - OFFCANVAS [ DEMO ] -->

    <!-- JAVASCRIPTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../assets/js/bootstrap.min.bdf649e4bf3fa0261445f7c2ed3517c3f300c9bb44cb991c504bdc130a6ead19.js" defer></script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="../../assets/js/nifty.min.b53472f123acc27ffd0c586e4ca3dc5d83c0670a3a5e120f766f88a92240f57b.js" defer></script>

</body>


<!-- Mirrored from themeon.net/nifty/v3.0.1/forms/general/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2023 07:34:02 GMT -->
</html>