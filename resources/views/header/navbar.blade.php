<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> أرشفة كتب </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="navbar-form navbar-right">
          <div class="input-group">
              <input type="text" class="form-control" placeholder=" بحث " aria-describedby="basic-addon1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i> </span>
          </div>
        </form>

          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">اللغات<span class="caret"></span></a>
            <ul class="dropdown-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
            </ul>
          </li>
        </ul>

          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> الكتب الواردة <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">اضافة كتاب وارد</a></li>
                <li role="separator" class="divider"></li>
              <li><a href="#">كتب واردة داخلية</a></li>
              <li><a href="#">كتب واردة خارجية</a></li>
            </ul>
          </li>
        </ul>

          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> الجهات <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">اضافة جهة</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">الجهات المرسلة</a></li>
                <li><a href="#">الجهات المستقبلة</a></li>
            </ul>
          </li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
