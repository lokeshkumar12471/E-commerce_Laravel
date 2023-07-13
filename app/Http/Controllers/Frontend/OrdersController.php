<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\OrderList;
use App\Models\ProductSize;
use App\Models\ProductSubCategory;
use Illuminate\Support\Facades\DB;


class OrdersController extends Controller
{

 public function procced_checkout(Request $request)
{
    $ProductIds = $request->input('ProductIds');
    $Total = $request->input('Total');
    $product_size = $request->input('Size');
    $userID = $request->session()->get('id');

    $Orderdetails = new OrderList();
    $Orderdetails->product_id = $ProductIds;
    $Orderdetails->status = "OrderPlaced";
    $Orderdetails->total_price = $Total;
    $Orderdetails->product_size = $product_size;
    $Orderdetails->user_id = $userID;
    $Orderdetails->save();

    $response['status'] = 1;
    echo json_encode($response, true);
}

// public function getOrderDetails($id) {
//     $data['orderitems'] = OrderList::where('id', $id)->first();
//     $totalPro = [];

//     if ($data['orderitems']) {
//         $productIds = explode(',', $data['orderitems']->product_id);

//         foreach ($productIds as $prodid) {
//             $product['productsitems'] = ProductSize::where('id', $prodid)->get(); // Use first() instead of get()
//             if ($product['productsitems']) {
//                 $totalPro[] = $product['productsitems'];
//             }
//         }
//     }
//     // Retrieve product details using the query with the condition where('id', $prodid)
//     $products = DB::select('SELECT product_sizes.product_images, product_sizes.size, product_sizes.price, product_sizes.inventory AS quantity, product_sub_categories.sub_category_name
//                    FROM product_sizes
//                    INNER JOIN product_sub_categories ON product_sizes.subcategory_id = product_sub_categories.id
//                    WHERE product_sizes.id IN ('.implode(',', $productIds).')');

//     return response()->json(['data' => $data, 'totalPro' => $totalPro, 'products' => $products]);
// }

   public function getOrderDetails($id) {
    $data['orderitems'] = OrderList::where('id', $id)->first();
    $productIds = explode(',', $data['orderitems']->product_id);
    $productSize = explode(',', $data['orderitems']->product_size);

    $totalPro = [];

    foreach ($productIds as $index => $productId) {
        $productItem = ProductSize::where('id', $productId)->first();

        if ($productItem) {
            $productItem->size = $productSize[$index];
            $productItem->subcategory_name = ProductSubCategory::where('id', $productItem->subcategory_id)->pluck('sub_category_name')->first();
            $totalPro[] = $productItem;
        }
    }

    $productIdsString = implode(',', $productIds);

    $products = DB::select("
        SELECT product_sizes.product_images, order_lists.product_size, product_sizes.price, product_sub_categories.sub_category_name
        FROM product_sizes
        INNER JOIN product_sub_categories ON  product_sub_categories.id = product_sizes.subcategory_id
        INNER JOIN order_lists ON  order_lists.id = product_sizes.id
        WHERE product_sizes.id IN ($productIdsString)
    ");

    return response()->json(['data' => $data, 'totalPro' => $totalPro, 'products' => $products]);
}

    }