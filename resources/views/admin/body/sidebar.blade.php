@include('sweetalert::alert')
<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          MSU-IIT<span>&nbsp;NMPC</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard')}} " class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Website</li>
          <li class="nav-item">
            <a href="{{ url('')}}" class="nav-link">
              <i class="link-icon" data-feather="map-pin"></i>
              <span class="link-title">MSU-IIT NMPC</span>
            </a>
          </li>
          <li class="nav-item nav-category">Job Vacancy</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="briefcase"></i>
              <span class="link-title">Jobs</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.jobs') }}" class="nav-link">All Jobs Vacant</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('add.job') }}" class="nav-link">Add Jobs</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Branch Locator</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="map"></i>
              <span class="link-title">Branches</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.branches') }}" class="nav-link">All Branches</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('spot.index') }}" class="nav-link">Branch List</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('spot.create') }}" class="nav-link">Add Branch</a>
                </li>
                <!-- <li class="nav-item">
                  <a href="{{ route('circles') }}" class="nav-link">Circles</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('polygons') }}" class="nav-link">Polygons</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('layers') }}" class="nav-link">Layers</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('layergroup') }}" class="nav-link">Layer Group</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('getcoordinates') }}" class="nav-link">Get Coordinates</a>
                </li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Special pages</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <!-- <li class="nav-item">
                  <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/faq.html" class="nav-link">Faq</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/invoice.html" class="nav-link">Invoice</a>
                </li> -->
                <li class="nav-item">
                  <a href="{{route('admin.profile')}}" class="nav-link">Profile</a>
                </li>
                <!-- <li class="nav-item">
                  <a href="pages/general/pricing.html" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/timeline.html" class="nav-link">Timeline</a>
                </li> -->
              </ul>
            </div>
          </li> 
          <!-- <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
          <!-- <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item" href="../demo1/dashboard.html">
            <img src="../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item active" href="../demo2/dashboard.html">
            <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
          </a> -->
        </div>
      </div>
    </nav>