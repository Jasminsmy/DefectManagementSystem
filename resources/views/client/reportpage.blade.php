<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="/clientreportpage/nicepage.css" media="screen">
<link rel="stylesheet" href="/clientreportpage/Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="/clientreportpage/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="/clientreportpage/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "clientreportpage/images/25.png"
}</script>
    <meta name="theme-color" content="#4a5e8b">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-3 u-header u-header" id="sec-e826"><a href="/clientindex" class="u-border-none u-btn u-button-style u-none u-btn-1"></a><a href="/clientindex" class="u-image u-logo u-palette-1-base u-image-1" data-image-width="1920" data-image-height="1080">
        <img src="/clientreportpage/images/25.png" class="u-logo-image u-logo-image-1">
      </a><div class="u-list u-list-1">
        <div class="u-align-left u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
              <a href="/clientprofile" class="u-border-2 u-border-hover-white u-border-white u-btn u-button-style u-custom-item u-none u-btn-2">Profile<span class="u-text-body-alt-color"></span>
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <a href="{{url('/reports')}}" class="u-border-2 u-border-hover-white u-border-white u-btn u-button-style u-custom-item u-none u-btn-3">Report</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <a href="/clientfacs" class="u-border-2 u-border-hover-white u-border-white u-btn u-button-style u-custom-item u-none u-btn-4">Progress</a>
            </div>
          </div>
        </div>
      </div><a href="{{route('logout')}}" class="u-border-1 u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-6 u-text-hover-grey-90 u-text-white u-btn-5">logout</a></header>
    <section class="u-clearfix u-palette-3-light-3 u-section-1" id="sec-c227">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
            
            
            <div class="u-form-group u-form-partition-factor-2 u-form-group-1">
              <label for="text-18e7" class="u-label">Report ID</label>
              <input type="text" placeholder="" id="text-18e7" name="id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->id}}" readonly>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-group-2">
              <label for="text-6608" class="u-label">Name</label>
              <input type="text" placeholder="" id="text-6608" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->name}}" readonly>
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-5531" class="u-label">Address</label>
              <input type="text" placeholder="" id="text-5531" name="address" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->address}}" readonly>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
              <label for="text-c9d2" class="u-label">Location</label>
              <input type="text" placeholder="" id="text-c9d2" name="location" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->location}}" readonly>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
              <label for="text-ef7a" class="u-label">Area affected</label>
              <input type="text" placeholder="" id="text-ef7a" name="area" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->area}}" readonly>
            </div>
            <div class="u-form-group u-form-group-6">
              <label for="text-9426" class="u-label">Defects</label>
              <input type="text" placeholder="" id="text-9426" name="defect" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->defect}}" readonly>
            </div>
            <div class="u-form-group u-form-group-7">
              <label for="text-f6b1" class="u-label">Comments</label>
              <input type="text" placeholder="" id="text-f6b1" name="comment" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->comment}}" readonly>
            </div>
            <div class="u-form-group u-form-group-8">
              <label for="text-914c" class="u-label">Contractor in charge</label>
              <input type="text" placeholder="" id="text-914c" name="contractor" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->contractor}}" readonly>
            </div>
            <div class="u-form-group u-form-group-9">
              <label for="text-1c25" class="u-label">Status</label>
              <input type="text" placeholder="" id="text-1c25" name="status" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="{{$data->status}}" readonly>
            </div>
            <!--<div class="u-align-left u-form-group u-form-submit">
              <a href="#" class="u-border-2 u-border-custom-color-3 u-btn u-btn-submit u-button-style u-hover-custom-color-3 u-white u-btn-1">Submit</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">-->
          </form>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-53d4"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">We hope you have a pleasant stay at the Noire Residents.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-design" target="_blank">
        <span>Free Website Design</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Layout generator</span>
      </a>. 
    </section>
  </body>
</html>
