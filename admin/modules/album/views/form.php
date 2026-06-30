<div class="col-sm-12 well" ng-controller="ctrl_album">
     <div class="col-sm-6" ng-class="{'col-sm-12': !showData}">
         <form class="admin-form" name="form2" id="form2" ng-submit="save_data(x)" enctype="multipart/form-data">
        
            <input type="text" name="id" ng-model="x.album_id" hidden>
			<div class="admin-stepper" ng-init="step='details'; showData=true">
				<button type="button" class="admin-step" ng-class="{'is-active': step==='details'}" ng-click="step='details'">Details</button>
			</div>
            <div id="validation2"></div>
			<div ng-show="step==='details'">
            <div class="admin-section-title">Album Details</div>
            <div class="col-lg-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Album Title</label>
                <input ng-model="x.title" name="title" class="form-control" autofocus placeholder="Enter Album Title" required>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Status (Show/Hide)</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" ng-model="x.status"
                      ng-init="x.status = (x.status === undefined || x.status === null || x.status === '') ? '1' : x.status"
                      ng-true-value="'1'" ng-false-value="'0'">
                    Show Album
                  </label>
                </div>
              </div>
            </div>
			<div class="col-lg-12">
              <div class="form-group">
                <label>Album Image</label>
                <input type="file" name="image" class="form-control">
                <input ng-model="x.image" name="old_image" hidden>
                <div class="mt-2" ng-show="x.image">
                  <img ng-src="<?=base_url('assets/uploads/album')?>/{{x.image}}" style="height:60px;">
                </div>
              </div>
            </div>
			</div>
           
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            
            <div id="result2" class="pull-left"></div>
            <br>
            <div class="pull-right"> 
            <div id="webprogress2" style="display: none">
                <img src="<?=base_url("assets/images/progress/ajax-loader9.gif")?>">
            </div>
               <button type="submit" id="submitbtn2" accesskey="s" class="btn btn-info" ng-disabled="form2.$invalid"><u><b>S</b></u>ave Album</button>
               <a class="btn btn-default" accesskey="c" ng-click="filter_new()"><u><b>C</b></u>ancel</a> 
            </div>
        </form>
    </div>
	<div class="admin-data-toggle">
		<button type="button" class="btn btn-default btn-xs" ng-click="showData=!showData">
			{{showData ? 'Hide Records' : 'Show Records'}}
		</button>
	</div>
	<div class="admin-data-panel" ng-show="showData">
		<?php 
		include 'data.php';
		?>
	</div>
</div>
