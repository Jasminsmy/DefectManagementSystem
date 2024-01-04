<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="987-654-321&nbsp;or
456-789-321, Taxi transfers from and to&nbsp; Airport, Yellow Cab NYC, Book your trip online now">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login</title>
    <link rel="stylesheet" href="indexpage/nicepage.css" media="screen">
<link rel="stylesheet" href="indexpage/Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="indexpage/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="indexpage/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "indexpage/images/photo6210753612209041810.jpg"
}</script>
    <meta name="theme-color" content="#4a5e8b">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-1 u-header u-valign-top u-header" id="sec-e826"><a href="/" class="u-image u-logo u-palette-1-base u-image-1" data-image-width="1280" data-image-height="720">
        <img src="indexpage/images/photo6210753612209041810.jpg" class="u-logo-image u-logo-image-1">
      </a><a href="/" class="u-border-none u-btn u-button-style u-none u-btn-1"></a></header> 
    <section class="u-clearfix u-section-1" id="sec-c860">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout" style="">
          <div class="u-layout-row" style="">
            <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1" src="">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-text u-text-default u-text-1">Login</h2>
                <div class="u-form u-form-1">
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
                  <form action="{{ route('login.post') }}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="Registration Form" style="padding: 10px;" redirect="true">
                    @csrf
                    <div class="u-form-email u-form-group">
                      <label for="email-2aa4" class="u-label">Email</label>
                      <input type="email" id="email-2aa4" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email')}}</span>
                      @endif
                    </div>
                    <div class="u-form-group u-form-group-2">
                      <label for="text-103b" class="u-label">Password</label>
                      <input type="password" id="text-103b" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                      @if($errors->has('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                      @endif
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                      <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-12 u-btn-1">Submit</a>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-shading u-size-30 u-size-xs-60 u-image-1" data-image-width="114" data-image-height="150">
              <div class="u-container-layout u-container-layout-2" src=""></div>
            </div>
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
        <span>Website Design Software</span>
      </a>. 
    </section>
  </body>
</html>
