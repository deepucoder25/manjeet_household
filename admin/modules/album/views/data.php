<div class="col-sm-6">
    <div class="col-sm-12 table_horizontal">
		
		<div class="input-group custom_addon">
            <div class="input-group-addon info"><i class="fa fa-search"></i></div>
    	     <input type="text"  ng-model="search_text" placeholder="Search here...">
    	</div>
		<div class="table-data admin-table">
			<table class="table table-hover">
				<thead>
					<tr class="active">
						<th class="text-center">Title</th>
						<th class="text-center">Image</th>
						<th class="text-center">Status</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
				
					<tr dir-paginate="z in albums | filter: search_text | itemsPerPage: 5" paginate-id="album">
						<td>{{z.title}}</td>
						<td>
							<img ng-if="z.image" ng-src="<?= base_url() ?>assets/uploads/album/{{z.image}}" style="height: 40px">
							<i ng-if="!z.image">-</i>
						</td>
						<td>
							<div style="height:18px;width:18px;border-radius:50%;background:red;margin:auto" ng-if="z.status=='0'"></div>
							<div style="height:18px;width:18px;border-radius:50%;background:green;margin:auto" ng-if="z.status=='1'"></div>
						</td>
						<td>
						  <a href="javascript:void(0)" ng-click="update_call(z)" data-toggle="modal" data-target=".bs-example-modal-sm">
    						<span class="fa fa-pencil fa-2x"></span></a>
    						&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" ng-click="delete_data(z.album_id)">
    						<span class="fa fa-trash"></span></a>               
						</td>
					</tr>
				</tbody>
			</table>
        </div>
        <div class="col-sm-12">
            <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="<?=site_url('app/pagination')?>" paginate-id="album"></dir-pagination-controls>
        </div>
        
   </div>
   

