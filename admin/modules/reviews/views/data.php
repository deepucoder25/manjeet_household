 <div class="heading">
    <ol class="breadcrumb">
      <li><a href="#/">Dashboard</a></li> 
      <li><a href="javascript:void(0)">Reviews</a></li>
    </ol>
</div>

<div class="col-sm-12 well">
    <div class="table-responsive">
		<div class="input-group custom_addon">
            <div class="input-group-addon"  style="box-shadow:none; -webkit-box-shadow:none;"><i class="fa fa-search"></i></div>
				<input type="text" ng-model="search_text" placeholder="Search here...">
			</div>
		</div>
		<div class="admin-table-title">Records</div>
<div class="table-data admin-table">
			<table class="table table-hover">
				<thead>
					<tr class="active">
						<th>Review ID</th>
						<th>User</th>
						<th>Email</th>
						<th>Rating</th>
						<th>Comment</th>
						<th>Posted on</th>
						<th>Status</th>
						<th style="width:100px">Timestamp</th>
						<th style="width:140px">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10" >
						<td>{{y.r_id}}</td>
						<td>{{y.unm}}</td>
						<td>{{y.email}}</td>
						<td ng-if="y.rt>3" class='success'>{{y.rt}}/5</td>
						<td ng-if="y.rt==3" class='warning'>{{y.rt}}/5</td>
						<td ng-if="y.rt<3" class='danger'>{{y.rt}}/5</td>
						<td>{{y.cmt}} <img style="width:100px;height:100px;" ng-if="y.img" ng-src="<?=base_url('assets/uploads/reviewimg/thumb')?>/{{y.img}}"></td>
						<td>{{y.pd}}</td>
						<td>
						  <div style="height:25px;width:25px;border-radius:50%;background:red" ng-if="y.st=='0'"></div>
	            		  <div style="height:25px;width:25px;border-radius:50%;background:green" ng-if="y.st=='1'"></div>
						</td>
						<td>{{y.tm}}</td>
						<td>
						  <select ng-model='y.st' ng-change='update(y.r_id,y.st)'>
						      <option value='0'>Hide</option>
						      <option value='1'>Show</option>
						  </select>
						  <button class="btn btn-xs btn-primary" style="margin-top:6px;" ng-click="openEdit(y)">Edit</button>
						  <button class="btn btn-xs btn-danger" style="margin-top:6px;" ng-click="deleteReview(y.r_id)">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
        </div>
        <div class="col-sm-12">
            <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
        </div>
   </div>

<!-- Edit Review Modal -->
<div class="modal fade" id="reviewEditModal" tabindex="-1" role="dialog" aria-labelledby="reviewEditLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="reviewEditLabel">Edit Review</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" ng-model="editForm.name">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" ng-model="editForm.email">
        </div>
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" ng-model="editForm.r_title">
        </div>
        <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" rows="4" ng-model="editForm.r_desc"></textarea>
        </div>
        <div class="form-group">
          <label>Stars (1-5)</label>
          <select class="form-control" ng-model="editForm.stars">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <div class="form-group">
          <label>Type</label>
          <input type="text" class="form-control" ng-model="editForm.r_type" placeholder="e.g. Customer">
        </div>
        <div class="form-group">
          <label>Status</label>
          <select class="form-control" ng-model="editForm.status">
            <option value="0">Hide</option>
            <option value="1">Show</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" ng-click="saveEdit()">Save Changes</button>
      </div>
    </div>
  </div>
</div>



