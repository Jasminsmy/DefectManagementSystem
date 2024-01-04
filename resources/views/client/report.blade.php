<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Lists of defects report">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>defectreports</title>
    <link rel="stylesheet" href="defectclient/nicepage.css" media="screen">
<link rel="stylesheet" href="defectclient/defectreports.css" media="screen">
    <script class="u-script" type="text/javascript" src="defectclient/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="defectclient/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "defectclient/images/25.png"
}</script>
    <meta name="theme-color" content="#4a5e8b">
    <meta property="og:title" content="defectreports">
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
    <section class="u-clearfix u-palette-3-light-3 u-section-1" id="sec-b26d">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <a href="/addreport" class="u-border-2 u-border-custom-color-1 u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius-7 u-text-hover-white u-white u-btn-1">New Report</a>
        <h2 class="u-text u-text-default u-text-1">Lists of defects report</h2>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="12.6%">
              <col width="16.8%">
              <col width="16.9%">
              <col width="34.5%">
              <col width="19.2%">
            </colgroup>
            <thead class="u-palette-4-base u-table-header u-table-header-1">
              <tr style="height: 38px;">
                <th class="u-custom-color-1 u-table-cell u-table-cell-1">Report ID</th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-1 u-table-cell u-table-cell-2">Location</th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-1 u-table-cell u-table-cell-3">Area</th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-1 u-table-cell u-table-cell-4">Defect Lists</th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-1 u-table-cell u-table-cell-4">Status</th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-1 u-table-cell u-table-cell-4">Contractor in charge</th>
                <th class="u-border-1 u-border-palette-4-base u-custom-color-1 u-table-cell u-table-cell-5">Action</th>
              </tr>
            </thead>
            <tbody class="u-table-body">
              @foreach($data as $data)
              @if(Auth::user()->name== $data->name)
              <tr style="height: 75px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-6">{{$data->id}}</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">{{$data->location}}</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">{{$data->area}}</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">{{$data->defect}}</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">{{$data->status}}</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">{{$data->contractor}}</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                    <a class="u-border-2 u-border-custom-color-1 u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius-7 u-white u-btn-2" href="{{url('/clientreportpage', $data->id)}}">View</a><br/>
                </td>
              </tr>
              @endif
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-3-light-3 u-section-2" id="sec-a089">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-image u-image-round u-radius-38 u-image-1" src="indexpage/images/6ba7158a372eecc055b5a55fa134b59964f7f3d6294d55d38a93806d1d572d55df503197e95dabc717182ad504e4cb976452abf10c63026f3fbc8a_1280.jpg" alt="" data-image-width="1280" data-image-height="847">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img class="u-image u-image-round u-radius-38 u-image-2" src="indexpage/images/11f7d0c3502a0038ee8f2cf0d078bd7738bf089a562c5bb020a2d978e8e6de6b4c28418ef29b915a07dbd32bf840769f0e6f8c12fe3cba30805dea_1280.jpg" alt="" data-image-width="1280" data-image-height="720">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img class="u-image u-image-round u-radius-38 u-image-3" src="defectclient/images/c7a001bc2dc0e2c837cae6c3802aadfbc872f90d6e754ebef0fb30d088df54231fbc153c8cf24a75b6dc4b740071bf65a319a5616316b9b67a03d4_1280.jpg" alt="" data-image-width="150" data-image-height="147">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <img class="u-image u-image-round u-radius-38 u-image-4" src="defectclient/images/e1be5a84a3c9e9296b36d0a749a92ff845bb2b942d5373692ea25937e96b100f486c54ecad956515b3f7302ae6a7935d84a28f3ba2d01d01efb7e9_1280.jpg" alt="" data-image-width="960" data-image-height="1280">
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
