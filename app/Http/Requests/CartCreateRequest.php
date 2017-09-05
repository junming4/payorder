<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'goods_id' => 'required|integer',
            'store_id' => 'required|integer',
            'goods_name' => 'required',
            'goods_num' => 'required|integer',
            'price' => 'required'
        ];
    }

    /**
     * messages
     *
     * @return array
     * @auth 肖俊明<xiaojunming@eelly.net>
     * @since 2017年08月13日
     */
    public function messages()
    {
        return [
            'goods_id.required' => '必须填写“商品ID”。',
            'store_id.required' => '必须填写“店铺ID”。',
            'goods_id.integer' => '必须填写“商品ID”。',
            'goods_name.required' => '必须填写“商品名”。',
            'goods_num.integer' => '必须填写“商品ID”。',
            'price.required' => '必须填写“价格”。',
        ];
    }

    /**
     * fillData
     *
     * @return array
     * @auth 肖俊明<xiaojunming@eelly.net>
     * @since 2017年08月13日
     */
    public function fillData()
    {
        return [
            'goods_id' => $this->goods_id,
            'store_id' => $this->store_id,
            'goods_name' => $this->goods_name,
            'goods_num' => $this->goods_num,
            'price' => $this->price,
            'user_id' => 1,
            'options' => [], //todo 额外数据为空
        ];
    }

}
