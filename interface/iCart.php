<?php 
/* An interface. It is a contract that says that any class that implements this interface must have
these methods. */
interface iCart{
	public function add_toCart($item_id, $qty, $stock_id, $user_id, $uniqid);
	public function all_cartDatas($user_id);//filter by uniq ID
	public function delCart($cart_id);//delete cart 
	public function dellAllCart();
	public function allCart();
}//end iCart