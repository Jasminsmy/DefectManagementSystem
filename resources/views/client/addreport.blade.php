<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>submitdefect</title>
    <link rel="stylesheet" href="defectclient/nicepage.css" media="screen">
    <link rel="stylesheet" href="defectclient/submitdefect.css" media="screen">
    <link rel="stylesheet" href="newdev/css/bootstrap.min.css" media="screen">
    <script class="u-script" type="text/javascript" src="defectclient/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="defectclient/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "defectclient/images/25.png"
}</script>
    <meta name="theme-color" content="#4a5e8b">
    <meta property="og:title" content="submitdefect">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-e826"><a href="/clientindex" class="u-border-none u-btn u-button-style u-none u-btn-1"></a><a href="/clientindex" class="u-image u-logo u-palette-1-base u-image-1" data-image-width="1920" data-image-height="1080">
        <img src="defectclient/images/25.png" class="u-logo-image u-logo-image-1">
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
              <a href="{{ route('reports')}}" class="u-border-2 u-border-hover-white u-border-white u-btn u-button-style u-custom-item u-none u-btn-3">Report</a>
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
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h3 class="u-custom-font u-font-oswald u-text u-text-default u-text-1">DEFECT REPORT FORM</h3>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-form u-form-1">

                    <form action="{{ route('report.post') }}" method="POST" class="tm-edit-product-form">
                                @csrf
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Client Name</label>
                                    <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="addresses" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Address</label>
                                    <input id="address" name="address" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="{{ Auth::user()->address }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="location" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Location</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="location" id="location">
                                        <option selected>Select one</option>
                                        <option value="Main Entrance">Main Entrance</option>
                                        <option value="Living Room">Living Room</option>
                                        <option value="Dining Room">Dining Room</option>
                                        <option value="Kitchen">Kitchen</option>
                                        <option value="Yard">Yard</option>
                                        <option value="Balcony">Balcony</option>
                                        <option value="Master Bedroom">Master Bedroom</option>
                                        <option value="Bedroom 1">Bedroom 1</option>
                                        <option value="Bedroom 2">Bedroom 2</option>
                                        <option value="Master Bathroom">Master Bathroom</option>
                                        <option value="Bathroom 1">Bathroom 1</option>
                                        <option value="Bathroom 2">Bathroom 2</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="area" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Area</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="area" id="area">
                                        <option selected>Select one</option>
                                        <option value="Floor">Floor</option>
                                        <option value="Wall">Wall</option>
                                        <option value="Ceiling">Ceiling</option>
                                        <option value="Door">Door</option>
                                        <option value="Window">Window</option>
                                        <option value="Internal">Internal Fixtures</option>
                                        <option value="M&amp: Electrical">M&amp: Electrical</option>
                                        <option value="M&amp: Plumbing">M&amp: Plumbing</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="defect" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Defect List</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="defect" id="defect">
                                        <option value="Tile - chipped, cracked">Tile - chipped, cracked</option>
                                        <option value="Tile - different colour">Tile - different colour</option>
                                        <option value="Tile - hollow, dislodged, pop-up">Tile - hollow, dislodged, pop-up</option>
                                        <option value="Tile - stains/scratch">Tile - stains/scratch</option>
                                        <option value="Tile - waterponding">Tile - waterponding</option>
                                        <option value="Skirting - cracked, rough, paint stains">Skirting - cracked, rough, paint stains</option>
                                        <option value="Painted wall - dirty, stained">Painted wall - dirty, stained</option>
                                        <option value="Faulty Lockset/hinges, hard to open">Faulty Lockset/hinges, hard to open</option>
                                        <option value="Glass - broken, chipped, scratched">Glass - broken, chipped, scratched</option>
                                        <option value="Frame - chipped, scratched">Frame - chipped, scratched</option>
                                        <option value="Railing - stained, dented, scratched">Railing - stained, dented, scratched</option>
                                        <option value="Water piping - leakage">Water piping - leakage</option>
                                        <option value="Water tank - water leakage, over flow">Water tank - water leakage, over flow</option>
                                        <option value="Socket/switch - scratched, loosen, tight">Socket/switch - scratched, loosen, tight</option>
                                        <option value="Socket/switch - not aligned">Socket/switch - not aligned</option>
                                        <option value="No power supply">No power supply</option>
                                        <option value="No water supply">No water supply</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="commenting" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Comments
                                    </label>
                                    <input id="comment" name="comment" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Submit
                                        </button>
                                    </div>
                                </div>
                            </form>

                  </div>
                </div>
              </div>
              
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
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>
