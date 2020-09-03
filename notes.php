//Main function:
	-item management
		-brand,category,subcategory
	-sell,shopping
	-order management
		-items,customer
		-orders,order_details
	-customer management
		-reports

//orders
-voucherid,user_id,order_date,staus
//orders_details
-voucherid,product_id,qty

//brands
-
==>1|b1|photo
==>2|b2|photo

//categories
==>1 |fashion|photo
==>2 |electronic|photo



Model Relationships
-------------------
-one to one	
	-hasOne(p)
	-belongs(c)
-one to many
	-hasMany(p)
	-belongs(c)
-many to many
	-belongstoMany
	-pivot table
-------------------------------------------------------
Homework(using backend template)
--------------
	-create route for deshboard page(get)
	-create master blade(viewws/backendtemplate.blade.php)
	-create child blade (views/dashboard.blade.php)
	-create controller BackendController
		-create method dashboardfun()
		-call view(backend.dashboard)
-----------------------------------------------------
Item(Curd)
-------------
-create - show form,store data
-retrieve - displaydata
-update- show form with old value, update data
-delete- delete data