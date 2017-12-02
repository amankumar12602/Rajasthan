<h4 class="blog-post-title">Push Inventory</h4>
<hr/>
<button type="button" class="btn btn-danger fa fa-plus" ng-click="open(product);">&nbsp;Add New Inventory</button>

<div class="table-responsive">
<div class="panel panel-primary">
  <div class="panel-heading">List of Inventorys
      <div class="sw-search" >
            <div class="nav-search" id="nav-search">
                    Filter: <span class="input-icon">
                        <input placeholder="Filter Inventorys list ..." class="nav-search-input" ng-model="filterProduct" ng-change="resetLimit();"  autocomplete="off" type="text" style="width:300px;" focus>
                        <i class="search-icon fa fa-search nav-search-icon"></i>
                    </span>
            </div>
        </div>
    </div>
  <div class="panel-body">
    <table class="table table-striped">
    <tr ng-show="products.length==0"><td style="vertical-align:middle;"><i class="fa fa-ban fa-3x"></i>&nbsp;No data found</td></tr>
    <tr ng-hide="products.length>-1"><td style="vertical-align:middle;"><i class="fa fa-cog fa-3x fa-spin"></i>&nbsp;Loading</td></tr>
    
    <tr><th ng-repeat="c in columns">{{c.text}}</th></tr>

    <tr ng-repeat="c in products | filter:filterProduct | orderBy:'-id'" id="{{c.id}}" animate-on-change='c.receptionemail  + c.singleroom + c.doubleroom + c.fourroom+ c.specialsuite' ng-animate=" 'animate'">
        <td>{{c.id}}</td><td>{{c.username}}</td><td>{{c.receptionemail}}</td><td>{{c.startdate}}</td><td>{{c.enddate}}</td><td>{{c.single}}</td><td>{{c.singleroomprice}}</td>
        <td>
            <button class="btn" ng-class="{Active:'btn-success', Inactive:''}[c.status]" ng-click="changeProductStatus(c);">{{c.status}}</button>
        </td>
        <td style="width:100px">
            <div class="btn-group">
              <button type="button" class="btn btn-default fa fa-edit" ng-click="open(c);"></button>
              <button type="button" class="btn btn-danger fa fa-trash-o" ng-click="deleteProduct(c);"></button>
            </div>
        </td>
    </tr>
    </table>
</div>
</div>
</div>
              