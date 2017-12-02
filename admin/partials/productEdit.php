    <?php
session_start();
error_reporting(0);
					
  

					 
$sessionname= $_SESSION['name'];
?>
    
    <button type="button" class="close" ng-click="cancel();">
        <i class="fa fa-times-circle-o" style="margin:10px;color:blue;"></i>
    </button>
 <div class="modal-header">
        <h3 class="modal-title"> Inventory For <?php echo $sessionname; ?></h3>
    </div>
    
    <div class="modal-body">
        <form name="product_form" class="form-horizontal" role="form" novalidate>
            <form-element label="EMAIL" mod="product">
                <input type="text" class="form-control" name="receptionemail" placeholder="RECIPIENT EMAIL" ng-model="product.receptionemail" ng-disabled="product.id" focus/>
            </form-element>
            <form-element  mod="product">
                <input type="hidden" class="form-control"  name="username" ng-model="product.username" ng-init="product.username='<?php echo $sessionname; ?>'" value="<?php echo $sessionname; ?>" disabled  focus/>
               
           
            </form-element>
           
          
            
            
            
            
            
           
            <form-element label="AVIABILITY" mod="product">
                <input type="text" name="startdate" class="form-control" placeholder="FROM eg:- MM/DD/YYYY" ng-model="product.startdate"  />

            </form-element>
            <form-element  mod="product">
                <input type="text" name="enddate" class="form-control" placeholder="TO eg:- MM/DD/YYYY" ng-model="product.enddate"  />

            </form-element>
            
            
            <form-element label="SINGLE ROOM" mod="product">
                <input type="text" name="single" class="form-control" placeholder="QTY" ng-model="product.single"  />

            </form-element>
            <form-element  mod="product">
                <input type="text" name="singleroomprice" class="form-control" placeholder="PRICE PER ROOM" ng-model="product.singleroomprice"  />

            </form-element>
            
          
           
            
           
         

            <div class="space"></div>
            <div class="space-4"></div>
            <div class="modal-footer">
                <form-element label="">
                    <div class="text-right">
                        <a class="btn btn-sm" ng-click="cancel()"><i class="ace-icon fa fa-reply"></i>Cancel</a>
                        <button ng-click="saveProduct(product);"
                                ng-disabled=" enableUpdate"
                                class="btn btn-sm btn-primary"
                                type="submit">
                            <i class="ace-icon fa fa-check"></i>{{buttonText}}
                        </button>
                    </div>
                </form-element>
            </div>
        </form>
    </div>

