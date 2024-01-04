<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>editpassword</title>
    <link rel="stylesheet" href="client/nicepage.css" media="screen">
<link rel="stylesheet" href="client/editpassword.css" media="screen">
<link rel="stylesheet" href="newdev/css/bootstrap.min.css">
    <script class="u-script" type="text/javascript" src="client/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="client/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "client/images/25.png"
}</script>
    <meta name="theme-color" content="#4a5e8b">
    <meta property="og:title" content="editpassword">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-e826"><a href="/clientindex" class="u-border-none u-btn u-button-style u-none u-btn-1"></a><a href="/clientindex" class="u-image u-logo u-palette-1-base u-image-1" data-image-width="1920" data-image-height="1080">
        <img src="client/images/25.png" class="u-logo-image u-logo-image-1">
      </a><div class="u-list u-list-1">
        <div class="u-align-left u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <a href="/clientprofile" class="u-border-2 u-border-hover-white u-border-white u-btn u-button-style u-custom-item u-none u-btn-2">Profile<span class="u-text-body-alt-color"></span>
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <a href="{{url('/reports')}}" class="u-border-2 u-border-hover-white u-border-white u-btn u-button-style u-custom-item u-none u-btn-3">Report</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <a href="/clientfacs" class="u-border-2 u-border-hover-white u-border-white u-btn u-button-style u-custom-item u-none u-btn-4">Facs and QnA</a>
            </div>
          </div>
          
        </div>
      </div><a href="{{ route('logout') }}" class="u-border-1 u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-6 u-text-hover-grey-90 u-text-white u-btn-6">logout</a></header>
    <section class="u-clearfix u-palette-3-light-3 u-section-1" id="sec-c890">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
        <div class="panel-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            <form action="{{ route('password.post') }}" method="POST" class="tm-edit-product-form">
                                @csrf
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Old Password</label>
                                    <input id="old_password" name="old_password" type="password" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" >
                                </div>
                                <div class="input-group mb-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">New Password</label>
                                    <input id="password" name="password" type="password" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="passwordcomfm" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Re-enter New Password</label>
                                    <input id="passwordcomfm" name="passwordcomfm" type="password" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-53d4"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">We hope you have a pleasant stay at the Noire Residents.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>
