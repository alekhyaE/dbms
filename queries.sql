/*11. select the item_id from orders which is ordered the maximum no of items and the chef who made it along with  his adress  */

SELECT item_id from orders GROUP by item_id HAVING count(*)= (max(no_of_items));   /* working  */



 

/*Find the employee who is working as a manager and resides in the same location as the supplier who supplies for the branch   
select emp_id  from employee where emp_id in((select emp_id from employee where type_of_work ='manager') and (select emp_id from employee as e,branch b where e.branch_id=b.b_id and b.location=e.address)) ;
*/
select emp_id from employee where branch_id in(select b_id from branch,employee where location=address and type_of_work='manager');   /* working */




/*select emp_id from employee ,branch  where type_of_work='manager' and branch_id=b_id and location=address;  */

/*  select the customer id who gave the rating greater than the average rating of the restaurant  */
(select name from  customer c,feedback f where f.rating  >any(select avg(rating) from feedback)) and (select name from customer c,feedback f where c.customer_id=f.cust_id);










/* select the name of all the cheffs who cooks atleast  2 items in the menu */    /* working  */
select name from employee having(select count(*) from menu where emp_id=cheff_id)>=2;





/*select location,count(*),supp_id from branch,employee where b_id=branch_id group by b_id;   */
select location,count(*),supp_id from branch,employee where b_id=branch_id group by b_id having count(*)>11;   /* working  */
                                                                                   



/* select the foodid which is ordered the maximum i.e more frequently and the chef who basically prepares it and the location where the cheff comes from */

select name from employee where emp_id in (select cheff_id from menu where food_id in (select item_id,max(no_of_items) from orders)); 
																			/* Not working  */


/* find the employee names who works in branch 1 either as a chef or as a server   */




/*   */

/*Increase the price of the food items by 5%   */
select iname, cost from menu;
update menu	set cost=1.05*cost ;    
select iname, cost from menu;



/* select customer and chef where customers food is prepared by the chef who come from the same place as the customer	*/
select customer_id, c.name, emp_id , e.name from(	(
									(customer as c join orders on o_id=order_no)
									 	join cooks on item_id=foods_id)
											join employee as e on chef_id=emp_id) 
								where c.address=e.address;
								
				

/* select customer who bills morethan 50000 through  catering from branch 1*/
select name from ((customer as c join avails_catering on customer_id=custy_id ) join catering on cat_id=catering_id )where branch_id='b01' and total_cost>50000;				
