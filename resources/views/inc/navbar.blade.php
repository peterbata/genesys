<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">{{config('app.name', 'GeneSys')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/clients">View Client</a></li>
            <li><a href="/investment">Investment</a></li>
            <li><a href="/insurance">Insurance</a></li>
            <li><a href="/report">Reports</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			  <li><a href="/clients/create">Create Client</a></li>
		  </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Contract Number">
          </form>
        </div>
      </div>
    </nav>