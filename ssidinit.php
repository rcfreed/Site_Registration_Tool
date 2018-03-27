<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="scripts/site.js"></script>

    <title>Hello, world!</title>

    </head>

    <body>
      <form action="submit.php" method="post">

        <div class="form-row">
          <div class="form-group col-sm-3">
            <label for="ddlInitProgram">Initiating Program</label>
            <select class="custom-select" name="ddlInitProgram" id="ddlInitProgram">
              <option selected>Select...</option>
              <option value="1">Removal</option>
              <option value="2">Site Assessment</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="hidden" name="cbSSID" value="0">
            <input type="checkbox" class="custom-control-input" name="cbSSID" id="cbSSID" value="1">
            <label class="custom-control-label" for="cbSSID">Is an SSID needed for this request?</label>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-3">
            <label for"txtReqDate">Request Date</label>
            <input type="text" class="form-control DatePicker" name="txtReqDate" id="txtReqDate">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-3">
            <label for"txtInitDate">Initiating Date</label>
            <input type="text" class="form-control DatePicker" name="txtInitDate" id="txtInitDate">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-4">
            <label for="txtName">Name</label>
            <input type="text" class="form-control" name="txtName" id="txtName">
          </div>
          <div class="form-group col-sm-4">
            <label for="txtEmail">Email</label>
            <input type="email" class="form-control" name="txtEmail" id="txtEmail">
          </div>
          <div class="form-group col-sm-2">
            <label for="txtTitle">Title</label>
            <input type="text" class="form-control" name="txtTitle" id="txtTitle">
          </div>
          <div class="form-group col-sm-2">
            <label for="txtMailCode">Mail Code</label>
            <input type="text" class="form-control" name="txtMailCode" id="txtMailCode">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-12">
            <label for="txtSiteName">Site Name</label>
            <input type="text" class="form-control" name="txtSiteName" id="txtSiteName">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-12">
            <label for="txtSiteAlias">Site Aliases</label>
            <input type="text" class="form-control" name="txtSiteAlias" id="txtSiteAlias">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-12">
            <label for="txtAddress">Name</label>
            <input type="text" class="form-control" name="txtName" id="txtName">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="txtCity">City</label>
            <input type="text" class="form-control" name="txtCity" id="txtCity">
          </div>
          <div class="form-group col-sm-3">
            <label for="ddlState">State</label>
            <select class="custom-select" name="ddlState" id="ddlState">
              <option selected>Select...</option>
              <option value="1">Colorado</option>
              <option value="2">Montana</option>
              <option value="3">North Dakota</option>
              <option value="4">South Dakota</option>
              <option value="5">Utah</option>
              <option value="6">Wyoming</option>
            </select>
          </div>
          <div class="form-group col-sm-3">
            <label for="txtZipCode">Zip Code</label>
            <input type="text" class="form-control" name="txtZipCode" id="txtZipCode">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-4">
            <label for="txtCounty">County</label>
            <input type="text" class="form-control" name="txtCounty" id="txtCounty">
          </div>
          <div class="form-group col-sm-4">
            <label for="txtLatitude">Latitude</label>
            <input type="text" class="form-control" name="txtLatitude" id="txtLatitude" data-toggle="tooltip" data-placement="top" data-html="true" title="<h6>In Decimal Degrees</h6>">
          </div>
          <div class="form-group col-sm-4">
            <label for="txtLongitude">Longitude</label>
            <input type="text" class="form-control" name="txtLongitude" id="txtLongitude" data-toggle="tooltip" data-placement="top" data-html="true" title="<h6>In Decimal Degrees</h6>">
          </div>
        </div>



<p><input type="submit" /></p>
      </form>
    </body>
</html>
