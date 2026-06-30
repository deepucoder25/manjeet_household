<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li>
		<li><a href="javascript:void(0)">Bookings</a></li>
	</ol>
</div>
<div class="col-sm-12">
	<div class="table_horizontal">
		<div class="input-group custom_addon">
			<div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;"><i class="fa fa-search"></i>
			</div>
			<input type="text" ng-model="search_text" placeholder="Search here...">
		</div>
	</div>

	<div class="booking-filters">
		<select class="form-control" ng-model="statusFilter">
			<option value="">All Status</option>
			<option value="converted">Converted</option>
			<option value="not_converted">Not Converted</option>
		</select>
		<select class="form-control" ng-model="dateFilter">
			<option value="">All Dates</option>
			<option value="this_month">This Month</option>
			<option value="this_year">This Year</option>
		</select>
		<select class="form-control" ng-model="sortBy">
			<option value="-timestamp">Newest First</option>
			<option value="timestamp">Oldest First</option>
		</select>
	</div>

	<div class="table-data admin-table booking-table">
		<table class="table table-hover">
			<thead>
				<tr class="active">
					<th>Date</th>
					<th>Name</th>
					<th>Phone</th>
					<th>From → To</th>
					<th>Message</th>
					<th>Status</th>
					<th>Reason</th>
					<th style="width:85px">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr dir-paginate="y in datadb | filter: search_text | filter: bookingFilter | orderBy: sortBy | itemsPerPage: 15" pagination-id="booking">
					<td>{{y.timestamp}}</td>
					<td><strong>{{y.name}}</strong><br><small>{{y.email}}</small></td>
					<td><a href="tel:{{y.phone}}"><i class="fa fa-phone"></i> {{y.phone}}</a></td>
					<td><b>{{y.mfrom}}</b> → <b>{{y.mto}}</b></td>
					<td><span class="msg-ellipsis">{{y.msg}}</span></td>
					<td>
						<select class="form-control input-sm" ng-model="y.status" ng-change="updateBooking(y)">
							<option value="converted">Converted</option>
							<option value="not_converted">Not Converted</option>
						</select>
					</td>
					<td>
						<select class="form-control input-sm" ng-model="y.drop_reason" ng-disabled="y.status!='not_converted'" ng-change="updateBooking(y)">
							<option value="">-- Select Reason --</option>
							<option value="price_high">Price Too High</option>
							<option value="time_issue">Timing Not Suitable</option>
							<option value="service_mismatch">Service Not Required</option>
							<option value="competitor">Chose Competitor</option>
							<option value="no_response">No Response</option>
						</select>
					</td>
					<td>
						<a href="javascript:void(0)" style="color:red" ng-click="deleteBooking(y.id)">
							<span class="fa fa-trash fa-2x"></span>
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="col-sm-12">
		<dir-pagination-controls boundary-links="true" pagination-id="booking" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
	</div>
</div>

<style>
	.booking-filters{
		display:flex;
		gap:10px;
		flex-wrap:wrap;
		margin: 10px 0 14px 0;
	}
	.booking-filters .form-control{
		max-width: 220px;
	}
	.booking-table .msg-ellipsis{
		display:block;
		max-width: 320px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	@media (max-width: 767px){
		.booking-filters .form-control{
			max-width: 100%;
		}
		.booking-table .msg-ellipsis{
			max-width: 160px;
		}
	}
</style>
