SELECT item_id from orders GROUP by item_id HAVING count(*)= (max(no_of_items));

select name from employee having(select count(*) from menu where emp_id=cheff_id)>=2;

select location,count(*),supp_id from branch,employee where b_id=branch_id group by b_id having count(*)>11;

select iname, cost from menu;
update menu	set cost=1.05*cost ;    
select iname, cost from menu;


select name from ((customer as c join avails_catering on customer_id=custy_id ) join catering on cat_id=catering_id )where branch_id='b01' and total_cost>50000;				


select customer_id, c.name, emp_id , e.name from(	(
									(customer as c join orders on o_id=order_no)
									 	join cooks on item_id=foods_id)
											join employee as e on chef_id=emp_id) 
								where c.address=e.address;


select sum(rent)+sum(tax) as total_due from dues;


select iname, cost from menu;
update menu	set cost=1.05*cost ;    
select iname, cost from menu;



select c.name from customer c,orders o,menu m where c.o_id=o.order_no and o.item_id=m.food_id and o.item_id=m.food_id and cheff_id='e08';
								
select name from employee  where type_of_work='manager' and branch_id='b01' union (select name from employee where type_of_work='cheff' and branch_id='b01'); 								




