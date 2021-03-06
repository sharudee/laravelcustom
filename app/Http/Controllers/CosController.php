<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Model\entity;

class CosController extends Controller {

	public function __construct()			// ต้องมีเป็น  Function แรก
	{
		// Initial Value
		//$this->middleware('auth');     // Set ให้ผ่าน Auth ก่อน

		
	}	

	public function getIndex()
	{
		return view('sales.index');
		
	}

	// ---------------------------  Promotion ---------------------------//

	public function getPmtmast()
	{
		//return "Ok";

		return view('sales.show_promotion');
	}

	public function getAddpromotion()
	{
		//return "Ok";

		return view('sales.add_promotion');
	}	

	public function getPromotioncust()
	{
		//return "Ok";

		return view('sales.show_promotion_customer');
	}
	public function getPromotionprod()
	{
		//return "Ok";

		return view('sales.show_promotion_product');
	}
	public function getPromotiondisc()
	{
		//return "Ok";

		return view('sales.show_promotion_discount');
	}
	
	public function getSku()
	{
		//return "Ok";

		return view('sales.show_sku');
	}

	public function getAddsku()
	{
		//return "Ok";

		return view('sales.add_sku');
	}



	// ---------------------------  Entity  ---------------------------//

	public function getEntity()
	{
		//return "Ok";

		return view('sales.show_entity');
	}

	public function getShowentity()
	{
		$data_entity = Entity::all();
		
		//return  view('books.showbook_data')->with('book',$data_book) ; // ส่งค่าไปที่ View\
		return  view('sales.show_entity_data') ->with('entity',$data_entity) ;  // ส่งค่าไปที่ View
		//return  view('sales.show_entity_data') ;
	}

	public function getAddentity()
	{
		//return "Ok";

		return view('sales.add_entity');
	}


	// ---------------------------  Doc Mast ---------------------------//

	public function getDocmast()
	{
		//return "Ok";

		return view('sales.show_docmast');
	}

	public function getAdddocmast()
	{
		//return "Ok";

		return view('sales.add_docmast');
	}

	// ---------------------------  Wh Mast ---------------------------//

	public function getWhmast()
	{
		//return "Ok";

		return view('sales.show_whmast');
	}

	public function getAddwhmast()
	{
		//return "Ok";

		return view('sales.add_whmast');
	}

	// ---------------------------  PC ---------------------------//

	public function getPc()
	{
		//return "Ok";

		return view('sales.show_pc');
	}

	public function getAddpc()
	{
		//return "Ok";

		return view('sales.add_pc');
	}

	public function getPcwork()
	{
		//return "Ok";

		return view('sales.show_pcwork');
	}

	public function getAddpcwork()
	{
		//return "Ok";

		return view('sales.add_pcwork');
	}

	public function getAddpctime()
	{
		//return "Ok";

		return view('sales.add_pctime');
	}


	// --------------------------- Commission & Incentive -----------------------//
	public function getCommission()
	{
		//return "Ok";

		return view('sales.show_commission');
	}

	public function getIncentive()
	{
		//return "Ok";

		return view('sales.show_incentive');
	}

	// ---------------------------  Customer ---------------------------//

	public function getAddcustomer()
	{
		//return "Ok";

		return view('sales.add_customer');
	}

	// ---------------------------  Sales ---------------------------//

	public function getAddsales()
	{
		//return "Ok";

		return view('sales.add_sales');
	}

	public function getAddreturn()
	{
		//return "Ok";

		return view('sales.add_return');
	}

	public function getAddremand()
	{
		//return "Ok";

		return view('sales.add_remand');
	}

	public function getAddcustorder()
	{
		//return "Ok";

		return view('sales.add_custorder');
	}

	

}
