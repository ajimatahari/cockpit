<header class="header">
  <main-navbar></main-navbar>

  <!-- Second navbar -->
  <div class="navbar navbar-default" id="navbar-second" *ngIf="isUser">
    <ul class="nav navbar-nav no-border visible-xs-block">
      <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="navbar-second-toggle">
      <ul class="nav navbar-nav">
        <li [class.active]="true">
          <a href="/dashboard"><i class="icon-display4 position-left"></i> Dashboard</a>
        </li>

        <li class="dropdown mega-menu mega-menu-wide">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-puzzle4 position-left"></i> Projects
            <span class="caret"></span></a>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-strategy position-left"></i> Tickets <span class="caret"></span>
          </a>

          <ul class="dropdown-menu width-250">
            <li class="dropdown-submenu">
              <a href="#"><i class="icon-task"></i> Open Tickets</a>
            </li>
            <li class="dropdown-submenu">
              <a href="#"><i class="icon-cash3"></i> All Tickets</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- /second navbar -->

  <div class="page-header">
    <div class="page-header-content">
      <div class="page-title" *ngIf="title">
        <h4>
          <i class="icon-arrow-left52 position-left"></i>
          <span class="text-semibold">@{{ title }}</span>
          <small class="display-block">@{{ subtitle }}</small>
        </h4>
      </div>

      <!-- Shortcut links -->
      <div class="heading-elements" *ngIf="false">
        <div class="heading-btn-group">
          <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
          <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
          <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
        </div>
      </div>
    </div>
  </div>


</header>