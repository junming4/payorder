<?php

namespace App\Http\Controllers\Cart;

use App\Http\Requests\CartCreateRequest;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    protected $cart;
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = $this->cart->content();
        return view('cart.index', compact('list'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        //
    }


    /**
     * 添加购物车.
     *
     * @param CartCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月04日
     */
    public function store(CartCreateRequest $request)
    {

        $data = $request->fillData();

        if ($this->cart->add($data['goods_id'], $data['goods_name'], $data['goods_num'],
            $data['price'], $data['options'])
        ) {
            return Redirect::to(route('cart.index'));
        }
        return Redirect::back()->withInput()->withErrors('操作失败！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
